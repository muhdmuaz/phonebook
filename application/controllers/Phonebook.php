<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\CodeigniterAdapter;
class Phonebook extends MY_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');

		$this->return_as = 'array';
	}

	function index()
	{
		$this->load->view('bravo');
	}

	function phonebook_dtable()
	{
		$userid = (int)$this->uri->segment(3);
		$this->load->database();
		$this->load->library('Datatables');
		$this->load->model('contact_model');

		$datatables = new Datatables(new CodeigniterAdapter);
		$datatables->query('Select id,contact_name,contact_number from contacts');

		echo $datatables->generate();
	}

	function phonebook_json()
	{
		$userid = (int)$this->uri->segment(3);
		$this->load->library('datatables');
		$this->datatables->select('id,contact_name,contact_number, userid')->where('userid',$userid);
		$this->datatables->add_column('action', anchor('phonebook/edit/$1','Edit', array('class' => 'btn btn-primary btn-xs')). " ".
		anchor('phonebook/delete/$1', 'Delete', array('class' => 'btn btn-danger btn-xs')),'userid');
		$this->datatables->from('contacts');
		return print_r($this->datatables->generate('json',''));
	}

	function brado()
	{
		$this->load->database();
		$this->load->model('contact_model');
		$a['data'] = $this->contact_model->get_all();
		$this->load->view('tester',$a);
	}

}
