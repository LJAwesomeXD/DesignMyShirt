<?php
session_start();
    class Users extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('users_model');
            $this->load->library('layouter');
            $this->load->library('upload');
        }

        public function home()
        {

        }

       /* public function profile()
        {

            $this->layouter->render("user/profile");
        } */

        public function signup()
        {
            $data = $_POST;
            print_r($data);
            $this->users_model->create_new_user($data);

            
        }

        public function signin()
        {
            //check if not logged in
            if(!isset($_SESSION["username"]))
            {
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    //check credentials
                    if($this->users_model->auth($username, $password))
                    {
                        //successful
                        $_SESSION["username"] = $username;
                        $_SESSION["is_admin"] = $this->users_model->get_admin_state();
                        echo "successful";
                    }
                    else
                    {
                        //fail
                        echo "fail";
                    }
            }
        }

        public function logout()
        {
            unset($_SESSION["username"]);
            header("Location: ../pages/home");
        }

        public function profile()
        {
            $this->layouter->render("users/profile");
        }
    }
