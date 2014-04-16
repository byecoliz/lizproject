<?php

class Contact extends CI_Controller {

	function index( )
	{
		
		$this->form_validation->set_rules('contact-name', 'Your Name', 'required');
		$this->form_validation->set_rules('contact-email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('contact-subject', 'Subject', 'required');
		$this->form_validation->set_rules('inputMessage', 'Message', 'required');
		
		if($this->form_validation->run() !==false)
		{
			$this->load->model('mailer');          
            $msg = $this->mailer->message();
 
			if($msg !== false)
				{
				$this->load->view('pages/thanks_contact');
 				}
 		}
		 //$this->index();
		//return false;
	  // echo form_open('contact'); 
	  
	 // $this->load->view('pages/test');
	  $data['main_content'] = 'pages/home';
     $this->load->view('templates/template',$data);
	}
}
?>