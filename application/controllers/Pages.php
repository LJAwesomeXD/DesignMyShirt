<?php
	class Pages extends CI_Controller{
            public function __construct(){
            	parent::__construct();
            	$this->load->database();
				$this->load->library('layouter');
				$this->load->model('pages_model');
				$this->load->helpers('form');
            }

			public function home()
			{
				$this->layouter->render("pages/home");
			}

			public function createcontest()
			{
				print_r($_FILES);
				$data = $_GET;
				if($this->pages_model->create_contest($data))
				{
					//if successfully made contest
				}
				else;
					//else;_
			}

			public function signup_signin()
			{
				$this->layouter->render("pages/signup_signin");
			}
			public function contestview()
			{
				$this->layouter->render("pages/contestview");
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


			public function startcontest()
			{
				$this->layouter->render('pages/startcontest');
			}


			public function contest()
			{
				$data['contests'] = $this->pages_model->get_contests();
				//print_r($data['contests']->result_array);
				$this->layouter->render('pages/contest', $data);
			}
	}
