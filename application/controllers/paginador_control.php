<?php
class paginador_control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('pagination');

        //craga de modelo
        $this->load->model('modelo_paginador');
    }

    public function index()
    {
        $config['base_url'] = base_url('paginador_control/index/');
        $config['total_rows'] = $this->db->count_all('cursos');
        $config['per_page'] = "2";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //configuracion de boostrap
        $config['full_tag_open'] = '<ul style="color:#fff" class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //llamada de la funcion listar videos del modelo
        $data['list'] = $this->modelo_paginador->listar_videos($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

        //carga de vista

        
        $this->load->view('header/head');
        $this->load->view('view_paginador',$data);
        
        $this->load->view('footer/foot');

    }


    public function lis(){
        $config['base_url'] = site_url('paginador_control/lis');
        $config['total_rows'] = $this->db->count_all('cursos');
        $config['per_page'] = "2";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['full_tag_open'] = '<ul class="pagination text-center" >';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['list'] = $this->modelo_paginador->listar_videos($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

    

        
        $this->load->view('header/head');
        $this->load->view('footer/foot');
        $this->load->view('view_paginador',$data);
    }
}
?>