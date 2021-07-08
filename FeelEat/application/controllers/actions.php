<?php

$this->load->model("product_model");

if($_POST){
    
    $id = $_POST["id"];

    $statement = $this->product_model->get("id");
    echo $statement;

}

?>