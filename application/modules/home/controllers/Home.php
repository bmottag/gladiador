<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	
    public function __construct() {
        parent::__construct();
    }

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{	
			$this->session->sess_destroy();
			$this->load->view('home');
	}
	
	/**
	 * Pacientes
	 */
	public function encontrar_psicologo()
	{	
			$data['alto'] = "670px";
			$data['ruta'] = "paciente/registro";
			$this->load->view("layout_main", $data);
	}
	
	/**
	 * Zona psicologos
	 */
	public function zona_psicologos()
	{	
			$this->load->view('psicologos');
	}
	
	/**
	 * Zona psicologos
	 */
	public function psicologos()
	{	
			$data['alto'] = "2460px";
			$data['ruta'] = "psicologo/registro";
			$this->load->view('layout_main', $data);
	}
	
	/**
	 * Index Page for this controller.
	 */
	public function acerca()
	{	
			$this->load->view('acerca');
	}

	/**
	 * Pacientes
	 */
	public function contacto()
	{	
			$data['alto'] = "550px";
			$data['ruta'] = "home/form_contacto";
			$this->load->view("layout_main", $data);
	}

	
	/**
	 * Contacto
	 */
	public function form_contacto()
	{	
			$data['information'] = FALSE;
			$data["view"] = 'form_contacto';
			$this->load->view("layout_forms", $data);
	}
	
	/**
	 * Evio de correo del formulario de contacto
     * @since 5/1/2019
     * @author BMOTTAG
	 */
	public function correo_contacto()
	{										
			$subjet = "Contacto - TuApoyo";
			$user = "Administrador";
			$to = 'admin@tuapoyo.com.co';
			
			$nombre = $this->security->xss_clean($this->input->post("nombre"));
			$celular = $this->security->xss_clean($this->input->post("celular"));
			$mensaje = $this->security->xss_clean($this->input->post("mensaje"));
				
			//mensaje del correo
			$msj = "<p>Un usuario te contact&oacute; desde el portal Web de TuApoyo:</p>";
			$msj .= "-------------------------------------";
			$msj .= "<br><strong>Nombre: </strong>$nombre";
			$msj .= "<br><strong>N&uacute;mero de contacto: </strong> $celular";
			$msj .= "<br><strong>Mensaje: </strong> $mensaje";
			$msj .= "<br>-------------------------------------";
			
			$mensaje = "<html>
			<head>
			  <title> $subjet </title>
			</head>
			<body>
				<p>Se&ntilde;or(a)	$user:</p>
				<p>$msj</p>
				<p>Cordialmente,</p>
				<p><strong>Administrador TuApoyo</strong></p>
			</body>
			</html>";
						
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$cabeceras .= 'To: TuApoyo<admin@tuapoyo.com.co>' . "\r\n";
			$cabeceras .= 'From: TuApoyo <admin@tuapoyo.com.co>' . "\r\n";

			//enviar correo al cliente
			mail($to, $subjet, $mensaje, $cabeceras);
			
			
			$msj = "Se enviò correo al administrador con su mensaje.";
			
			$this->session->set_flashdata('retornoExito', $msj);
			
			
			$data["result"] = true;
			echo json_encode($data);
	}
	

	
}