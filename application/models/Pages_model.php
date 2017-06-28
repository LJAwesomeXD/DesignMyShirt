<?php
	class Pages_model extends CI_Model {
		public function __construct()
		{
			$this->load->database();
		}

		public function create_contest($contest)
		{
			$this->db->insert('contests', $contest);
		}

		public function get_contests()
		{
			$this->db->select('contest_id, title, prize');
			return $this->db->get('contests');
		}
	}
