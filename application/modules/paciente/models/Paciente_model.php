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
				$formulario = $this->input->post('formulario');
				
				//revisar si es para adicionar o editar
				if ($idPaciente == '') {

					$data = array(
						'email_paciente' => $this->input->post('email'),
						'fecha_registro' => date("Y-m-d G:i:s")
					);	
				
					$query = $this->db->insert('paciente', $data);
					$idPaciente = $this->db->insert_id();
				} else {
					
					switch ($formulario) {
						case 1:
							$data = array(
								'movil_paciente' => $this->input->post('celular'),
								'razon' => $this->input->post('razon'),
								'genero' => $this->input->post('genero'),
								'edad_paciente' => $this->input->post('edad')
							);
							break;
						case 2:
							$data = array(
								'ansiedad' => $this->input->post('ansiedad')
							);
							break;
						case 3:
							$data = array(
								'depresion' => $this->input->post('depresion')
							);
							break;
						case 4:
							$data = array(
								'sustancias' => $this->input->post('sustancias')
							);
							break;
					}
					

					

					
					
					$this->db->where('id_paciente', $idPaciente);
					$query = $this->db->update('paciente', $data);
				}
				if ($query) {
					return $idPaciente;
				} else {
					return false;
				}
		}
		
		
	    
	}