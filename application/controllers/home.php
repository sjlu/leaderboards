<?php

class Home extends Main_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('leaders_model', 'leaders');
	}

	function index()
	{
		$this->load->view('include/header');
		$this->load->view('home', array(
			'leaders' => $this->leaders->get_leaders()
		));
		$this->load->view('include/footer');
	}

}