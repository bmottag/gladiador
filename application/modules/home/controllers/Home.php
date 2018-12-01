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
	 * Zona psicologos
	 */
	public function zona_psicologos()
	{	
			$this->load->view('zona_psicologos');
	}
	
	/**
	 * Contacto
	 */
	public function contacto()
	{	
			$data["view"] = 'contacto';
			$this->load->view("layout_secundario", $data);
	}

	
}