<?php

class Users extends CI_Controller{


    function create(){

        //load models to store data
        $this->load->model('User_model');

        //end of load model 

        //validation of form inputs
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        //end of validation


        if($this->form_validation->run() == false){
            $this->load->view('create');
        }else{


            //create a array

            $fromarray = array();

            $fromarray['name'] = $this->input->post('name');
            $fromarray['email'] = $this->input->post('email');
            $fromarray['created_at'] = date('Y-m-d');

            $this->User_model->create_user($fromarray);

            //start e session after successfully added data

            $this->session->set_flashdata('success', 'Data Added Successfully');
            redirect(base_url().'index.php/Users/index');

        }
        
    }


    function index(){
        $this->load->view('user_list');
    }
}

?>