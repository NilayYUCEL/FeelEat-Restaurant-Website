<?php

class ordering_model extends CI_Model {


    public function get($where = array()){

        $result = $this->db
            ->where($where)
            ->get("ordering")
            ->row();

        return $result;
    }

    public function get_all($where = array()){

        $result = $this->db
            ->where($where)
            ->get("ordering")
            ->result();

        return $result;
    }

    public function delete($where = array()){

        $result = $this->db->delete("ordering",$where);
        return $result;
    }

    public function insert($data = array()){

        $result = $this->db->insert("ordering", $data);
        return $result;

    }

    public  function update($data = array(), $where = array()){

        $result = $this->db
            ->where($where)
            ->update("ordering", $data);
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