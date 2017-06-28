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
					//else;
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
