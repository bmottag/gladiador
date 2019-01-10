<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
		$this->load->model("dashboard_model");
    }
		
	/**
	 * Index
     * @since 8/12/2018
     * @author BMOTTAG
	 */
	public function index()
	{			
		$this->load->model("general_model");
		$data['ADMIN'] = true;
		
		$arrParam = array();
		$data['noPsicologos'] = $this->general_model->countPsicologos($arrParam);//cuenta de psicolgoos
		$data['noPacientes'] = $this->general_model->countPacientes();//cuenta de psicolgoos

		$data["view"] = 'dashboard';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Listado de psicologos
     * @since 8/12/2018
     * @author BMOTTAG
	 */
	public function listado_psicologos()
	{			
		$this->load->model("general_model");
		$data['ADMIN'] = true;
		
		$arrParam = array("idRol" => 3, "aprobado" => 1);//lista de psicologos aprobados
		$data['information'] = $this->general_model->get_psicologo_listado($arrParam);//info usuario

		$data["view"] = 'listado_psicologos';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Listado de psicologos nuevos
     * @since 8/12/2018
     * @author BMOTTAG
	 */
	public function psicologos_nuevos()
	{			
		$this->load->model("general_model");
		$data['ADMIN'] = true;
		
		$arrParam = array("idRol" => 3, "aprobado" => 2);//lista de psicologos nuevos
		$data['information'] = $this->general_model->get_psicologo_listado($arrParam);//info usuario

		$data["view"] = 'listado_psicologos_nuevos';
		$this->load->view("layout", $data);
	}

	/**
	 * Listado de psicologos nuevos
     * @since 8/12/2018
     * @author BMOTTAG
	 */
	public function psicologos_desaprobados()
	{			
		$this->load->model("general_model");
		$data['ADMIN'] = true;
		
		$arrParam = array("idRol" => 3, "aprobado" => 3);//lista de psicologos desaprobados
		$data['information'] = $this->general_model->get_user_list($arrParam);//info usuario

		$data["view"] = 'listado_psicologos_desaprobados';
		$this->load->view("layout", $data);
	}

	
    /**
     * Cargo modal - formulario estado psicologos
     * @since 24/12/2018
     */
    public function cargarModalEstado() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos
			
			$data['information'] = FALSE;
			$idUser = $this->input->post("idUser");	
			
			$this->load->model("general_model");
			$arrParam = array("idUser" => $idUser);
			$data['information'] = $this->general_model->get_info_psicologo($arrParam);//info usuario
			
			$this->load->view("estado_modal", $data);
    }
	
	/**
	 * Update estado
     * @since 24/12/2018
     * @author BMOTTAG
	 */
	public function save_estado()
	{			
			header('Content-Type: application/json');
			$data = array();
			
			$idUser = $this->input->post('hddIdUser');
			
			$msj = "You have add a new skill!!";
			if ($idUser != '') {
				$msj = "Se actualizó el estado del Psicólogo.";
			}

			if ($this->dashboard_model->saveEstado()) {
				$data["result"] = true;
				$this->session->set_flashdata('retornoExito', $msj);
			} else {
				$data["result"] = "error";
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');
			}

			echo json_encode($data);	
    }
	
    /**
     * Cargo modal - formulario aprobar psicologos
     * @since 24/12/2018
     */
    public function cargarModalAprobar() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos
			
			$data['information'] = FALSE;
			$idUser = $this->input->post("idUser");	
			
			$this->load->model("general_model");
			$arrParam = array("idUser" => $idUser);
			$data['information'] = $this->general_model->get_info_psicologo($arrParam);//info usuario
			
			$this->load->view("aprobar_modal", $data);
    }
	
	/**
	 * Update aprobado
     * @since 29/12/2018
     * @author BMOTTAG
	 */
	public function save_aprobar()
	{			
			header('Content-Type: application/json');
			$data = array();
			
			$idUser = $this->input->post('hddIdUser');
			
			$msj = "You have add a new skill!!";
			if ($idUser != '') {
				$msj = "Se actualizó el Psicólogo y se envió correo con la información para ingresar al sistema.";
			}

			if ($this->dashboard_model->saveAprobado()) 
			{
				//se se APRUEBA entonces se envia correo al psicologo con los datos de ingreso
				$estado = $this->input->post('state');
				if($estado == 1){
					$this->email($idUser); //envio correo
				}
				
				$data["result"] = true;
				$this->session->set_flashdata('retornoExito', $msj);
			} else {
				$data["result"] = "error";
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');
			}

			echo json_encode($data);	
    }
	
	/**
	 * Informacion psicologo
     * @since 8/12/2018
     * @author BMOTTAG
	 */
	public function ver_psicologo($idPsicologo)
	{			
		$this->load->model("general_model");
		$data['ADMIN'] = true;
		
		$arrParam = array("idUser" => $idPsicologo);
		$data['information'] = $this->general_model->get_info_psicologo($arrParam);//info psicologo
		
		$data["view"] = 'info_psicologo';
		$this->load->view("layout", $data);
	}

	/**
	 * Listado de psicologos
     * @since 16/12/2018
     * @author BMOTTAG
	 */
	public function listado_pacientes()
	{			
		$this->load->model("general_model");
		$data['ADMIN'] = true;
		
		$data['information'] = $this->general_model->get_listado_paciente();//listado pacientes

		$data["view"] = 'listado_pacientes';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Informacion psicologo
     * @since 16/12/2018
     * @author BMOTTAG
	 */
	public function ver_paciente($idPaciente)
	{			
		$this->load->model("general_model");
		$data['ADMIN'] = true;
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info psicologo
		
		$data["view"] = 'info_paciente';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Match de paciente con psicologos
     * @since 25/12/2018
     * @author BMOTTAG
	 */
	public function match($idPaciente)
	{			
		$this->load->model("general_model");
		$data['ADMIN'] = true;

		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info psicologo
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['infoAlgoritmo'] = $this->general_model->get_algoritmo($arrParam);//info psicologo
		
		$data["view"] = 'match';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Psicolgos cotactados
     * @since 1/1/2019
     * @author BMOTTAG
	 */
	public function contactados($idPaciente)
	{			
		$this->load->model("general_model");
		$data['ADMIN'] = true;

		$arrParam = array("idPaciente" => $idPaciente);
		$data['information'] = $this->general_model->get_info_paciente($arrParam);//info paciente
		
		$arrParam = array("idPaciente" => $idPaciente);
		$data['infoContactados'] = $this->general_model->get_contactados($arrParam);//lista de contactados
		
		$data["view"] = 'contactados';
		$this->load->view("layout", $data);
	}
	
	/**
	 * Lista de pacientes que contactaron al Psicolgos
     * @since 1/1/2019
     * @author BMOTTAG
	 */
	public function contactados_pacientes($idPsicologo)
	{			
		$this->load->model("general_model");
		$data['ADMIN'] = true;
		
		$arrParam = array("idUser" => $idPsicologo);
		$data['information'] = $this->general_model->get_info_psicologo($arrParam);//info psicologo
		
		
		$arrParam = array("idPsicologo" => $idPsicologo);
		$data['infoContactados'] = $this->general_model->get_contactados_pacientes($arrParam);//lista de contactados
				
		$data["view"] = 'contactados_pacientes';
		$this->load->view("layout", $data);
	}
	
	/**
     * @since /1/2019
	 * Evio de correo al psicologo con la contraseña
	 */
	public function email($idUsuario)
	{
			$this->load->model("general_model");
			
			$arrParam = array("idUser" => $idUsuario);
			$infoUsuario = $this->general_model->get_info_psicologo($arrParam);//info psicologo
			
			$subjet = "Ingreso al sistema - TuApoyo";
			$user = $infoUsuario["name"];
			$to = $infoUsuario["email"];
		
			//mensaje del correo
			$msj = "<p>Los datos para ingresar a TuApoyo son los siguientes:</p>";
			$msj .= "<br><strong>Usuario: </strong>" . $to;
			$msj .= "<br><strong>Contraseña: </strong> 123456";
			$msj .= "<br><br><strong><a href='http://tuapoyo.com.co/login'>Enlace Aplicación </a></strong><br>";
				
			$mensaje = "<html>
						<head>
						  <title> $subjet </title>
						</head>
						<body>
							<p>Señor(a): $user</p>
							<p>$msj</p>
							<p>Cordialmente,</p>
							<p><strong>Administrador aplicativo TuApoyo</strong></p>
						</body>
						</html>";
						
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$cabeceras .= 'To: ' . $user . '<' . $to . '>' . "\r\n";
			$cabeceras .= 'From: TuApoyo <admin@tuapoyo.com.co>' . "\r\n";

			//enviar correo
			mail($to, $subjet, $mensaje, $cabeceras);
	}

	
	
	
	
}