<?php
session_start();

	class Pages extends CI_Controller{
            public function __construct(){
            	parent::__construct();
            	$this->load->database();
				$this->load->library('layouter');
				$this->load->model('pages_model');
				$this->load->model('users_model');
				$this->load->helpers('form');
            }

			public function home()
			{
				$this->layouter->render("pages/home");
			}

			public function auth()
			{
				$this->layouter->render("pages/auth");
			}

			public function shirtdesigner()
			{
				$this->layouter->render("pages/shirtdesigner");
			}

			public function marketplace()
			{
				$this->layouter->render("pages/marketplace");
			}

			public function uploadfile()
			{

			}


	}
