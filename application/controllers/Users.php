<?php 
    class Users extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('users_model');
        }

        public function home()
        {

        }

        public function signup()
        {
            $data = $_POST;
            print_r($data);
            $this->users_model->create_new_user($data);
        }

        public function signin()
        {

        }
    }