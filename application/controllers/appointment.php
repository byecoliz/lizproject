<?php
class Appointment extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
    }

    public function index($offset = 0)
    {
        $this->load->model('appointment_model');
        $data['search'] = $this->appointment_model->search($offset);

        $config['base_url']   = base_url() . '/appointment/index';
        $config['total_rows'] = $this->appointment_model->search($offset,TRUE)->num_rows();
        //count($data['search'])
        //$config['total_rows']=20;
        $config['per_page']       = 3;
        $config['num_links']      = 3;
        $config['uri_segment']    = 3;

        $config['first_link']     = 'First';
        $config['full_tag_open']  = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $config['last_link']      = 'Last';
        var_dump($data['search']);

        $this->pagination->initialize($config);

        $data['title']        = ucfirst('appointment');
        $data['main_content'] = 'pages/Date_Doctor';
        $this->load->view('templates/template', $data);
    }


}

?>