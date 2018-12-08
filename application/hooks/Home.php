<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home {

    private $ci;
    private $db;

    public function __construct() {
        $this->ci = & get_instance();
        !$this->ci->load->library('session') ? $this->ci->load->library('session') : false;
        !$this->ci->load->helper('url') ? $this->ci->load->helper('url') : false;
        $this->db = $this->ci->load->database("default", true);
    }

    public function check_login() {
        $error = FALSE;
        $arrModules = array("login", "psicologo", "ieredirect");
        if (!in_array($this->ci->uri->segment(1), $arrModules)) {
            if ($this->ci->uri->segment(1) == "menu") {
                if(($this->ci->uri->segment(2) . '/' . $this->ci->uri->segment(3)) != 'menu/salir') {
                    if (isset($this->ci->session) && $this->ci->session->userdata('id') == FALSE) {
                        $error = TRUE;
                    }
                }
            } else if ($this->ci->uri->segment(1) == "psicologo") {
                $arrControllers = array($this->ci->uri->segment(1), "index", "registration_send", "registro", "userAuth", "validaSesion");
                if ($this->ci->uri->segment(2) != FALSE && !in_array($this->ci->uri->segment(2), $arrControllers)) {
                    if (isset($this->ci->session) && $this->ci->session->userdata('id') == FALSE) {
                        $error = TRUE;
                    }
                }
            } else {
                if ($this->ci->session->userdata('id') == FALSE) {
                    $error = TRUE;
                }
            }
            

        }
        
        if ($error) {
            if (isset($this->ci->session) && $this->ci->session->userdata('id') == FALSE) {
                $this->ci->session->unset_userdata("auth");
                $this->ci->session->sess_destroy();
            }
            redirect(site_url("/menu/menu/salir"));
        }
    }
}
//EOC