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
	 * info paciente
     * @since 29/3/2018
     * @author BMOTTAG
	 */
	public function info($idPaciente)
	{	
		$this->load->model("general_model");
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info paciente
		
		$data["view"] = 'info_paciente';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Registro paciente
	 */
	public function registro()
	{	
			$data['information'] = FALSE;
			$data["view"] = 'form_registro';
			$this->load->view("layout", $data);
	}
	
	/**
	 * Guardar psicologo
     * @since 8/12/2018
	 */
	public function save_paciente()
	{			
			header('Content-Type: application/json');
			
			$idPaciente = $this->input->post('hddId');
			$email = $this->input->post('email');
			
			$result_email = false;
			
			//verificar si ya existe el correo
			$arrParam = array(
				"idPaciente" => $idPaciente,
				"column" => "email_paciente",
				"value" => $email
			);
			$result_email = $this->paciente_model->verifyPaciente($arrParam);

			if ($result_email) 
			{
				$msj = "Usted ya se encuentra registrado. Puede continuar revisando su información";
				
				$data["result"] = true;
				$data["idRecord"] = $result_email['id_paciente'];
				$this->session->set_flashdata('retornoExito', $msj);
			} else {
			
				if ($idPaciente = $this->paciente_model->savePaciente()) 
				{
					$msj = "Se guardaron su correo, a continuación diligencie el siguiente formulario";
					
					$data["result"] = true;
					$data["idRecord"] = $idPaciente;
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
	 * Form uno
     * @since 13/12/2018
     * @author BMOTTAG
	 */
	public function form_1($idPaciente)
	{	
		$this->load->model("general_model");
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info paciente

		$data["view"] = 'form_paciente_I';
		$this->load->view("layout", $data);
	}

	/**
	 * Guardar form I
     * @since 8/12/2018
	 */
	public function save_form_I()
	{			
			header('Content-Type: application/json');
			
			$idPaciente = $this->input->post('hddId');
			
			if ($this->paciente_model->saveFormI()) 
			{
				$msj = "Se guardó su información, continue con el formulario";
				
				$data["result"] = true;
				$data["idRecord"] = $idPaciente;
				$this->session->set_flashdata('retornoExito', $msj);
			} else {
				$data["result"] = "error";
				$data["idRecord"] = '';
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help, contact the Admin.');
			}
			

			echo json_encode($data);
    }
	
	/**
	 * Form DOS
     * @since 16/12/2018
     * @author BMOTTAG
	 */
	public function form_2($idPaciente)
	{	
		$this->load->model("general_model");
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info paciente
		
		$data["view"] = 'form_paciente_II';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Form TRES
     * @since 16/12/2018
     * @author BMOTTAG
	 */
	public function form_3($idPaciente)
	{	
		$this->load->model("general_model");
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info paciente
		
		$data["view"] = 'form_paciente_III';
		$this->load->view("layout", $data);
	}
			
	/**
	 * Form CUATRO - SUSTACIAS
     * @since 16/12/2018
     * @author BMOTTAG
	 */
	public function form_4($idPaciente)
	{	
		$this->load->model("general_model");
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info paciente
		
		$data["view"] = 'form_paciente_IV';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Form 5 - SALUD
     * @since 16/12/2018
     * @author BMOTTAG
	 */
	public function form_5($idPaciente)
	{	
		$this->load->model("general_model");
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info paciente
		
		$data["view"] = 'form_paciente_V';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Form 6 - AUTOESTIMA
     * @since 16/12/2018
     * @author BMOTTAG
	 */
	public function form_6($idPaciente)
	{	
		$this->load->model("general_model");
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info paciente
		
		$data["view"] = 'form_paciente_VI';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Form 7 - PAREJA
     * @since 16/12/2018
     * @author BMOTTAG
	 */
	public function form_7($idPaciente)
	{	
		$this->load->model("general_model");
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info paciente
		
		$data["view"] = 'form_paciente_VII';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Form 8 - SUICIDIO
     * @since 16/12/2018
     * @author BMOTTAG
	 */
	public function form_8($idPaciente)
	{	
		$this->load->model("general_model");
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info paciente
		
		$data["view"] = 'form_paciente_VIII';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Form 9 - 
     * @since 16/12/2018
     * @author BMOTTAG
	 */
	public function form_9($idPaciente)
	{	
		$this->load->model("general_model");
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info paciente
		
		$data["view"] = 'form_paciente_IX';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Form 10 - 
     * @since 22/12/2018
     * @author BMOTTAG
	 */
	public function form_10($idPaciente)
	{	
		$this->load->model("general_model");
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info paciente
		
		$data["view"] = 'form_paciente_X';
		$this->load->view("layout", $data);
	}
	
}