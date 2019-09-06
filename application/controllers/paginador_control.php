<?php
class paginador_control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('pagination');

        //load the department_model
        $this->load->model('modelo_paginador');
    }

    public function index()
    {
        $this->load->view('header/head');
        $this->load->view('footer/foot');
    }


    public function lis(){
               //pagination settings
        $config['base_url'] = site_url('paginador_control/lis');
        $config['total_rows'] = $this->db->count_all('cursos');
        $config['per_page'] = "2";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
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

        //call the model function to get the department data
        $data['list'] = $this->modelo_paginador->listar_videos($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

        //load the department_view

        
        $this->load->view('header/head');
        $this->load->view('footer/foot');
        $this->load->view('view_paginador',$data);
    }
}
?>