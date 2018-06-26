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
		//if($this->input->post('memberSubmit'))
		if(isset($_POST['memberSubmit']))
		{
			$ms="Please provide your ";
			$this->form_validation->set_message('name', $ms.'Full Name');
			$this->form_validation->set_message('address', $ms.'adress');
			$this->form_validation->set_message('email', $ms.'email');
			$this->form_validation->set_message('dob', $ms.'birth date');
			$this->form_validation->set_message('sex', $ms.'gender');
			$this->form_validation->set_message('batch', $ms."batch on St. Mary's");
			$this->form_validation->set_message('contact', $ms."contact detail");
			$this->form_validation->set_message('choice', $ms."maritial status");

			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
			$this->form_validation->set_rules('sex', 'Gender', 'required');
			$this->form_validation->set_rules('batch', 'Batch', 'required');
			$this->form_validation->set_rules('contact', 'Contact', 'required');
			$this->form_validation->set_rules('choice', 'Maritil Status', 'required');
			
			$this->form_validation->run();

			$addMem['name']=$this->input->post('name');
			$addMem['address']=$this->input->post('address');
			$addMem['email']=$this->input->post('email');
			$addMem['dob']=$this->input->post('dob');
			$addMem['sex']=$this->input->post('sex');
			$addMem['batch']=$this->input->post('batch');
			$addMem['contact']=$this->input->post('contact');
			$addMem['choice']=$this->input->post('choice');
			$addMem['occ']=$this->input->post('occ');
			$addMem['org']=$this->input->post('org');
			$addMem['spousename']=$this->input->post('spousename');
			$addMem['spouseocc']=$this->input->post('spouseocc');
			$addMem['message']=$this->input->post('message');
			//$data=$addMem;
			// $this->load->view('view_email/email', $addMem);
			$text=implode(" ",$addMem);

			$member_add=true;
			// echo validation_errors();
			// echo "Hello";
			// print_r($addMem);
			// die();

			// $member_add=$this->CRUD->AddProduct($addMem);

			if($member_add)
			{
				//confiigure value
				$sender_email = '';  //your gmail
				$user_password = ''; //email password
				$receiver_email = 'aryan@whitehouse.edu.np';
				$username = 'ASMAN';
				$subject="New Member|ASMAN";
				$message="New Member request has been recived from".$receiver_email;

				// Configure email library
				$config['protocol'] = 'smtp';
				$config['smtp_host'] = 'ssl://smtp.googlemail.com';
				$config['smtp_port'] = 465;
				$config['smtp_user'] = $sender_email;
				$config['smtp_pass'] = $user_password;
				$config['mailtype']  = 'html';
            	$config['charset']  = 'iso-8859-1';

            	$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				// Sender email address
				$this->email->from($sender_email, $username);
				// Receiver email address
				$this->email->to($sender_email);
				// Subject of email
				$this->email->subject($subject);
				//Reply-to-Email
				$this->email->reply_to($receiver_email);
				// $this->load->view('view_email/email', $addMem);

				 $this->email->message($this->load->view('view_email/email', $addMem, true));
				// $this->email->message($text);


					if ($this->email->send())
					{
						echo "Email Sent Suceffully";
					}
					else
					{
						echo "Something went wrong";
					}
			}
		}
		else
		{
			$this->load->view('view_member/member_dashboard');	
		}
		
	}
}
