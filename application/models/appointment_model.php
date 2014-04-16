<?php

class Appointment_model extends CI_Model {
 
 public function __construct()
	{
	parent::__construct();
 	}
	
	public function search()
 {
$result =$this->db->select("DISTINCT ds.DOCTOR_code, CONCAT( d.D_INITIAL_NAME, d.D_LAST_NAME) as Doctor , ds.DEPARTMENT_NAME, ds.SHIFT ",FALSE);
$this->db->from('DOCTOR_SCHEDULE ds ');
$this->db->join('DOCTOR d ','ds.DOCTOR_CODE=d.DOCTOR_CODE ','INNER');
$this->db->like('DEPARTMENT_NAME',$this->input->post('dsearch')); 
$result=$this->db->get();       

if ($result->num_rows() > 0)
    {
        foreach($result->result() as $row)
		{
		$data[]=$row;
		}
		return $data;    
	}
    
} 
		
//create the insert  model later
  
function insert_patient()
{
$query=array(
 'patient' => $this->input-> $_SESSION['username'],
 'Department' => $this->input->post('dsearch'),
 'shift' => $this->input->post('shift'),
 'DOCTOR_CODE' => $this->input->post('doctor'),
 'APPOINTMENT_DATE' => $this->input->post('a_date')   );
$insert= $this->db->insert('Appointment',$query);
return $insert;
}
 


} 

?>


