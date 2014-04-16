<?php
class Insert extends CI_Controller {
    
public function __construct()
	{
	
		parent::__construct();
		session_start();

	}
	
	public function index($page = 'appointment')
	{
	
	$data['title'] = ucfirst($page);
	$data['main_content'] = 'pages/appointment_insert';
	$this->load->view('templates/template',$data); 
		
	}

public function create_appointment() //for inserting appointment later
 {

 $this->form_validation->set_rules('doctor', 'Doctor','required');  
$this->form_validation->set_rules('shif', 'Shift','required');
$this->form_validation->set_rules('date', 'Date','required');  

if( $this->form_validation->run()==false)
{
$this->index();  
}
else{
$this->load->model('appointment_model'); 
if($query= $this->appointment_model->insert_appointment()) 
{
redirect('thank_you/index');
}
else{
$this->index();
}
}
 }
 



}
?>