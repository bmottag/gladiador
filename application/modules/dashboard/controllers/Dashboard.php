<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
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
		
		$data['noPsicologos'] = $this->general_model->countPsicologos();//cuenta de psicolgoos
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
		
		$arrParam = array();
		$data['information'] = $this->general_model->get_user_list($arrParam);//info solicitudes

		$data["view"] = 'listado_psicologos';
		$this->load->view("layout", $data);
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
	 * Evio de correo al usuario 
     * @since 5/6/2018
     * @author BMOTTAG
	 */
	public function email($idSolicitud, $estado)
	{
			$this->load->model("general_model");
			//busco informacion de la solicitud en la base de datos
			$arrParam = array("idSolicitud" => $idSolicitud);
			$information = $this->general_model->get_solicitudes($arrParam);//info solicitud
				
			$subjet = "Información reserva - ZONA 2";
			$user = $information[0]["first_name"] . ' ' . $information[0]["last_name"];
			$to = $information[0]["email"];
		
			//mensaje del correo
			$msj = "<p>Información de su reserva:</p>";
			$msj .= "<strong>Estado: </strong>";
			switch ($estado) {
				case 1:
					$msj .= 'Nueva';
					break;
				case 2:
					$msj .= 'Eliminada';
					break;
				case 3:
					$msj .= 'Modificada';
					break;
			}
			$msj .= "<br><strong>Usuario que reserva: </strong>" . $information[0]["first_name"] . ' ' . $information[0]["last_name"];
			$msj .= "<br><strong>Hora inicial: </strong>" . $information[0]["hora_inicial_24"];
			$msj .= "<br><strong>Hora final: </strong>" . $information[0]["hora_final_24"];
			$msj .= "<br><strong>Prueba: </strong>" . $information[0]["examen"] . " - ";
			
			if($information[0]['fk_id_prueba'] == 69){
				$msj .= $information[0]['cual_prueba'];
				$msj .= " <strong>Grupo items: </strong>" . $information[0]['cual'];
			}else{
				$msj .= " <strong>Grupo items: </strong>" . $information[0]['prueba'];
			}
			
			$msj .= "<br><strong>No. items: </strong>";

			if (99 == $information[0]["numero_items"])
			{ 
				$msj .= 'Sin definir'; 
			}else{
				$msj .= $information[0]['numero_items'];
			}
			
			$msj .= "<br><strong>Tipificación: </strong>" . $information[0]["tipificacion"];
			$msj .= "<br><strong>No. computadores reservados: </strong>" . $information[0]["numero_computadores"];
			$msj .= "<br><strong>Fecha reserva: </strong>" . $information[0]["fecha_apartado"];
			
			$mensaje = "<html>
			<head>
			  <title> $subjet </title>
			</head>
			<body>
				<p>Señor(a)	$user:</p>
				<p>$msj</p>
				<p>Cordialmente,</p>
				<p><strong>Administrador aplicativo de ZONA 2</strong></p>
			</body>
			</html>";
			
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$cabeceras .= 'To: ' . $user . '<' . $to . '>' . "\r\n";
			$cabeceras .= 'From: APP ZONA 2 <administrador@operativoicfes.com>' . "\r\n";
			$cabeceras .= 'Cc: jelozanoo@gmail.com \r\n';

			//enviar correo al cliente
			mail($to, $subjet, $mensaje, $cabeceras);
			
			return true;
	}
	
	
	
	
}