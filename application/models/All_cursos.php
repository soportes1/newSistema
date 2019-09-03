<?php
class All_cursos extends CI_model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function Cursos()
    {
       // $query = $this->db->query("SELECT * FROM cursos");
         $query = $this->db->get('cursos');
        return $query->row_array();
    }
}