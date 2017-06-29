<?php 
    class Users_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();

        }

        public function create_new_user($data)
        {
            $this->db->insert('user', $data);
        }

        public function signin()
        {

        }
    }