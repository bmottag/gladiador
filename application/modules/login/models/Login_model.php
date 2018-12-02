<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login_model extends CI_Model {

	    function __construct(){        
	        parent::__construct();
     
	    }
	    
	    /**
	     * Valida los datos del formulario de ingreso (login y password) contra la base de datos del aplicativo
	     * @author BMOTTAG
	     * @since  8/11/2016
	     */
	    public function validateLogin($arrData)
		{
	    	$user = array();
	    	$user["valid"] = false;
			
	    	$login = str_replace(array("<",">","[","]","*","^","-","'","="),"",$arrData["login"]);   
	    	$passwd = str_replace(array("<",">","[","]","*","^","-","'","="),"",$arrData["passwd"]); 
			$passwd = md5($passwd);
			
	    	$sql = "SELECT * FROM user WHERE log_user = '$login' and password = '$passwd'";
	    	$query = $this->db->query($sql);

	    	if ($query->num_rows() > 0){	    		
	    		//$encrypt = $this->danecrypt->encode($passwd);
	    		foreach($query->result() as $row){
	    			//if (strcmp($row->PAS_USUARIO, $encrypt)===0){
	    				$user["valid"] = true;
	    				$user["id"] = $row->id_user;
	    				$user["firstname"] = $row->first_name;
	    				$user["lastname"] = $row->last_name;
						$user["logUser"] = $row->log_user;
	    				$user["movil"] = $row->movil;
						$user["state"] = $row->state;
						$user["rol"] = $row->fk_id_rol;
						$user["photo"] = $row->photo;
	    			//}	    			
	    		}
	    	}
			
	    	$this->db->close();	    	
	    	return $user;
	    }
		
	    /**
	     * Redirecciona el usuario al módulo correspondiente dependiendo de los datos almacenados en la session
	     * @author BMOTTAG
	     * @since  8/11/2016
		 * @review  18/12/2016
	     */
	    public function redireccionarUsuario()
		{
			$state = $this->session->userdata("state");
			$userRol = $this->session->userdata("rol");
			$userId = $this->session->userdata("id");
			$logUser = $this->session->userdata("logUser");

	    	switch($state){
	    		case 0: //NEW USER, must change the password
	    				redirect("/employee","location",301);
	    				break;
	    		case 1: //ACTIVE USER
						if($userRol!=1){//vista para FOREMAN Y USUARIO NORMAL
							redirect("payroll","location",301);
						}else{
							redirect("/dashboard","location",301);
						}
	    				break;
	    		case 2: //INACTIVE USER
	    				$this->session->sess_destroy();
	    				redirect("/login","location",301);
	    				break;
	    		case 99: //USUARIO QUE INGRESO CON CODIGO QR, LO REDIRECCIONO AL PAYROLL
						redirect("payroll","location",301);
	    				break;
	    		default: //No sé como llegaron hasta acá, pero los devuelvo al Login.
	    				$this->session->sess_destroy();
	    				redirect("/login","location",301);
	    				break;
	    	}
	    }
	    
	    /**
	     * Cargo los datos del usuario que viene con codigo QR
	     * @author BMOTTAG
	     * @since  8/4/2018
	     */
	    public function validateLoginQRCode($arrData)
		{
	    	$user = array();
	    	$user["valid"] = false;
			
			$this->db->select();
			$this->db->join('user U', 'U.id_user = Q.fk_id_user', 'INNER');
			$this->db->where('encryption', $arrData["encryption"]);
			$this->db->where('qr_code_state', 1);			
			$query = $this->db->get('param_qr_code Q');
			
	    	if ($query->num_rows() > 0){	    		
	    		foreach($query->result() as $row){
	    				$user["valid"] = true;
	    				$user["id"] = $row->id_user;
	    				$user["firstname"] = $row->first_name;
	    				$user["lastname"] = $row->last_name;
						$user["logUser"] = $row->log_user;
	    				$user["movil"] = $row->movil;
						$user["state"] = $row->state;
						$user["rol"] = $row->fk_id_rol;
						$user["photo"] = $row->photo;
	    		}
	    	}
			
	    	$this->db->close();	    	
	    	return $user;
	    }	

		
		
		
		
		
		
		
		
	    
	}