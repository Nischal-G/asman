<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
	}	

	public function index()
	{
		$this->load->view('view_home/home_dashboard');
		//$this->load->view('welcome_message');
	}

	public function member()
	{
		$this->load->view('view_member/member_dashboard');
	}

	public function news()
	{
		$this->load->view('view_news/news_dashboard');
	}
}
