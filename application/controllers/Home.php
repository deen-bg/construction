<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Product_model');
	}

    public function index()
	{
		$this->load->view('head');
		$this->load->view('home');
	}
}
