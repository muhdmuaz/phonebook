<?php

class MY_Controller extends CI_Controller {

	var $data = array();

	function __construct(){
		parent::__construct();

		header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');

		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->load->library('session');

	}

}
