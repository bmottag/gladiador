<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Dashboard_model extends CI_Model {

				
		/**
		 * Update estado
		 * @since 24/12/2018
		 */
		public function saveEstado() 
		{
				$idUser = $this->input->post('hddIdUser');
				
				$data = array(
					'state' => $this->input->post('state')
				);
				
				//actualizar estado del usuario
				$this->db->where('id_user', $idUser);
				$query = $this->db->update('user', $data);

				if ($query) {
					return true;
				} else {
					return false;
				}
		}
		
		/**
		 * Update aprobado
		 * @since 24/12/2018
		 */
		public function saveAprobado() 
		{
				$idUser = $this->input->post('hddIdUser');
				
				$data = array(
					'aprobado' => $this->input->post('state')
				);
				
				//actualizar estado del usuario
				$this->db->where('id_user', $idUser);
				$query = $this->db->update('user', $data);

				if ($query) {
					return true;
				} else {
					return false;
				}
		}
		
	    
	}