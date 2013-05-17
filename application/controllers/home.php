<?php

class Home extends Main_Controller {

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('home');
		$this->load->view('include/footer');
	}

}