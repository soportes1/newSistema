<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Loginusermodel','user');
	}

	public function index(){
		if ($this->session->userdata('is_authenticated') == TRUE) {
			$this->user->setUserID($this->session->userdata('user_id'));
			$this->user->setRol($this->session->userdata('usuario'));
			
        }
		$this->load->view('header/head');
		$this->load->view('welcome_message');
		$this->load->view('footer/foot');
			
			
			
		
		
	
	}
		function doLogin() {
			  
			$sessArray = array();
			$usuario = $this->input->post('user');
			$password = $this->input->post('pass');
		
			$this->user->setUsuario($usuario);
			//$this->user->setPassword(MD5($password));
			$this->user->setPassword($password);	
			//query the database
			$result = $this->user->login();
			
			if($result) {
				foreach($result as $row) {
				$sessArray = array(
					'user_id' => $row->idUsuario,
					'name' => $row->nombre,
					'usuario' => $row->Usuario,
					'email' => $row->email,
					'is_authenticated' => TRUE
				);
				$this->session->set_userdata($sessArray);
				}
				//Redireccionar
				redirect('loginuserModel');
			} else {//No se encontró en la base de datos
				//redirect('welcome/login?msg=1');
				redirect('loginuserModel');
			} 
			
		}

	  // Logout
	  public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('is_authenticated');
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect('loginuserModel');
    }
	
}
