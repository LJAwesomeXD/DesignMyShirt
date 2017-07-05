<?php
    /**
     *  This is the admin controller which
     *  is used in site maintenance.
    **/
    class Admin extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin_model');
        }

        public function home()
        {

        }
    }
