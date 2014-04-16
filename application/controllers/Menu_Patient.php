<?php
class Menu_Patient	extends CI_Controller 
{
 function __construct()
 {
  parent::__construct();
 session_start();
 }
 

 function index($page = 'home')
   {	
   
	$data['title'] = ucfirst($page);
	$data['main_content'] = 'pages/Menu_Patient';
	
	$this->load->model('Menu_model');
    $data['rows']= $this->Menu_model->Planned_Hospitalization();
   	
   $this->load->model('Menu_model');
   $data['count']= $this->Menu_model->waiting_list_count();
    //var_dump($data);
   //echo 'Success';
  $this->load->view('templates/template',$data); 
   }  
 
  
function logout()
 {
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
    $this->session_destroy();
   redirect('login', 'refresh');
 }









}
?>