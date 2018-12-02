<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psicologo extends MX_Controller {
	
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
	 * Registro psicologos
	 */
	public function registro()
	{	
			$data["view"] = 'form_psicologo';
			$this->load->view("layout_forms", $data);
	}

	/**
	 * Registro psicologos
	 */
	public function registration_send()
	{	
			pr($_POST);
	}
	

	
}