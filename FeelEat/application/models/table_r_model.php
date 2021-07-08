<?php

class table_r_model extends CI_Model {


    public function get($where = array()){

        $result = $this->db
            ->where($where)
            ->get("table_r")
            ->row();

        return $result;
    }

    public function get_all($where = array()){

        $result = $this->db
            ->where($where)
            ->get("table_r")
            ->result();

        return $result;
    }

    public function delete($where = array()){

        $result = $this->db
            ->where($where)
            ->delete("table_r");
        return $result;
    }

    public function insert($data = array()){

        $result = $this->db
            ->insert("table_r", $data);
        return $result;

    }

    public  function update($data = array(), $where = array()){

        $result = $this->db
            ->where($where)
            ->update("table_r", $data);
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