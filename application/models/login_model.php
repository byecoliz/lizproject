<?php

class login_model extends CI_Model {
 
 public function __construct()
	{
	parent::__construct();
    $this->load->database();
	}

 public function validate()
 {
  $this->db->where('PATIENT_ID', $this->input->post('patientid'));  
  $this->db->where('PATIENT_PW', md5($this->input->post('password'))); 
  $query = $this->db->get('patient');        
  if($query->num_rows == 1)           
  {
   return true;     
    }
  return false;
   }

 


} 

?>


