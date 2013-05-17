<?php
require(APPPATH.'libraries/REST_Controller.php');

class Api extends REST_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('migration');
		if (!$this->migration->current())
		   show_error($this->migration->error_string());

		$this->load->model('leaders_model', 'leaders');
	}

	function index_get()
	{
		$leaders = $this->leaders->get_leaders();
		$this->response(array('status' => 'OK', 'data' => $leaders));
	}

	function index_post()
	{
		$name = $this->post('name');
		$points = $this->post('points');

		$this->leaders->add_leader($name, $points);

		$this->response(array('status' => 'OK'));
	}

}