<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente extends MX_Controller {
	
    public function __construct() {
        parent::__construct();
		$this->load->model("paciente_model");
    }

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{	
			$this->session->sess_destroy();
			$this->load->view('home');
	}
	
	/**
	 * Registro psicologos
	 */
	public function encontrar()
	{	
			$data['information'] = FALSE;
			$data["view"] = 'form_paciente';
			$this->load->view("layout", $data);
	}
	
	/**
	 * Guardar psicologo
     * @since 8/12/2018
	 */
	public function save_paciente()
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
					$data["idRecord"] = '';
					$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help, contact the Admin.');
				}
			
			}

			echo json_encode($data);
    }
	
	/**
	 * info psicologos
     * @since 29/3/2018
     * @author BMOTTAG
	 */
	public function info($idPsicologo)
	{	
		$this->load->model("general_model");
		
		$arrParam = array("idUser" => $idPsicologo);
		$data['information'] = $this->general_model->get_info_psicologo($arrParam);//info psicologo
		
		$data["view"] = 'info_psicologo';
		$this->load->view("layout", $data);
	}
	

	
}