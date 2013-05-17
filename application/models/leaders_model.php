	<?php

class Leaders_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function add_leader($name, $points)
	{
		$fields = array(
			'name' => $name,
			'points' => $points
		);

		$this->db->insert('leaders', $fields);
	}

	function get_leaders()
	{
		$this->db->order_by('points', 'desc');

		$query = $this->db->get('leaders');

		return $query->result_array();
	}

}
