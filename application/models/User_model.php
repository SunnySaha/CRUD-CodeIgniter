<?php


class User_model extends CI_model{

    function create_user($fromArray){


        $this->db->insert('users', $fromArray);
    }


    function get_all_data(){
        $users = $this->db->get('users')->result_array();
        return $users;
    }
}

?>