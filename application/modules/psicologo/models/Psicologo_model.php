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
					'fk_id_rol' => 3,
					'state' => 1,
					'edad' => $this->input->post('edad'),
					'direccion' => $this->input->post('direccion'),
					'pagina_web' => $this->input->post('pagina_web')
				);	

				//revisar si es para adicionar o editar
				if ($idUser == '') {
					$data['password'] = 'e10adc3949ba59abbe56e057f20f883e';//123456
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
		 * Add HISTORICO
		 * @since 31/5/2018
		 */
		public function savePsicologo($idUser) 
		{		
			$data = array(
				'fk_id_user' => $idUser,
				'fecha' => date("Y-m-d G:i:s"),
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
				'salud' => $this->input->post('salud'),
				'consultas' => $this->input->post('consultas'),
				'idioma' => $this->input->post('idioma'),
				'horario' => $this->input->post('horario')
			);
						
			$query = $this->db->insert('psicologo', $data);
			
			if ($query) {
				return true;
			} else {
				return false;
			}
		}
		
		
	    
	}