<?php

class Membership_model extends CI_Model {


    public function get($where = array()){

        $result = $this->db
            ->where($where)
            ->get("membership")
            ->row();

        return $result;
    }

    public function get_all($where = array()){

        $result = $this->db
            ->where($where)
            ->get("membership")
            ->result();

        return $result;
    }

    public function delete($where = array()){

        $result = $this->db
            ->where($where)
            ->delete("membership");
        return $result;
    }

    public function insert($data = array()){

        $result = $this->db
            ->insert("membership", $data);
        return $result;

    }

    public  function update($data = array(), $where = array()){

        $result = $this->db
            ->where($where)
            ->update("membership", $data);
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