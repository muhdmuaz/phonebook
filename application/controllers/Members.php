<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Members extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->library('datatables');

	}

	function index()
	{
		$this->load->view('main');
	}
}
