<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Psicologo_model extends CI_Model {

	    
		/**
		 * Verify if the user already exist by the email
		 * @author BMOTTAG
		 * @since  8/12/2018
		 */
		public function verifyUser($arrData) 
		{
				if (array_key_exists("idUser", $arrData)) {
					$this->db->where('id_user !=', $arrData["idUser"]);
				}			

				$this->db->where($arrData["column"], $arrData["value"]);
				$query = $this->db->get("user");

				if ($query->num_rows() >= 1) {
					return true;
				} else{ return false; }
		}
				
		/**
		 * Add/Edit USUARIO
		 * @since 29/3/2018
		 */
		public function saveUsuario() 
		{
				$idUser = $this->input->post('hddId');
				
				$data = array(
					'first_name' => $this->input->post('nombres'),
					'last_name' => $this->input->post('apellidos'),
					'log_user' => $this->input->post('email'),
					'email' => $this->input->post('email'),
					'movil' => $this->input->post('celular'),
					'edad' => $this->input->post('edad'),
					'direccion' => $this->input->post('direccion'),
					'pagina_web' => $this->input->post('pagina_web')
				);	

				//revisar si es para adicionar o editar
				if ($idUser == '') {
					$data['password'] = 'e10adc3949ba59abbe56e057f20f883e';//123456
					$data['fk_id_rol'] = 3;//rol de psicologo
					$data['state'] = 0;//estado como usuario nuevo
					$query = $this->db->insert('user', $data);
					$idUser = $this->db->insert_id();
				} else {
					$this->db->where('id_user', $idUser);
					$query = $this->db->update('user', $data);
				}
				if ($query) {
					return $idUser;
				} else {
					return false;
				}
		}
		
		/**
		 * Se guarda el resto de informacion del formulario
		 * @since 22/12/2018
		 */
		public function savePsicologo($idUser) 
		{		
			$idPsicologo = $this->input->post('hddIdPsicologo');
		
			$data = array(
				'ayudarte' => $this->input->post('ayudarte'),
				'formacion' => $this->input->post('formacion'),
				'experiencia' => $this->input->post('experiencia'),
				'tarifa' => $this->input->post('tarifa'),
				'enfoque_cognitivo' => $this->input->post('cognitivo'),
				'enfoque_psicoanalisis' => $this->input->post('psicoanalisis'),
				'enfoque_sistemico' => $this->input->post('sistemico'),
				'enfoque_transpersonal' => $this->input->post('transpersonal'),
				'enfoque_humanista' => $this->input->post('humanista'),
				'especialidad_ansiedad' => $this->input->post('optionsAnsiedad'),
				'especialidad_depresion' => $this->input->post('optionsDepresion'),
				'especialidad_sustancias' => $this->input->post('optionsSustancias'),
				'especialidad_salud' => $this->input->post('optionsSalud'),
				'especialidad_autoestima' => $this->input->post('optionsAutoestima'),
				'especialidad_pareja' => $this->input->post('optionsPareja'),
				'especialidad_suicidio' => $this->input->post('optionsSuicidio'),
				'consultas' => $this->input->post('consultas'),
				'idioma' => $this->input->post('idioma'),
				'valores_autosuficiencia' => $this->input->post('autosuficiencia'),
				'valores_bondad' => $this->input->post('bondad'),
				'valores_certidumbre' => $this->input->post('certidumbre'),
				'valores_coherencia' => $this->input->post('coherencia'),
				'valores_compasivo' => $this->input->post('compasivo'),
				'valores_confianza' => $this->input->post('confianza'),
				'valores_coperacion' => $this->input->post('coperacion'),
				'valores_coraje' => $this->input->post('coraje'),
				'valores_curiosidad' => $this->input->post('curiosidad'),
				'valores_equidad' => $this->input->post('equidad'),
				'valores_generosidad' => $this->input->post('generosidad'),
				'valores_gratitud' => $this->input->post('gratitud'),
				'valores_honestidad' => $this->input->post('honestidad'),
				'valores_humildad' => $this->input->post('humildad'),
				'valores_independencia' => $this->input->post('independencia'),
				'valores_lealtad' => $this->input->post('lealtad'),
				'valores_libertad' => $this->input->post('libertad'),
				'valores_mente_abierta' => $this->input->post('mente_abierta'),
				'valores_moderacion' => $this->input->post('moderacion'),
				'valores_paciencia' => $this->input->post('paciencia'),
				'valores_persistencia' => $this->input->post('persistencia'),
				'valores_proactividad' => $this->input->post('proactividad'),
				'valores_proposito' => $this->input->post('proposito'),
				'valores_respeto' => $this->input->post('respeto'),
				'valores_responsabilidad' => $this->input->post('responsabilidad'),
				'valores_servicio' => $this->input->post('servicio'),
				'valores_solidaridad' => $this->input->post('solidaridad'),
				'valores_sostenibilidad' => $this->input->post('sostenibilidad'),
				'valores_tolerancia' => $this->input->post('tolerancia'),
				'valores_unidad' => $this->input->post('unidad'),
				'horario' => $this->input->post('horario')
			);


			//revisar si es para adicionar o editar
			if ($idPsicologo == '') {
				$data['fk_id_user'] = $idUser;
				$data['fecha'] = date("Y-m-d G:i:s");
				$query = $this->db->insert('psicologo', $data);
			} else {
				$this->db->where('id_psicologo', $idPsicologo);
				$query = $this->db->update('psicologo', $data);
			}			
			
			if ($query) {
				return true;
			} else {
				return false;
			}
		}
		
		
	    
	}