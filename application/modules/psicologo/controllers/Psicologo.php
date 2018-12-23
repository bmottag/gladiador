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
			$idUser = $this->session->userdata("id");
			
			$data['ADMIN'] = true;
			
			$this->load->model("general_model");
			$arrParam = array(
				"table" => "user",
				"order" => "id_user",
				"column" => "id_user",
				"id" => $idUser
			);
			$data['information'] = $this->general_model->get_basic_search($arrParam);

			$data["view"] = "form_password";
			$this->load->view("layout", $data);
	}
	
	/**
	 * Update user´s password
	 */
	public function update_password()
	{
			$data['ADMIN'] = true;
			
			$newPassword = $this->input->post("inputPassword");
			$confirm = $this->input->post("inputConfirm");
			$passwd = str_replace(array("<",">","[","]","*","^","-","'","="),"",$newPassword); 
			
			$data['linkBack'] = false;
			$data['titulo'] = "<i class='fa fa-unlock fa-fw'></i>CAMBIAR CONTRASEÑA";
			
			if($newPassword == $confirm)
			{					
					$this->load->model("general_model");
					if ($this->general_model->updatePassword()) {
						$data["msj"] = "Se cambio la contraseña.";
						$data["msj"] .= "<br><br><strong>User: </strong>" . $this->input->post("hddUser");
						$data["msj"] .= "<br><strong>Password: </strong>" . $passwd;
						$data["clase"] = "alert-success";
					}else{
						$data["msj"] = "<strong>Error!!!</strong> Ask for help.";
						$data["clase"] = "alert-danger";
					}
			}else{
				//definir mensaje de error
				echo "pailas no son iguales";
			}
						
			$data["view"] = "template/answer";
			$this->load->view("layout", $data);
	}
	
	/**
	 * Registro psicologos
	 */
	public function registro()
	{	
			$data['information'] = FALSE;
			$data["view"] = 'form_psicologo';
			$this->load->view("layout", $data);
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

			$msj = "You have add a new User!!";
			if ($idUser != '') {
				$msj = "You have update the User!!";
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
						
			$data['linkBack'] = "login";
			$data['titulo'] = "<i class='fa fa-users fa-fw'></i>Registrate como psicólogo asociado de TuApoyo";
			$data['boton'] = "Ingresar <span class='glyphicon glyphicon glyphicon-chevron-right' aria-hidden='true'></span> ";
			
			$data["msj"] = "Se guardó su información.";
			$data["msj"] .= "<br><strong>Usuario: </strong>" . $data['information']['email'];
			$data["msj"] .= "<br><strong>Contraseña: </strong>123456";
			$data["clase"] = "alert-success";
						
			$data["view"] = "template/answer";
			$this->load->view("layout", $data);
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
	

	
}