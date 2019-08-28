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
                $data=array('user_data'=>array(
                    'name'=>$row->nombreAlumno,
                    'id'=>$row->idAlumno,
                    'email'=>$row->email,
                    'pass'=>$row->password)
                );
                $this->session->set_userdata($data);
                return true;
            }
        }
        $this->session->unset_userdata('user_data');
        return false;
    }
}