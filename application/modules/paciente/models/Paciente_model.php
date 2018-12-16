<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Paciente_model extends CI_Model {

	    
		/**
		 * Verify if the user already exist by the email
		 * @author BMOTTAG
		 * @since  13/12/2018
		 */
		public function verifyPaciente($arrData) 
		{
				if (array_key_exists("idPaciente", $arrData)) {
					$this->db->where('id_paciente !=', $arrData["idPaciente"]);
				}			

				$this->db->where($arrData["column"], $arrData["value"]);
				$query = $this->db->get("paciente");

				if ($query->num_rows() >= 1) {
					return $query->row_array();
				} else{ return false; }
		}
				
		/**
		 * Add PACIENTE
		 * @since 13/12/2018
		 */
		public function savePaciente() 
		{
				$idPaciente = $this->input->post('hddId');
				
				$data = array(
					'email_paciente' => $this->input->post('email'),
					'fecha_registro' => date("Y-m-d G:i:s")
				);	

				//revisar si es para adicionar o editar
				if ($idPaciente == '') {
					$query = $this->db->insert('paciente', $data);
					$idPaciente = $this->db->insert_id();
				} else {
					$this->db->where('id_paciente', $idPaciente);
					$query = $this->db->update('paciente', $data);
				}
				if ($query) {
					return $idPaciente;
				} else {
					return false;
				}
		}
		
		/**
		 * Guardo informacion
		 * @since 16/12/2018
		 */
		public function saveFormI() 
		{		
			$idPaciente = $this->input->post('hddId');
		
			$data = array(
				'movil_paciente' => $this->input->post('celular'),
				'razon' => $this->input->post('razon'),
				'genero' => $this->input->post('genero'),
				'edad_paciente' => $this->input->post('edad')
			);
						
			$this->db->where('id_paciente', $idPaciente);
			$query = $this->db->update('paciente', $data);
			
			if ($query) {
				return true;
			} else {
				return false;
			}
		}
		
		
	    
	}