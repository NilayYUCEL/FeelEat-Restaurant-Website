<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class signinbutton extends CI_Controller {


    public function index()
	{
      /*  $test = $this->db->get("table_r")->result();
        foreach($test as $row)
            echo " " . $row->table_id . " ";
    */
        $this->load->view('signin'); 
    }
    public function addpeople()
	{
          $option = $this->input->get('entry');

        if($option == "signup") 
            $this->load->view('signup');
        else{
            $this->load->view('signin');
        }

      /*  $test = $this->db->get("membership")->result();
        foreach($test as $row)
            echo " " . $row->table_id . " ";

        */
    
    }
    
	public function signupcontrol(){
        
        $pass1 = $this->input->post("name");
        $pass2 = $this->input->post("surname");
        $pass3 = $this->input->post("phone");
        $pass4 = $this->input->post("email");
		$pass5 = $this->input->post("password");
		$pass6 = $this->input->post("again_password");
        $ctrl=0;
        if($pass5 != $pass6){
            $message = "please check your password!";
            echo "<script type='text/javascript'>alert('$message'); </script>";

            $this->load->view('signup');
            $ctrl=1;
		}

        $rows = $this->db->get("membership")->result();
        foreach($rows as $row){
            if($pass4 == $row->mail){

                $message = "this email is in use!";
                echo "<script type='text/javascript'>alert('$message'); </script>";
                $this->load->view('signup');
                $ctrl=1;
            }
        }

        if($ctrl!=1){
            $data = array(
                'name' => $pass1,
                'surname' => $pass2,
                'type' => 'user',
                'phone' => $pass3,
                'mail' => $pass4,
                'password' => $pass5,
                'score' => 0
            );
            $this->db->insert('membership',$data);
            $this->load->view('signin');
        }


    }
    

    public function signincontrol(){
        
        $pass1 = $this->input->post("email");
        $pass2 = $this->input->post("password");
        $name;
        $ctrl=0;
        $ctrl_mail=0;

        $this->load->model('membership_model');
        $rows = $this->membership_model->get_all();
        foreach($rows as $row){
            if($pass1 == $row->mail){
                $ctrl_mail=1;
                if($pass2 != $row->password){
                    $message = "please check your password!";
                    echo "<script type='text/javascript'>alert('$message'); </script>";
                    $this->load->view('signin');
                    $ctrl=1;
                }else{
                    $_SESSION['name']=$row->name;
                    $_SESSION['surname']=$row->surname;
                    $_SESSION['phone']=$row->phone;
                    $_SESSION['id']=$row->member_id;
                    $_SESSION['mail']=$row->mail;
                    $_SESSION['password']=$row->password;
                    $_SESSION['score']=$row->score;

                    $this->load->model("product_model");
                    $userid =$_SESSION['id'];
                    $rows = $this->product_model->get_all();
                    $sum =0;
                    foreach($rows as $row){
                        $_SESSION['cart'][$row->product_id] = 0;
                    }
                }

            }

        }

        if($ctrl!=1 && $ctrl_mail==1){

            $this->load->view('after_signin');
        }
        else if ($ctrl!=1 && $ctrl_mail!=1){
            

            $this->load->view('signin');

            $message = "this mail is not registered!";
            echo "<script type='text/javascript'>alert('$message'); </script>";
            
        }


	}

}