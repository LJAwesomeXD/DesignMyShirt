<?php
    class Admin extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin_control');
        }

        public function home()
        {
            
        }
    }
