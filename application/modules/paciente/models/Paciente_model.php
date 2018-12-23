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
								'ansiedad' => $this->input->post('optionsAnsiedad')
							);
							break;
						case 3:
							$data = array(
								'depresion' => $this->input->post('optionsDepresion')
							);
							break;
						case 4:
							$data = array(
								'sustancias' => $this->input->post('optionsSustancias')
							);
							break;
						case 5:
							$data = array(
								'salud' => $this->input->post('optionsSalud')
							);
							break;
						case 6:
							$data = array(
								'autoestima' => $this->input->post('optionsAutoestima')
							);
							break;
						case 7:
							$data = array(
								'pareja' => $this->input->post('optionsPareja')
							);
							break;
						case 8:
							$data = array(
								'suicidio' => $this->input->post('optionsSuicidio')
							);
							break;
						case 9:
							$data = array(
								'sesiones' => $this->input->post('sesiones'),
								'caracteristica_idioma' => $this->input->post('caracteristica_idioma'),
								'presupuesto' => $this->input->post('presupuesto')
							);
							break;
						case 10:
							$data = array(
								'autosuficiencia' => $this->input->post('autosuficiencia'),
								'bondad' => $this->input->post('bondad'),
								'certidumbre' => $this->input->post('certidumbre'),
								'coherencia' => $this->input->post('coherencia'),
								'compasivo' => $this->input->post('compasivo'),
								'confianza' => $this->input->post('confianza'),
								'coperacion' => $this->input->post('coperacion'),
								'coraje' => $this->input->post('coraje'),
								'curiosidad' => $this->input->post('curiosidad'),
								'equidad' => $this->input->post('equidad'),
								'generosidad' => $this->input->post('generosidad'),
								'gratitud' => $this->input->post('gratitud'),
								'honestidad' => $this->input->post('honestidad'),
								'humildad' => $this->input->post('humildad'),
								'independencia' => $this->input->post('independencia'),
								'lealtad' => $this->input->post('lealtad'),
								'libertad' => $this->input->post('libertad'),
								'mente_abierta' => $this->input->post('mente_abierta'),
								'moderacion' => $this->input->post('moderacion'),
								'paciencia' => $this->input->post('paciencia'),
								'persistencia' => $this->input->post('persistencia'),
								'proactividad' => $this->input->post('proactividad'),
								'proposito' => $this->input->post('proposito'),
								'respeto' => $this->input->post('respeto'),
								'responsabilidad' => $this->input->post('responsabilidad'),
								'servicio' => $this->input->post('servicio'),
								'solidaridad' => $this->input->post('solidaridad'),
								'sostenibilidad' => $this->input->post('sostenibilidad'),
								'tolerancia' => $this->input->post('tolerancia'),
								'unidad' => $this->input->post('unidad')
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