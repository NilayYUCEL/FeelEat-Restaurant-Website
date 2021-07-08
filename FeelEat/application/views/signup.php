
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
      
      <ul class="tab-group">
        <li class="tab active"><a href="<?php echo base_url(); ?>signinbutton/addpeople?entry=signup"  >Sign Up</a></li>
        <li class="tab "><a href="<?php echo base_url(); ?>signinbutton/addpeople?entry=signin" >Log In</a></li>
      </ul>
      
      
        <div id="signup">   

          <h1>Sign Up for Free</h1>
          <form action="<?php echo base_url(); ?>signinbutton/signupcontrol" method = "post">
        <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input required type="name" name = "name" autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input required type="surname" name = "surname" autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Phone<span class="req">*</span>
            </label>
            <input required  type="phone" name = "phone" autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input required type="email" name = "email" autocomplete="off" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input required type="password" name = "password" autocomplete="off" />
          </div>

          <div class="field-wrap">
            <label>
              Password Again<span class="req">*</span>
            </label>
            <input required type="password" name = "again_password" autocomplete="off" />
          </div>

          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
    
        
      </div><!-- tab-content -->
      
 </div> <!-- /form -->

 <!-- SCRIPTS -->
 <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
 <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/entry.js"></script>
    
</body>



</html>
