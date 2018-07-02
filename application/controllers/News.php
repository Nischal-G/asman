<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('CRUD');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
	}

	function _remap($method,$args)
	{
		if (method_exists($this, $method)) 
		{
			$this->$method($args);
		} else {
			$this->index($method,$args);
		}
		
	}	

	public function index($id)
	{
		$data['news']=$this->CRUD->getNewsbyId($id);
		$data['cat']=$this->CRUD->getNewsbyCatId();
		$this->load->view('view_news/news_dashboard',$data);		
	}
	
	public function all()
	{
		$data['news']=$this->CRUD->getNews();
		$data['cat']=$this->CRUD->getNewsbyCatId();
		$this->load->view('view_news/news_dashboard',$data);
	}

	public function project($args)
	{
		$data['news']=$this->CRUD->getNewsbyCat($args[0]);
		$data['cat']=$this->CRUD->getNewsbyCatId();
		$this->load->view('view_news/news_dashboard',$data);
	}


	public function catName($id)
	{
		$data['news']=$this->CRUD->getNewsbyCat($id);
		$data['cat']=$this->CRUD->getNewsbyCatId();
		$this->load->view('view_news/news_dashboard',$data);
	}




}
