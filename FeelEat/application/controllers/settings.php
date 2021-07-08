<?php 
class settings extends CI_Controller
{

    public function index(){
        //print all users information
        //add buttons for chancing
        //take new information
        //do necessary controlls
        //update in the db
        
        $this->load->model("membership_model");
        $rows = $this->membership_model->get_all();
        foreach($rows as $row){
            if($_SESSION['id'] == $row->member_id){

            }
        }
        $this->load->view('profilePage');
            
    }



    public function changePhone(){
        $change_info= $this->input->post('phoneChange');

        if( $change_info!=null){
            $this->load->model("membership_model");
            $rows = $this->membership_model->get_all();
            foreach($rows as $row){
                if($_SESSION['id'] == $row->member_id){
                    $data = array(
                        'phone' => $change_info
                    );
                     $where = array(
                         'member_id' => $_SESSION['id']
                    );
                    $this->membership_model->update($data,$where);
                    $_SESSION['phone'] = $change_info;
                    $this->load->view('profilePage');
                }
            }

        }
        else{
            $this->load->view('profilePage');
        }


    }

    public function changeMail(){
        $change_info= $this->input->post('mailChange');

        if( $change_info!=null){
            $this->load->model("membership_model");
            $rows = $this->membership_model->get_all();
            foreach($rows as $row){
                if($_SESSION['id'] == $row->member_id){

                    $ctrl=0;
            
                    $rows = $this->membership_model->get_all();
                    foreach($rows as $row){
                        if($change_info == $row->mail){
                            $ctrl=1;
                            break;
                        }
                    }
                    
                    if($ctrl==1){
                        $this->load->view('profilePage');
                        break;
                    }


                    $data = array(
                        'mail' => $change_info
                    );
                     $where = array(
                         'member_id' => $_SESSION['id']
                    );
                    $this->membership_model->update($data,$where);
                    $_SESSION['mail'] = $change_info;
                    $this->load->view('profilePage');

                }
            }

        }
        else{
            $this->load->view('profilePage');
        }

    }

    public function changePassword(){
        $change_info= $this->input->post('passwordChange');

        if( $change_info!=null){
            $this->load->model("membership_model");
            $rows = $this->membership_model->get_all();
            foreach($rows as $row){
                if($_SESSION['id'] == $row->member_id){
                    $data = array(
                        'password' => $change_info
                    );
                     $where = array(
                         'member_id' => $_SESSION['id']
                    );
                    $this->membership_model->update($data,$where);
                    $_SESSION['password'] = $change_info;
                    $this->load->view('profilePage');
                }
            }

        }
        else{
            $this->load->view('profilePage');
        }

    }
    
}









?>