<?php 

class Model_Agregar extends CI_Model {

	public function agregar($user,$name,$email,$pass)
    {
       $array = array("idAlumno"=>0,
          "usuario"=>$user,
          "nombreAlumno"=>$name,
          "email"=>$email,
          "password"=>$pass
      );
       $this->db->insert("alumno",$array);
       return $this->db->affected_rows();
   }

   public function consulta($user,$pass){
        $this->db->where('nombreAlumno',$user );
        $this->db->where('password',$pass );
        $this->db->get('alumno');
        //print_r($this->db->last_query());    
    }

}