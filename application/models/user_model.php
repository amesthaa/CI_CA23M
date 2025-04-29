<?php

class user_model extends CI_Model{
    public function insert_user($data){
        return $this->db->insert('users',$data);
    }
}

