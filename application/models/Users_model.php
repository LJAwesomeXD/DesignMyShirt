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
            $data["password"] = md5($data["password"]);
            $this->db->insert('user', $data);
        }

        public function auth($username, $password)
        {
                //checks if there is a match username, password in db
            $match = count($this->db->select('username')
                  ->where('username', $username)
                  ->where('password', md5($password))
                  ->get('user')->result_array());

            //if there is a match
            if($match > 0)
            {
                //check if user is admin
                $admin_state =
                $this->db->select('is_admin')
                     ->where('username', $username)
                     ->get('user')
                     ->result_array();

                print_r($admin_state);
                die();

                $this->is_admin = $admin_state;
                return true;
            }
            else
            {

            }
            return false;
        }
    }
