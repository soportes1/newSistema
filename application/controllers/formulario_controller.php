<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
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


    public function cerrar_sesion() {
      $usuario = array(
         'logueado' => FALSE
      );
      $this->session->set_userdata($usuario);
      redirect('formulario_controller');
   }
}