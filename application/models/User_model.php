<?php


class User_model extends CI_model{

    function create_user($fromArray){


        $this->db->insert('users', $fromArray);
    }


    function get_all_data(){
        $users = $this->db->get('users')->result_array();
        return $users;
    }

    function update_list($userid){

        $this->db->where('id', $userid);
        $updated_user = $this->db->get('users')->row_array();
        return $updated_user;
    }

    function update_submit($userid, $fromArray){

        $this->db->where('id', $userid);
        $this->db->update('users', $fromArray);
    }


    function delete($userid){
        $this->db->where('id', $userid);
        $this->db->delete('users');
    }
}

?>