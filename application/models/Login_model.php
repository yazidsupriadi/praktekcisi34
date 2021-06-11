<?php

class Login_model extends CI_Model{

    //model login
    public function check_login($table,$where){

        //select * from $tabel where username = $where && password = $where;
        return $this->db->get_where($table,$where);
    }

}



?>