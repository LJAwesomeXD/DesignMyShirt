<?php
    class Users_model extends CI_Model
    {
        public $is_admin = false;

        public function __construct()
        {
            parent::__construct();

        }

        public function get_admin_state()
        {
            return $this->is_admin;
        }

        public function create_new_user($data)
        {
            $this->db->insert('user', $data);
        }

        public function auth($username, $password)
        {
            //checks if there is a match username, password in db
            $match = count($this->db->select('username')
                  ->where('username', $username)
                  ->where('password', $password)
                  ->get('user')->result_array());

            //if no match, return false (auth failed)
            if($match > 0)
            {
                //check if user is admin
                $admin_state =
                $this->db->select('is_admin')
                     ->where('username', $username)
                     ->get('user')
                     ->result_array()
                        ["is_admin"];


                $this->is_admin = $admin_state;
                return true;
            }
            else
            {

            }
            return false;
        }
    }
