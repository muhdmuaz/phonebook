<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Contact_model extends MY_Model
{
	public function __construct()
	{
		$this->table = 'users';
		$this->primary_key = 'id';

		$this->timestamps = FALSE;
		$this->soft_deletes = FALSE;

		$this->return_as = 'array';

		$this->cache_driver = 'file';


		$this->has_many['contacts'] = array(
			'foreign_model'=>'contact_model',
			'foreign_table'=>'contacts',
			'foreign_key'=>'user_id',
			'local_key'=>'id'
		);


	}

}
