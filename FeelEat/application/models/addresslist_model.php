<?php

class Addresslist_model extends CI_Model {



   public function drop(){
       $result = $this->$db->query("DROP VIEW addresslist");   
       return $result;
    
}



} 