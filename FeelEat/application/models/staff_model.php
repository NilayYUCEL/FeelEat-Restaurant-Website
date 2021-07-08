<?php

class staff_model extends CI_Model
{
    function insert_data($data)
    {

        $this->db->insert("staff",$data);

    }

    function fetch_data()
    {
        $this->db->select('*');
        $this->db->from("staff");
        $query = $this->db->get();
        return $query;
    }
       

}