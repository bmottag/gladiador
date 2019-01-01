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
		
		$data['idPaciente'] = $idPaciente;
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['infoPsicologos'] = $this->general_model->get_psicologos_adecuados($arrParam);//psicologos adecuados para el pacientes
		
		$data["view"] = 'tus_psicologos';
		$this->load->view("layout_forms", $data);
	}
	
	/**
	 * info psicologos
     * @since 30/12/2018
     * @author BMOTTAG
	 */
	public function infoPsicologo($idPsicologo, $idPaciente)
	{	
		$this->load->model("general_model");

		$data['idPaciente'] = $idPaciente;
		$data['idPsicologo'] = $idPsicologo;
		
		$arrParam = array("idUser" => $idPsicologo);
		$data['information'] = $this->general_model->get_info_psicologo($arrParam);//info psicologo
		
		$data["view"] = 'info_psicologo';
		$this->load->view("layout_forms", $data);
	}
	
	/**
	 * Registro paciente
	 */
	public function registro()
	{	
			$data['information'] = FALSE;
			$data["view"] = 'form_registro';
			$this->load->view("layout_forms", $data);
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
						$this->calculo_algoritmo($idPaciente); //puntaje individual y puntaje tecnico
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
		$this->load->view("layout_forms", $data);
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
		$this->load->view("layout_forms", $data);
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
		$this->load->view("layout_forms", $data);
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
		$this->load->view("layout_forms", $data);
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
		$this->load->view("layout_forms", $data);
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
		$this->load->view("layout_forms", $data);
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
		$this->load->view("layout_forms", $data);
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
		$this->load->view("layout_forms", $data);
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
		$this->load->view("layout_forms", $data);
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
		$this->load->view("layout_forms", $data);
	}
	
	/**
	 * Calculo puntaje individual y puntaje tecnico de paciente con cada psicologo
     * @since 25/12/2018
     * @author BMOTTAG
	 */
	public function calculo_algoritmo($idPaciente)
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
			
			
			if($psicologos){
				foreach ($psicologos as $data):
				
					$idPsicologo = $data['id_user'];
					$consultasPsicologo = $data['consultas'];// 1 = 'Ambas'; 2 = 'Solo en persona'; 3 = 'Solo virtual (online)'
					$tarifaPsicologo = $data['tarifa'];// 1 = 'Menos de $90.000'; 2 = 'Menos de $130.000'; 3 = 'Menos de $200.000';
					
					$sesionesPaciente = $information['sesiones'];// 1 = 'Solo en persona'; 2 = 'Solo virtual (online)'; 3 = 'Ambas';
					$presupuestoPaciente = $information['presupuesto'];// 1 = 'Menos de $90.000'; 2 = 'Menos de $130.000'; 3 = 'Menos de $200.000';
					
					//validaciones iniciales
					$bandera = true;//cumple validaciones
					
					if($sesionesPaciente == 1 && $consultasPsicologo == 3){
							$bandera = false;//no cumple validaciones
					}
					if($sesionesPaciente == 2 && $consultasPsicologo == 2){
							$bandera = false;//no cumple validaciones
					}
					
					if($presupuestoPaciente == 1 && $tarifaPsicologo >= 2){
							$bandera = false;//no cumple validaciones
					}
					if($presupuestoPaciente == 2 && $tarifaPsicologo >= 3){
							$bandera = false;//no cumple validaciones
					}
					
					
					//INICIO PUNTAJE INDIVIDUAL
					$puntaje_individual = 0;

//si pasa validaciones iniciales entonces corra algoritmo
if($bandera)
{
			
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
					//FIN PUNTAJE INDIVIDUAL

					
					//inicio PUNTAJE TECNICO
					$puntaje_tecnico = 0;
					$numero_evaluados = 0;
					$ansiedad = 0;
					$depresion = 0;
					$sustancias = 0;
					$salud = 0;
					$autoestima = 0;
					$pareja = 0;
					$suicidio = 0;
					
					if($information['ansiedad'] > 2){						
						$ansiedad = $data['especialidad_ansiedad'] * $data['especialidad_ansiedad'] * 0.2 / $information['ansiedad'];
						
						if(($ansiedad) > 1){
							$ansiedad = 1;
						}
							
						$numero_evaluados = $numero_evaluados + 1;
					}
					
					if($information['depresion'] > 2){						
						$depresion = $data['especialidad_depresion'] * $data['especialidad_depresion'] * 0.2 / $information['depresion'];
						
						if(($depresion) > 1){
							$depresion = 1;
						}
							
						$numero_evaluados = $numero_evaluados + 1;
					}

					if($information['sustancias'] > 2){						
						$sustancias = $data['especialidad_sustancias'] * $data['especialidad_sustancias'] * 0.2 / $information['sustancias'];
						
						if(($sustancias) > 1){
							$sustancias = 1;
						}
							
						$numero_evaluados = $numero_evaluados + 1;
					}					
					
					if($information['salud'] > 2){						
						$salud = $data['especialidad_salud'] * $data['especialidad_salud'] * 0.2 / $information['salud'];
						
						if(($salud) > 1){
							$salud = 1;
						}
							
						$numero_evaluados = $numero_evaluados + 1;
					}
					
					if($information['autoestima'] > 2){						
						$autoestima = $data['especialidad_autoestima'] * $data['especialidad_autoestima'] * 0.2 / $information['autoestima'];
						
						if(($autoestima) > 1){
							$autoestima = 1;
						}
							
						$numero_evaluados = $numero_evaluados + 1;
					}

					if($information['pareja'] > 2){						
						$pareja = $data['especialidad_pareja'] * $data['especialidad_pareja'] * 0.2 / $information['pareja'];
						
						if(($pareja) > 1){
							$pareja = 1;
						}
							
						$numero_evaluados = $numero_evaluados + 1;
					}
					
					if($information['suicidio'] > 2){						
						$suicidio = $data['especialidad_suicidio'] * $data['especialidad_suicidio'] * 0.2 / $information['suicidio'];
						
						if(($suicidio) > 1){
							$suicidio = 1;
						}
							
						$numero_evaluados = $numero_evaluados + 1;
					}
					
					$subTotal = $ansiedad + $depresion + $sustancias + $salud + $autoestima + $pareja + $suicidio;
					$puntaje_tecnico = $subTotal/$numero_evaluados * 100;
					
					$total = ($puntaje_tecnico * 0.65) + ($puntaje_individual * 0.35);
					
					//guardo puntaje en la base de datos
					$this->paciente_model->savePuntajeIndividual($idPaciente, $idPsicologo, $puntaje_individual, $puntaje_tecnico, $total);
					
}
					
				endforeach;
			}
		
			return true;
	}
	
	/**
	 * mensaje para contactar psicolgoo
	 */
	public function contactar($idPsicologo, $idPaciente)
	{
			$this->load->model("general_model");
			
			//elimino registros anteriores
			$arrParam = array(
				"idPsicologo" => $idPsicologo,
				"idPaciente" => $idPaciente
			);
			$this->paciente_model->deleteRegistrosAnteriores($arrParam);
			
			//guardar informacion de contactar en la base de datos
			$this->paciente_model->saveContactar($idPaciente, $idPsicologo);
			
			$arrParam = array("idUser" => $idPsicologo);
			$information = $this->general_model->get_info_psicologo($arrParam);//info psicologo

			$data['linkBack'] = "paciente/infoPsicologo/" . $idPsicologo . "/" . $idPaciente;
			$data['titulo'] = "<i class='fa fa-users fa-fw'></i>Información de cotacto del Psicólogo";
			$data['boton'] = "<span class='glyphicon glyphicon glyphicon-chevron-left' aria-hidden='true'></span> Regresar";
			
			$data["msj"] = "<br><strong>Nombre: </strong>". $information['name'];
			$data["msj"] .= "<br><strong>No. celular: </strong>" . $information['movil'];
			$data["msj"] .= "<br><strong>Correo: </strong>" . $information['email'];
			$data["clase"] = "alert-success";
						
			$data["view"] = "template/answer";
			$this->load->view("layout_forms", $data);
	}

	
}