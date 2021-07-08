<?php

class op_table_model extends CI_Model {

    public function index()
    {
        $this->load->database();
    }

    public function get($where = array()){

        $result = $this->db
            ->where($where)
            ->get("op_table")
            ->row();

        return $result;
    }

    public function get_all($where = array()){

        $result = $this->db
            ->where($where)
            ->get("op_table")
            ->result();

        return $result;
    }

    public function delete($where = array()){
        $result = $this->db->delete('op_table',$where);
        return $result;
    }

    public function insert($data = array()){

        $result = $this->db
            ->insert("op_table", $data);
        return $result;

    }

    public  function update($data = array(), $where = array()){

        $result = $this->db
            ->where($where)
            ->update("op_table", $data);
        return $result;
    }

    public function query($query){

        $result = $this->db
            ->query($query)
            ->result();
        return $result;
    }

    public function get_last_id(){
        return $this->db->insert_id();
    }







} 