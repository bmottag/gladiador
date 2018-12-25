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
					
					/**
					 * INICIO Puntaje individual
					 * pregunta de valores
					 * 4 valores para pacientes verificar si existen en el psicologo
					 */
					$formulario = $this->input->post('formulario');
					
					if($formulario == 10){
						$this->puntaje_individual($idPaciente); //puntaje individual
					}
	 
					/**
					 * FIN Puntaje individual
					 */	 
					
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
	
	/**
	 * Calculo puntaje individual de paciente con cada psicologo
     * @since 25/12/2018
     * @author BMOTTAG
	 */
	public function puntaje_individual($idPaciente)
	{
			$this->load->model("general_model");
			
			//eliminaos algoritmos anteriores
			$arrParam = array(
				"table" => "algoritmo",
				"primaryKey" => "fk_id_paciente",
				"id" => $idPaciente
			);
			$this->general_model->deleteRecord($arrParam);
		
		
			$arrParam = array("idPaciente" => $idPaciente);
			$information = $this->general_model->get_info_paciente($arrParam);//info paciente
			
			$psicologos = $this->general_model->get_psicologo_activos();//lista psicologos ativos
			
			$puntaje_individual = 0;
			
			if($psicologos){
				foreach ($psicologos as $data):
				
					$idPsicologo = $data['id_user'];
					
					if($information['autosuficiencia'] && $data['valores_autosuficiencia'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['bondad'] && $data['valores_bondad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['certidumbre'] && $data['valores_certidumbre'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['coherencia'] && $data['valores_coherencia'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['compasivo'] && $data['valores_compasivo'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['confianza'] && $data['valores_confianza'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['coperacion'] && $data['valores_coperacion'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['coraje'] && $data['valores_coraje'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['curiosidad'] && $data['valores_curiosidad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['equidad'] && $data['valores_equidad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['generosidad'] && $data['valores_generosidad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['gratitud'] && $data['valores_gratitud'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['honestidad'] && $data['valores_honestidad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['humildad'] && $data['valores_humildad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['independencia'] && $data['valores_independencia'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['lealtad'] && $data['valores_lealtad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['libertad'] && $data['valores_libertad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['mente_abierta'] && $data['valores_mente_abierta'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['moderacion'] && $data['valores_moderacion'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['paciencia'] && $data['valores_paciencia'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['persistencia'] && $data['valores_persistencia'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['proactividad'] && $data['valores_proactividad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['proposito'] && $data['valores_proposito'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['respeto'] && $data['valores_respeto'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['responsabilidad'] && $data['valores_responsabilidad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['servicio'] && $data['valores_servicio'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['solidaridad'] && $data['valores_solidaridad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['sostenibilidad'] && $data['valores_sostenibilidad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['tolerancia'] && $data['valores_tolerancia'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}
					if($information['unidad'] && $data['valores_unidad'])
					{
						$puntaje_individual = $puntaje_individual + 25;
					}

					//guardo puntaje en la base de datos
					$this->paciente_model->savePuntajeIndividual($idPaciente, $idPsicologo, $puntaje_individual);
					
				endforeach;
			}
		
			return true;
	}

	
}