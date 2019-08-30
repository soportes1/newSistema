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
	}

	public function index()
	{
		$data = $this->session->flashdata('data');
		if ($data=="") {
			$data = array('nombre' =>null , );
		}
		$this->load->view('header/head');
		$this->load->view('navbar',$data);
		$this->load->view('viewCursosVideos');		
		$this->load->view('footer/foot');
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

	


    public function cerrar_sesion() {
      $usuario = array(
         'logueado' => FALSE
      );
      $this->session->set_userdata($usuario);
      redirect('formulario_controller');
   }
}