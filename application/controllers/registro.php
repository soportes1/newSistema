<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registro extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_Agregar");
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('header/head');
		$this->load->view('view_registro');		
		$this->load->view('footer/foot');
	}

		public function registro(){
		$this->form_validation->set_rules('user', 'Usuario','required');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('is_unique', 'El campo %s ya esta registrado');
		$this->form_validation->set_message('max_length', 'El Campo %s debe tener un Maximo de %d Caracteres');

		if ($this->form_validation->run() == FALSE)
		{
			/***Si el registro es incorrecto***/
			$this->load->view('header/head');
			$this->load->view('view_registro');
			$this->load->view('footer/foot');
		}
		else
		{
			/***Si el registro es correcto***/
			$insert = $this->model_Agregar->agregar(
				$user=$this->input->post("user"),
				$this->input->post("name"),
				$this->input->post("email"),
				$pass=password_hash($this->input->post("pass"),PASSWORD_DEFAULT)
			);

			if ($insert > 0) {
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
				redirect('registro');
			}
			} else {
				echo "error";
			}
		}
	}
}