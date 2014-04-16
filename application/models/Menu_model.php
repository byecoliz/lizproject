<?php

class Menu_model extends CI_Model {
 
 public function __construct()
	{
	parent::__construct();
    
	$this->load->database();
	}

function waiting_list_count()
{
$q=$this->db->select("COUNT(*) AS MyCount");
$this->db->from("WAITING_LIST");
$this->db->where('PATIENT', $_SESSION['username']);
$this->db->where('STATUS_OF_WAITING_LIST', 'Waiting');
$q=$this->db->get();
	if ($q->num_rows() == 1)
    {
        foreach($q->result() as $row)
		{
		$data[]=$row;
		}
		return $data; 
	}
}

function Planned_Hospitalization()
{
$q=$this->db->select("wl.PATIENT,wl.STATUS_OF_WAITING_LIST,wl.CLINICAL_DEPARTMENT,h.WL_HOSPITALIZATION_DATE,
CONCAT( d.D_INITIAL_NAME,' ',d.D_LAST_NAME )AS Doctor,
CONCAT( 'Bed',' ',h.CLINICAL_BED_NO ,' ', 'in' ,' ','Room',' ',  h.CLINICAL_ROOM_NO)AS Location,
DATEDIFF(h.WL_HOSPITALIZATION_DATE,wl.WAITING_LIST_DATE) AS Duration",FALSE);
$this->db->from('WAITING_LIST wl');
$this->db->join('DOCTOR d ','wl.DOCTOR=d.DOCTOR_CODE','LEFT');
$this->db->join('HOSPITALIZATION h',' wl.PATIENT=h.PATIENT','LEFT');
$this->db->where('STATUS_OF_WAITING_LIST','Planned');
$this->db->where('wl.patient',$_SESSION['username']);
$q=$this->db->get();
	if ($q->num_rows() > 0)
    {
        foreach($q->result() as $row)
		{
		$data[]=$row;
		}
		return $data;
	}
    
}






}
?>