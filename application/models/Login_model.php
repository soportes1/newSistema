<?php
class Login_model extends CI_model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function login($user, $pass)
    {
        $query = $this->db->get_where('alumno', array('usuario' => $user));
        if($query->num_rows() == 1)
        {
            $row=$query->row();
            if(password_verify($pass, $row->password))
            {
                return $row;
            }
        }
    }
}