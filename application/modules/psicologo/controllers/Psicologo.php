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
			$data["ruta"] = $this->input->post('ruta');

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
	

	
}