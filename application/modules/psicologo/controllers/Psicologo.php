<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psicologo extends MX_Controller {
	
    public function __construct() {
        parent::__construct();
		$this->load->model("psicologo_model");
    }

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{	

	}
		
	/**
	 * Registro psicologos
	 */
	public function registro()
	{	
			$data['information'] = FALSE;
			$data["ruta"] = "psicologo/ingreso/"; //para indicar donde debe regresar
			$data["titulo"] = "Registrate como psicólogo asociado de TuApoyo";
			
			
			$data["view"] = 'template/form_psicologo';
			$this->load->view("layout_forms", $data);
	}
	
	/**
	 * Guardar psicologo
     * @since 8/12/2018
	 */
	public function save_psicologo()
	{			
			header('Content-Type: application/json');
			
			$idUser = $this->input->post('hddId');
			$log_user = $this->input->post('usuario');
			$email = $this->input->post('email');
			$data["ruta"] = $this->input->post('ruta');

			$msj = "Se adicióno un Psicólogo nuevo.";
			if ($idUser != '') {
				$msj = "Se actualizó la información.";
			}	
			
			$result_email = false;
			
			//verificar si ya existe el correo
			$arrParam = array(
				"idUser" => $idUser,
				"column" => "email",
				"value" => $email
			);
			$result_email = $this->psicologo_model->verifyUser($arrParam);

			if ($result_email) {
				$data["result"] = "error";
				$data["mensaje"] = " Error. El email ya existe.";
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> El Email ya existe.');
			} else {
			
				if ($idUser = $this->psicologo_model->saveUsuario()) 
				{
					$this->psicologo_model->savePsicologo($idUser); //Guardo info psicologo

					//envio correo al adminstrador que se creo un nuevo psicologo
					$this->email($idUser); //envio correo
					
					$data["result"] = true;
					$data["idRecord"] = $idUser;
					$this->session->set_flashdata('retornoExito', $msj);
				} else {
					$data["result"] = "error";
					$data["mensaje"] = " Error. Los campos con * son obligatorios.";
					$data["idRecord"] = '';
					$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help, contact the Admin.');
				}
			
			}

			echo json_encode($data);
    }
	
	/**
	 * mensaje
	 */
	public function ingreso($idPsicologo)
	{
			$this->load->model("general_model");
			
			$arrParam = array("idUser" => $idPsicologo);
			$data['information'] = $this->general_model->get_info_psicologo($arrParam);//info psicologo
						
			$data['linkBack'] = "";
			$data['titulo'] = "<i class='fa fa-users fa-fw'></i>Registrate como psicólogo asociado de TuApoyo";
			$data['boton'] = "Inicio <span class='glyphicon glyphicon glyphicon-chevron-right' aria-hidden='true'></span> ";
			
			$data["msj"] = "Gracias por registrarte en 3 días te estaremos contactando para finalizar el proceso de aprobación.";
			$data["clase"] = "alert-success";
						
			$data["view"] = "template/answer";
			$this->load->view("layout_forms", $data);
	}
	
	/**
	 * info psicologos
     * @since 29/3/2018
     * @author BMOTTAG
	 */
	public function info()
	{	
		$this->load->model("general_model");
		$userId = $this->session->userdata("id");
		
		$data['ADMIN'] = true;
		
		$arrParam = array("idUser" => $userId);
		$data['information'] = $this->general_model->get_info_psicologo($arrParam);//info psicologo
		
		$data["view"] = 'info_psicologo';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Edicion de psicologo
	 */
	public function edicion($idPsicologo)
	{	
			$data['ADMIN'] = true;
			
			$this->load->model("general_model");
			
			$data["ruta"] = "psicologo/info/"; //para indicar donde debe regresar
			$data["titulo"] = "Editar datos Psicólogo";
			
			$arrParam = array("idUser" => $idPsicologo);
			$data['information'] = $this->general_model->get_info_psicologo($arrParam);//info psicologo
		
			$data["view"] = 'template/form_psicologo';
			$this->load->view("layout", $data);
	}
	
	
	/**
	 * Evio de correo al administrador que se creo un nuevo psicologo
     * @since 1/1/2019
     * @author BMOTTAG
	 */
	public function email($idUser)
	{
			$this->load->model("general_model");
				
			$subjet = "Nuevo asociado registrado - TuApoyo";
			$user = 'Administrador';
			$to = 'admin@tuapoyo.com.co';
		
			//mensaje del correo
			$msj = "<p>Un nuevo asociado se registr&oacute; en la aplicaci&oacute;n TuApoyo debe ingresar al sistema y aprobar el Psic&oacute;logo para que este pueda ingresar.</p>";
			
			$mensaje = "<html>
			<head>
			  <title> Nuevo asociado </title>
			</head>
			<body>
				<p>Se&ntilde;or(a)	ADMINISTRADOR:</p>
				<p>$msj</p>
				<p>Cordialmente,</p>
				<p><strong>Administrador aplicativo TuApoyo</strong></p>
			</body>
			</html>";
			
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$cabeceras .= 'To: ' . $user . '<' . $to . '>' . "\r\n";
			$cabeceras .= 'From: TuApoyo <admin@tuapoyo.com.co>' . "\r\n";

			//enviar correo al cliente
			mail($to, $subjet, $mensaje, $cabeceras);
			
			return true;
	}

	

	
}