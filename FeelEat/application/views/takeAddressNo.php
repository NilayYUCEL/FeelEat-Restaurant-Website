<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/address.css">
    </head>
    <body>

    <div class="cont_heg_50"></div>

<div class="cont_select_center">
    <form  class= "button" action="<?php echo base_url(); ?>buying/takeAllInfo" method ="post">
    <div class="select_mate" data-mate-select="active" >
    <select name="option" onclick="return false;" id="">
       <?php foreach($fetch_data as $row){?>
        <?php if($row->membership_id == $_SESSION['id']){?>
            <?php $counter1= $counter1+1;?>
            <option value="<?php echo $counter1;?>"><?php echo  $row->address ?> / <?php echo $row->city ?></option> <?php ;}} ?> 
            </select>
                <button > Send </button> 
            <p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
    <path d="M0-.75h24v24H0z" fill="none"/>
</svg></span>
<div class="cont_list_select_mate">
  <ul class="cont_select_int">  </ul> 
</div>
</div>
   

<script src="<?php echo base_url(); ?>assets/js/address.js"></script>

    </body>
</html>

