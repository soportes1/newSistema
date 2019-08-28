<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_SubirVideos');
		$this->load->model("model_Agregar");
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
		$this->load->library('encryption');
	}

	public function index()
	{
		$this->load->view('header/head');
		$this->load->view('login');
		$this->load->view('footer/foot');
	}

	public function registro(){
		$this->form_validation->set_rules('user', 'Usuario', 'required|alpha_numeric');
		$this->form_validation->set_rules('name', 'Nombre', 'required');	
		$this->form_validation->set_rules('pass', 'Contraseña', 'required|matches[pass]|min_length[8]');
		$this->form_validation->set_rules('rpass', 'Contraseña', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		/*
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('integer', 'El campo %s deve poseer solo numeros enteros');
		$this->form_validation->set_message('is_unique', 'El campo %s ya esta registrado');
		$this->form_validation->set_message('max_length', 'El Campo %s debe tener un Maximo de %d Caracteres');*/
		


		if ($this->form_validation->run() == FALSE)
		{
			/***Si el registro es incorrecto***/
			$this->load->view('header/head');
			$this->load->view('registro');
			$this->load->view('footer/foot');
		}
		else
		{
			/***Si el registro es correcto***/
			/*$pass=$this->input->post("pass");
			$pass=$this->encryption->encrypt($pass);*/

			$insert = $this->model_Agregar->agregar(
				$this->input->post("user"),
				$this->input->post("name"),
				$this->input->post("email"),
				$pass=password_hash($this->input->post("pass"),PASSWORD_DEFAULT)
			);
			if ($insert > 0) {
				$this->data["msj"] = "Usuario correcto";
				$b = 1;
				$this->load->view('header/head');
				$this->load->view('formsuccess');
				$this->load->view('footer/foot');
			} else {
				$this->data["msj"] = "Usuario incorrecto";
			}
			
			
		}
	}

	public function SubirVideo()
	{
		$archivo = 'archivo';
		$config['upload_path'] = "uploads/";
		$config['file_name'] = "nombre_archivo";
		$config['allowed_types'] = "mp4|avi";
		$config['max_size'] = "250000000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($archivo)) {
			$data['uploadError'] = $this->upload->display_errors();
			echo $this->upload->display_errors();
			return;
		}
		else
		{
			$data['uploadSuccess'] = $this->upload->data();
			echo 'archivo subido con exito';

		}
	}

	public function login()
	{
		$pass=$this->input->post("pass");
		$pass=$this->encryption->encrypt($pass);

		$select = $this->model_Agregar->consulta(
			$this->input->post("user"),
			$pass
		);
		if ($select != null) {
			echo "Usuario correcto";
			$this->data["msj"] = "Usuario correcto";
			$b = 1;
		} else {
			echo "Usuario incorrecto";
			$this->data["msj"] = "Usuario incorrecto";
		}
		
	}


}