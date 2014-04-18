<?php
class Login extends CI_Controller {
    
public function __construct()
	{
	
		parent::__construct();
		$this->load->helper(array('form','url'));
        $this->load->library('form_validation');
	}
	
	public function index($page = 'login')
	{
	//if ( ! file_exists('application/views/pages/'.$page.'.php'))
	//{
	//	show_404();
	//}
	$data['title'] = ucfirst($page);
	$data['main_content'] = 'pages/LoginForm_Patient';
	$this->load->view('templates/template',$data); 
	}

function validate_credentials()
 {  
 $this->form_validation->set_rules('patientid', 'ID','trim|required|callback_authenticate');   
$this->form_validation->set_rules('password', 'Password','trim|required|min_length[4]');     

 if($this->form_validation->run() !==false)
 {
 $this->load->model('login_model');          
 $res = $this->login_model->validate();
 
  if($res !== false)
  {
   $this->session->set_userdata('username',$this->input->post('patientid'));
   
   redirect('Menu_Patient/index');
  }
 
 }
   $this->index();
}






}
?>