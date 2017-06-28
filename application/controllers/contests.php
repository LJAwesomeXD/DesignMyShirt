<?php
	class Contests extends CI_Controller{

		public function __construct()
		{
			$this->data_sub = array(
				"submission1" => "imagesrc1.jpg",
				"submission2" => "imagesrc2.jpg",
				"submission3" => "imagesrc3.jpg",
				"submission4" => "imagesrc4.jpg",
				"submission5" => "imagesrc5.jpg",
				"submission6" => "imagesrc6.jpg",
				"submission7" => "imagesrc7.jpg",
			);
		}

		public function index($data)
		{
			$data = json_decode($data);
		}



	}
