<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registro extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_SubirVideos');
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
				$this->input->post("user"),
				$this->input->post("name"),
				$this->input->post("email"),
				$pass=password_hash($this->input->post("pass"),PASSWORD_DEFAULT)
			);

			if ($insert > 0) {
				$this->load->view('header/head');
				$this->load->view('formsuccess',);
				$this->load->view('footer/foot');
			} else {
				echo "error";
			}
			
			
		}
	}
}