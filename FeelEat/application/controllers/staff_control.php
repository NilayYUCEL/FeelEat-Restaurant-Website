<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class staff_control extends CI_Controller {

    function __construct()
    {

        parent::__construct();
        $this->load->database(); //add database class

    }


    public function index()
	{
        $this->load->model("staff_model");
        $data["fetch_data"] = $this->staff_model->fetch_data();
        $this->load->view('team',$data); 

    }





    public function getStaff(){
        $data['comment'] = $this->comment_moment->getComment();
        $this->load->view('comment',$data);
    }


}