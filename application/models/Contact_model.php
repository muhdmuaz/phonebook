<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Contact_model extends MY_Model
{
	public function __construct()
	{
		$this->table = 'contacts';
		$this->primary_key = 'id';

		$this->timestamps = TRUE;
		$this->soft_deletes = TRUE;

		$this->return_as = 'array';

		$this->cache_driver = 'file';

		$this->has_one['users'] = array(
			'local_key'=>'user_id',
			'foreign_key'=>'id',
			'foreign_model'=>'User_model');

		parent::__construct();
	}


}
