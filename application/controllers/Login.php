<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("login_model");
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array();
		$data['error'] = $this->session->flashdata('error');
		$this->load->view('header/head');
		$this->load->view('login',$data);
		$this->load->view('footer/foot');
	}


	public function login()
	{
		if ($this->input->post()) {
			$user=$this->input->post('user');
			$pass=$this->input->post('pass');

			$usuario=$this->login_model->login($user,$pass);

			if ($usuario) {
				$data = array(
					'id' => $usuario->idAlumno,
					'user' => $usuario->usuario,
					'nombre' => $usuario->nombreAlumno,
					'email' => $usuario->email,
					'logueado' => TRUE
				);
				$this->session->set_userdata($data);
				redirect('login/logueado');
			}else{
				$this->session->set_flashdata('error', 'El usuario o la contraseña son incorrectos.');
				redirect('login');
			}
		}
	}

	public function logueado(){
		if ($this->session->userdata('logueado')) {
			$data = array();
			$data['nombre']=$this->session->userdata('nombre');
    		//$this->load->view('navbar',$data);
			$this->session->set_flashdata('data',$data);
			redirect('formulario_controller');
		}else{
			redirect('formulario_controller');
		}
	}

}