<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Clase para consultas generales a una tabla
 */
class General_model extends CI_Model {

		/**
		 * Consulta BASICA A UNA TABLA
		 * @param $TABLA: nombre de la tabla
		 * @param $ORDEN: orden por el que se quiere organizar los datos
		 * @param $COLUMNA: nombre de la columna en la tabla para realizar un filtro (NO ES OBLIGATORIO)
		 * @param $VALOR: valor de la columna para realizar un filtro (NO ES OBLIGATORIO)
		 * @since 8/11/2016
		 */
		public function get_basic_search($arrData) {
			if ($arrData["id"] != 'x')
				$this->db->where($arrData["column"], $arrData["id"]);
			$this->db->order_by($arrData["order"], "ASC");
			$query = $this->db->get($arrData["table"]);

			if ($query->num_rows() >= 1) {
				return $query->result_array();
			} else
				return false;
		}
		
		/**
		 * Update field in a table
		 * @since 25/5/2017
		 */
		public function updateRecord($arrDatos) {
				$data = array(
					$arrDatos ["column"] => $arrDatos ["value"]
				);
				$this->db->where($arrDatos ["primaryKey"], $arrDatos ["id"]);
				$query = $this->db->update($arrDatos ["table"], $data);
				if ($query) {
					return true;
				} else {
					return false;
				}
		}
		
		/**
		 * Delete Record
		 * @since 25/5/2017
		 */
		public function deleteRecord($arrDatos) 
		{
				$query = $this->db->delete($arrDatos ["table"], array($arrDatos ["primaryKey"] => $arrDatos ["id"]));
				if ($query) {
					return true;
				} else {
					return false;
				}
		}
		
		/**
		 * Active User list
		 * @since 25/3/2018
		 */
		public function get_user_list($arrData) 
		{
				$this->db->select('U.*, CONCAT(U.first_name, " " , U.last_name) name, R.*');
				if (array_key_exists("idUser", $arrData)) {
					$this->db->where('U.id_user', $arrData["idUser"]);
				}
				if (array_key_exists("idRol", $arrData)) {
					$this->db->where('U.fk_id_rol', $arrData["idRol"]);
				}
				if (array_key_exists("administradores", $arrData)) {
					$valores = array(1, 2);
					$this->db->where_in('U.fk_id_rol', $valores);
				}
				if (array_key_exists("state", $arrData)) {
					$this->db->where('U.state', $arrData["state"]);
				}
				$this->db->join('param_rol R', 'R.id_rol = U.fk_id_rol', 'INNER');
				$this->db->order_by("U.first_name, U.last_name", "ASC");
				$query = $this->db->get("user U");

				if ($query->num_rows() >= 1) {
					return $query->result_array();
				} else {
					return false;
				}
		}
		
		/**
		 * Info psicologo
		 * @since 9/12/2018
		 */
		public function get_info_psicologo($arrData) 
		{
				$this->db->select('U.*, S.*, CONCAT(U.first_name, " " , U.last_name) name, R.*');
				if (array_key_exists("idUser", $arrData)) {
					$this->db->where('U.id_user', $arrData["idUser"]);
				}
				$this->db->join('param_rol R', 'R.id_rol = U.fk_id_rol', 'INNER');
				$this->db->join('psicologo S', 'S.fk_id_user = U.id_user', 'INNER');
				$this->db->order_by("U.first_name, U.last_name", "ASC");
				$query = $this->db->get("user U");

				if ($query->num_rows() >= 1) {
					return $query->row_array();
				} else {
					return false;
				}
		}
		
		
		/**
		 * Consulta menu
		 * @since 10/04/2018
		 */
		public function get_menu() 
		{
				$rol = $this->session->userdata['rol'];
				
				$sql = "SELECT * 
						FROM param_menu_permisos P
						INNER JOIN param_menu M ON M.id_menu = P.fk_id_menu
						WHERE P.fk_id_rol = " . $rol . "
						ORDER BY M.orden DESC";
				$query = $this->db->query($sql);
				return $query->result_array();
		}
		
		/**
		 * Consulta lista de enlaces para un menu y un rol especifico
		 * @param idMenu
		 * @since 10/04/2018
		 */
		public function get_enlaces($idMenu) 
		{
				$sql = "SELECT * FROM param_menu_links L
						WHERE L.fk_id_menu = " . $idMenu . "
						ORDER BY L.orden";

				$query = $this->db->query($sql);
				if ($query->num_rows() >= 1) {
					return $query->result_array();
				} else {
					return false;
				}
		}
		
	
		

}