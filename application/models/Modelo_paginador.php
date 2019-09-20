<?php
class Modelo_paginador extends CI_Model{
    function __construct()
    {
       
        parent::__construct();
    }

    function listar_videos($limit, $start)
    {
        $sql = 'select * from cursos  limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }


   function contar_videos(){
            return $this->db->count_all("cursos");

    }


}
?>

