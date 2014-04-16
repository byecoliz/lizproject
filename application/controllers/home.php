<?php
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
        $this->load->library('form_validation');
		
	}

public function index($page = 'home')
	{
	if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		show_404();
	}

	$data['title'] = ucfirst($page);
	$data['main_content'] = 'pages/home';
	$this->load->view('templates/template',$data); 
		
	}
	
	
	
	
	

}
?>
	