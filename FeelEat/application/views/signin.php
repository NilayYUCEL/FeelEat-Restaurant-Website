<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/entry.css">
</head>
<body>
        
<div class="form">
      
      <ul class="tab-group" >
        <li class="tab" ><a href="<?php echo base_url(); ?>signinbutton/addpeople?entry=signup"  >Sign Up</a></li>
        <li class="tab active" ><a href="<?php echo base_url(); ?>signinbutton/addpeople?entry=signin"  >Log In</a></li>
      </ul>
      
      
        
        <div id="signin">   
          <h1>Welcome Back!</h1>
          
          <form action="<?php echo base_url(); ?>signinbutton/signincontrol" method = "post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input required type="email" name = "email" autocomplete="off" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input required type="password" name = "password" autocomplete="off" />
          </div>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <!-- SCRIPTS -->
 <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
 <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/entry.js"></script>
</body>



</html>