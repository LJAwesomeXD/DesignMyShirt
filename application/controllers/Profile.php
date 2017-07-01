<?php
session_start();

	class Profile extends CI_Controller{
            public function __construct(){
            	parent::__construct();
            	$this->load->database();
				$this->load->library('layouter');
				$this->load->model('pages_model');
				$this->load->model('users_model');
				$this->load->helpers('form');
            }

            public function profile 
            {

            	$this->layouter->render("user/profile");
            }

			
	}
