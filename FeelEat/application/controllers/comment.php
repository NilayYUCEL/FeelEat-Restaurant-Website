<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class comment extends CI_Controller {


        function __construct()
        {
            parent::__construct();

        }

   /* public function index()
	{
     
        $this->load->view('comment'); 
    }*/

public function index()
	{
        $this->load->model("comment_model");
        $data["fetch_data"]= $this->comment_model->fetch_data();
        $this->load->view('comment',$data); 
       // $this->load->view('index')->;

    }



    public function inserted(){

        $this->index();
        
    }

    public function addComment()
	{  /*
        $this->input->post('comment');
        $this->load->model("commentModel");
        $result=$this->commentModel->insert($this);
        if($result)
            echo "Comment was added.";
        else
            echo "The record could not be added.";*/
            
        $text=$this->input->post('message');
        $membership_id=$_SESSION['id'];
        $type=$this->input->post('subject');
        
        

        
        
        $data['membership_id']=$membership_id;
        $data['type']=$type;
        $data['text']=$text;

        $this->load->model('comment_model');
        $result=$this->comment_model->commentInsert($data);
        if($result){
            $message = "message is added";
            echo "<script type='text/javascript'>alert('$message'); </script>";
            $this->load->model("comment_model");
            $data["fetch_data"]= $this->comment_model->fetch_data();
            $this->load->view('comment',$data); 

        }
       


        
        /*if($result)
            echo "Comment was added.";
        else
            echo "The record could not be added.";*/

    }

    public function getComment(){
        $data['comment'] = $this->comment_moment->getComment();
        $this->load->view('comment',$data);
    }

}