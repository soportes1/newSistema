<?php 

class Model_Agregar extends CI_Model {

	public function agregar($user,$pass)
    {
       $array = array("idAlumno"=>0,
          "nombreAlumno"=>$user,
          "password"=>$pass
      );
       $this->db->insert("alumno",$array);
       return $this->db->affected_rows();
   }
}