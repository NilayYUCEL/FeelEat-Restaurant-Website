<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php

        //BU KULLANILMIYO OLABİLİR
        $userid = include 'signinbutton.php';
        $rows = $this->db->get("address")->result();
              $counter=0;
              foreach($rows as $row){
                    if($row->membership_id == $userid){
                        $counter++;
                      echo '</p><form action="<?php echo base_url(); ?>buying/takeAllInfo" method = "post">
                        <br><button>'.$counter. " - ". $row->address ." / " .$row->city .'</button>
                        </form></p>';
                    }
                }
                if($counter==0){
                    echo '</p>'."You have no saved address! Please add new address." . '</p>';
                    $this->load->view('addNewAddress');
                }

        ?>



</body>
</html>