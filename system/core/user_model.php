<?php

class User_model extends CI_model{
    public function insert_user($data){
        return $this->db->insert('users',$data);
    }
}