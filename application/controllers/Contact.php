<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('CRUD');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
	}


	public function index()
	{
		$data['cat']=$this->CRUD->getNewsbyCatId();
		$this->load->view('view_contact/contact_dashboard',$data);		
	}

}
