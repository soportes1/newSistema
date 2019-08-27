<?php 

class Model_Agregar extends CI_Model {

	public function agregar($user,$pass)
    {
       $array = array("idUsuario"=>0,
          "tipoUsuario"=>$user,
          "contraseña"=>$pass
      );
       $this->db->insert("usuarios",$array);
       return $this->db->affected_rows();
   }
}