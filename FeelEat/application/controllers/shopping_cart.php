<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class shopping_cart extends CI_Controller {
 //
      //  $_SESSION['cart'][$data]++;

    public function index(){  
        
        if($_SESSION['id'] == 0){
            $this->load->view('menu');
        }
        else{
            $this->load->view('new_menu');
        }
      
    }

    
    public function goToCart(){
        $this->load->view('shoppingPage');
    }

    public function addToCart(){
            $data = $this->input->post("product_id");
            $_SESSION['cart'][$data]++;
    
            $order_id = $_SESSION['id'];

        
           
    
            $this->load->model("op_table_model");
      
            $op_data = array(
                "order_id"=> $order_id,
                "product_id"=> $data
            );        
            $this->op_table_model->insert($op_data);


        $this->load->view('new_menu');
        
    }

    public function removeFromCart(){

        $data = $this->input->post("product_id");
        $_SESSION['cart'][$data]=0;

        $order_id = $_SESSION['id'];

        $this->load->model("op_table_model");

        $op_data = array(
            "order_id"=> $order_id,
            "product_id"=> $data
        );
        $this->op_table_model->delete($op_data);

        $this->load->view('shoppingPage');
    }


}
?>