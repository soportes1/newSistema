<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Loginusermodel extends CI_Model {
            // declare private variable
            private $_userID;
            private $_name;
            private $_userName;
            private $_usuario;
            private $_password;
            private $_rol;
            private $_status;
            
            public function setUserID($userID) {
                $this->_userID = $userID;
            } 
            public function setRol($rol) {
                $this->_rol = $rol;
            }  
            public function setusuario($usuario) {
                $this->_usuario = $usuario;
            }
            public function setPassword($password) {
                $this->_password = $password;
            }  
            //obtine informacion de un usuario
            public function getUserInfo() {
                $this->db->select(array('u.idAlumno', 'u.nombreAlumno', 'u.email','u.usuario'));
                $this->db->from('usuarios as u');
                $this->db->where('u.idAlumno', $this->_userID);
                $query = $this->db->get();
                return $query->row_array();
              } 

              //Buscar el usuario en la base de datos
              function login() {
                $this -> db -> select('*');
                $this -> db -> from('usuarios');
                $this -> db -> where('usuario', $this->_usuario);
                $this -> db -> where('password', $this->_password);
                $this -> db -> limit(1);
                $query = $this -> db -> get();
                if($query -> num_rows() == 1) {
                  return $query->result();
                } else {
                  return false;
                }
              }  
    }

?>