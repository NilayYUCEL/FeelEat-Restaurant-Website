<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class page_exit extends CI_Controller {


    public function index(){
     //BÜTÜN SESSİONLARI SIFIRLAAAAA

     $this->load->model("op_table_model");
     $rows = $this->op_table_model->get_all();
     foreach($rows as $row){
         if($row->order_id == $_SESSION['id']){
             $arr = array(
                 "order_id" => $row->order_id,
                 "product_id" =>$row->product_id
             );
             $this->op_table_model->delete($arr);
         }
     }


     $this->load->model("product_model");
     $rows = $this->product_model->get_all();
     foreach($rows as $row){
         $_SESSION['cart'][$row->product_id] = 0;
     }


     $_SESSION['id']=0;
     $_SESSION['name']="";
     $_SESSION['surname']="";
     $_SESSION['phone']="";
     $_SESSION['mail']="";
     $_SESSION['password']="";
     $_SESSION['score']=0;

     $this->load->view('index.php');
    }

}
?>