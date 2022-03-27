<?php

class Admin_Controller extends MY_Controller {
	function __construct(){
		parent::__construct();

		if (!$this->tank_auth->is_logged_in()) {
			redirect('auth/login');
		}

		$this->data['user_id']	= $this->tank_auth->get_user_id();
		$this->data['username']	= $this->tank_auth->get_username();
		$this->data['pagejs']	= array();
		$this->data['pluginjs']	= array();

	}

}

