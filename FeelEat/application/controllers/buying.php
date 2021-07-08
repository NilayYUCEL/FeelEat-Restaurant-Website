<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$selectedAddress;
$addressOption;
$counter1=0;


class buying extends CI_Controller {

    public function index(){ 
        //select to list or add new address 
        $this->load->view('addressSelection');
    }

    public function selectAddress(){
        
        $_SESSION['addressOption'] = $this->input->post("addressSelect");
        //to take information from address-db
        $this->load->model("address_model");
        if($_SESSION['addressOption'] == "add"){
            //to add new address
            $this->load->view('addNewAddress');
        }
        else{
            $this->printAddress();
        }
    }

    public function printAddress(){

        $counter1=0;
        //to take information from address-db
        $this->load->model("address_model");
        //print all saved address for user
        $rows = $this->address_model->get_all();
        $data['fetch_data']=$rows;
        foreach($rows as $row){
            if($row->membership_id == $_SESSION['id']){
                $counter1++;
               // echo '</p>'.$counter1. " - ". $row->address ." / " .$row->city .'</p>';
            }
        }
        if($counter1==0){
            $message = "You have no saved address! Please add new address.";
            echo "<script type='text/javascript'>alert('$message'); </script>";
            $this->load->view('addNewAddress');
        }
        else if ($counter1>0){
            $this->load->view('takeAddressNo',$data);
        }


    }

    public function saveNewAddress(){
        //to save in the addressdb
        $this->load->model("address_model");
        $address = $this->input->post("address");
        $city = $this->input->post("city");

        //modelste yapılcak
        $data = array(
            'membership_id' => $_SESSION['id'],
            'city' => $city,
            'address' => $address
        );
        //saving
        $this->address_model->insert($data);

        $message = "New address saved!";
        echo "<script type='text/javascript'>alert('$message'); </script>";
        


        $_SESSION['addressOption'] = "select";
        $this->printAddress();

    }

    public function takeAllInfo(){
        
        //to select the address with option
        $selectedAddress="";
        $counter = $this->input->post("option");

        $counter1 = 0;
        $this->load->model("address_model");
        $rows = $this->address_model->get_all();
        foreach($rows as $row){
            if($row->membership_id == $_SESSION['id']){
                $counter1++;
                if($counter == $counter1){
                    $selectedAddress = $row->address ." / " .$row->city ;
                }
            }
        }

        //define other variables
        $_SESSION['selectedAddress'] = $selectedAddress;
        $_SESSION['staff_id'] =1;
        $_SESSION['status'] = "Waiting";
        $_SESSION['st']=0;
        //to choose the payment type
        $this->load->view('paymentSelection');
    }

    public function goToCompleteOrder(){
        //paymentSelection button
        $_SESSION['paymentType']= $this->input->post("PAYMENT");
        //print order infos
        $this->load->view('orderTracking');
    }

    public function saveToDB(){
        $_SESSION['status'] = "Getting Ready";
        $this->load->model("ordering_model");
        $data=Array(
            "membership_id" =>$_SESSION['id'],
            "staff_id" => $_SESSION['staff_id'],
            "address" => $_SESSION['selectedAddress'],
            "status" => $_SESSION['status'],
            "points_earned" => $_SESSION['sum']*0.5,
            "payment_type" => $_SESSION['paymentType'],
            "amount" => $_SESSION['sum'],
        );
        $this->ordering_model->insert($data);
        $_SESSION["orderid"] = $this->ordering_model->get_last_id();

        $point=$_SESSION['sum']*0.5; 
        $_SESSION['score'] += $point;

        $this->load->model("membership_model");     

        $data = array(
            'score' => $_SESSION['score']
        );
         $where = array(
             'member_id' => $_SESSION['id']
        );

        $this->membership_model->update($data,$where);

        $this->finishOrder();





    }

    public function finishOrder(){     
        //clean the shop cart 
        $this->load->model("op_table_model");
        $data = Array(
            "order_id" =>$_SESSION['id']
        );
        $this->op_table_model->delete($data);
        //change the status
        $_SESSION['st']=1;

        //to clean shop cart counter
        $this->load->model("product_model");
        $rows = $this->product_model->get_all();
        $sum =0;
        foreach($rows as $row){
            $_SESSION['cart'][$row->product_id] = 0;
        }
        $this->load->view('orderTracking');

        $message = "Your order has been taken!"; 
        echo "<script type='text/javascript'>alert('$message'); </script>";

        
    }
}