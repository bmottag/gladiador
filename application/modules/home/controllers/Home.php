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
	public function pacientes()
	{	
			$data['alto'] = "600px";
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
	 * Contacto
	 */
	public function contacto()
	{	
			$data["view_header"] = 'template/header_contacto';
			$data["view"] = 'contacto';
			$this->load->view("layout_secundario", $data);
	}
	

	
}