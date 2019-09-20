<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalle_curso extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_detalle_curso");
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = $this->session->flashdata('data');
		if ($data=="") {
			$data = array('nombre' =>null , );
		}

		//$curso = $this->session->flashdata('curso');

		$idCurso = $this->input->post('idCurso');
		$detalle=$this->model_detalle_curso->detalle(1);		

		$this->load->view('header/head');
		$this->load->view('navbar',$data);
		$this->load->view('view_detalle_curso',compact('detalle'));		
		$this->load->view('footer/foot');
	}

}