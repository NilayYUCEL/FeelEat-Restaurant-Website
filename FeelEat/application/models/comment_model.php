<?php

class comment_model extends CI_Model
{

        function __construct()
        {

            parent::__construct();
        $this->load->database(); //add database class

        }
    
    function commentInsert($data=array())
    {
        $result=$this->db->insert('contact',$data);
        return $result;


    }

    public function fetch_data()
    {
        //$query = $this->db->get("comment");
      //  $query = $this->db->query("SELECT * FROM comment ");
      $this->db->select("*");
      $this->db->from("contact");
      $query = $this->db->get();
        return $query;

    }

   /* function list($data=array()){
        $result=$this->db->get('comment');
        return $result->result();
    }*/




}