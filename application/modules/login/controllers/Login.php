<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->model("login_model");
    }

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{	
			$this->session->sess_destroy();
			$this->load->view("login");
	}
	
	public function validateUser()
	{
			$login = $this->security->xss_clean($this->input->post("inputLogin"));
			$passwd = $this->security->xss_clean($this->input->post("inputPassword"));

			$this->load->model("general_model");
			//busco datos del usuario
			$arrParam = array(
				"table" => "user",
				"order" => "id_user",
				"column" => "log_user",
				"id" => $login
			);
			$userExist = $this->general_model->get_basic_search($arrParam);
			
			if ($userExist) {
			
					$arrParam = array(
						"login" => $login,
						"passwd" => $passwd
					);
					$user = $this->login_model->validateLogin($arrParam); //brings user information from user table
					
					if (($user["valid"] == true)) {
						$sessionData = array(
							"auth" => "OK",
							"id" => $user["id"],
							"firstname" => $user["firstname"],
							"lastname" => $user["lastname"],
							"name" => $user["firstname"] . ' ' . $user["lastname"],
							"logUser" => $user["logUser"],
							"state" => $user["state"],
							"rol" => $user["rol"],
							"photo" => $user["photo"],
							"aprobado" => $user["aprobado"]
						);
						$this->session->set_userdata($sessionData);
						
						$this->login_model->redireccionarUsuario();
					}else{					
						$data["msj"] = "<strong>" . $userExist[0]["first_name"] . "</strong> error con la contraseña.";
						$this->session->sess_destroy();
						$this->load->view('login', $data);
					}
			}else{
				$data["msj"] = "<strong>" . $login . "</strong> no existe.";
				$this->session->sess_destroy();
				$this->load->view('login', $data);
			}
	}
	
	public function redireccionarUsuario()
	{	
		$this->login_model->redireccionarUsuario();
	}
	
	/**
	 * Formulario correo para recuperar contraseña
	 */
	public function recuperar()
	{
		$this->load->view("form_correo");
	}

	/**
	 * Se valida correo, se envia correo con enlace para cambiar contraseña y se guarda llave en la base de datos
	 */	
	public function validateEmail()
	{
			$login = $this->security->xss_clean($this->input->post("email"));
			
			$this->load->model("general_model");
			//busco datos del usuario
			$arrParam = array(
				"table" => "user",
				"order" => "id_user",
				"column" => "log_user",
				"id" => $login
			);
			$userExist = $this->general_model->get_basic_search($arrParam);
			
			if ($userExist)
			{
				$idUser = $userExist[0]['id_user'];
				
				//eliminaos datos anteriroes de tabla recuperar
				$arrParam = array(
					"table" => "recuperar",
					"primaryKey" => "fk_id_user",
					"id" => $idUser
				);
				$this->general_model->deleteRecord($arrParam);
				
				//genero llave
				$key = $this->randomText();
				
				//guardo llave en tabla recuperar
				$this->login_model->saveLlave($idUser, $login, $key);
				
				//envio correo con url para cambio de contraseña
				$this->email($key);

				$data["msjSuccess"] = "Se envio correo a <strong>" . $login . "</strong> <br>para recuperar la contraseña.";
				$this->load->view('form_correo', $data);
				
			}else{
				$data["msj"] = "<strong>" . $login . "</strong> no existe.";
				$this->session->sess_destroy();
				$this->load->view('form_correo', $data);
			}
	}
	
	/**
	 * Login por medio de LLAVE de recuperacion de contraseña
	 * @param varchar $valor: llave de la tabla recuperar
	 */
	public function keyLogin($valor = 'x')
	{
			$this->load->model("general_model");

			$arrParam = array("llave" => $valor);
			$user = $this->login_model->validateLoginKey($arrParam);//brings user information from user table
					
			if (($user["valid"] == true)) {
				$sessionData = array(
					"auth" => "OK",
					"id" => $user["id"],
					"firstname" => $user["firstname"],
					"lastname" => $user["lastname"],
					"name" => $user["firstname"] . ' ' . $user["lastname"],
					"logUser" => $user["logUser"],
					"state" => 99,
					"rol" => $user["rol"],
					"photo" => $user["photo"]
				);
				$this->session->set_userdata($sessionData);
				
				$this->login_model->redireccionarUsuario();			
			}else{					
				$data["msj"] = "<strong>Error</strong> datos incorrectos.";
				$this->load->view('login', $data);
			}
	}
	
	//FUNCION PARA CREAR UNA CLAVE ALEATORIA
	function randomText()
	{ 
			$key = "";
			$pattern = "123456789PIUYTREWQASDFGHJKLMNBVCXZ123456789PLMK1IJNBHUYGVC123456789FTRDXZSEWAQWSDERFTGYHUJ123569876543ERDFREDESWQASWQASDGHGTY"; 
			for($i=0;$i<20;$i++) { 
			  $key .= $pattern{rand(0,35)}; 
			} 
			return $key; 
	} 
	
	/**
	 * Evio de correo al usuario con llave para recuperar la contraseña
     * @since 26/12/2018
     * @author BMOTTAG
	 */
	public function email($key)
	{
			//busco informacion en la base de datos
			$arrParam = array("llave" => $key);
			$information = $this->login_model->validateLoginKey($arrParam);//brings user information from user table
										
			$subjet = "Recuperar contraseña - TuApoyo";
			$user = $information["firstname"] . ' ' . $information["lastname"];
			$to = $information["email"];
				
			//mensaje del correo
			$msj = "<p>Para ingresar a TuApoyo y recuperar su contraseña debe ingresar al siguiente enlace:</p>";
			$msj .= "<a href='" . base_url("login/keyLogin/" . $key) . "'>Recuperar contraseña</a>";
			
			$mensaje = "<html>
			<head>
			  <title> $subjet </title>
			</head>
			<body>
				<p>Señor(a)	$user:</p>
				<p>$msj</p>
				<p>Cordialmente,</p>
				<p><strong>Administrador TuApoyo</strong></p>
			</body>
			</html>";
			
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$cabeceras .= 'To: ' . $user . '<' . $to . '>' . "\r\n";
			$cabeceras .= 'From: TuApoyo <admin@thibot.com>' . "\r\n";

			//enviar correo al cliente
			mail($to, $subjet, $mensaje, $cabeceras);
			
			return true;
	}



	
}