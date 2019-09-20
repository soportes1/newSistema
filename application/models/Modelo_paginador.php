<?php
class Modelo_paginador extends CI_Model{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //fetch department details from database
    function listar_videos($limit, $start)
    {
        $sql = 'select * from cursos  limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>

