<?php 

class model_detalle_curso extends CI_Model {

	public function detalle($id)
    {
      $this->db->where('idCurso',$id );
        $query = $this->db->get('cursos');
        //print_r($this->db->last_query());
        return $query->result_array();
   }

}