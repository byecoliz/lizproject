<?php

class Appointment_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function search($offset = 0, $getAllData = FALSE)
    {
        $result_per_page = 3;

        if ($this->input->post('dsearch') !== false) {
            $this->session->set_userdata('dsearch', $this->input->post('dsearch'));
        }
        $dsearch = $this->session->userdata('dsearch');

        $this->db->select("DISTINCT ds.DOCTOR_code, CONCAT( d.D_INITIAL_NAME, d.D_LAST_NAME) as Doctor , ds.DEPARTMENT_NAME, ds.SHIFT ", false);
        $this->db->from('DOCTOR_SCHEDULE ds ');
        $this->db->join('DOCTOR d ', 'ds.DOCTOR_CODE=d.DOCTOR_CODE ', 'INNER');
        $this->db->like('DEPARTMENT_NAME', $dsearch);

        //for papgination
        if ($getAllData === FALSE) {
            $this->db->limit($result_per_page, $offset);
        }

        $result = $this->db->get();

//var_dump($this->input->cookie('dsearch'));

        return $result;
        /*
        if ($result->num_rows() > 0)
            {
                foreach($result->result() as $row)
                {
                $data[]=$row;
                }
                return $data;
            }
            */
    }

//create the insert  model later

    function insert_patient()
    {
        $query  = array(
            'patient'          => $this->session->userdata('username'),
            'Department'       => $this->input->post('dsearch'),
            'shift'            => $this->input->post('shift'),
            'DOCTOR_CODE'      => $this->input->post('doctor'),
            'APPOINTMENT_DATE' => $this->input->post('a_date')
        );
        $insert = $this->db->insert('Appointment', $query);

        return $insert;
    }


}

?>


