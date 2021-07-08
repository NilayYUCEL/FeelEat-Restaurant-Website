<?php include"top_of_page.php";?>

<?php if($_SESSION['id'] !=0 ){?>
<?php include"new_navbar.php";?>
<?php }else{ ?>
<?php include"navbar.php"; } ?>

  <!-- HOME -->
  <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

          <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Feel <span>.</span> Eat Restaurant</h3>
                                             <h1>WHO ARE WE?</h1>
                                        </div>
                                   </div>
                              </div>
                         </div>


                   

          </div>
     </section>



       <!-- TEAM -->
       <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Meet our chefs</h2>
                              <h4>They are nice &amp; friendly</h4>
                         </div>
                    </div>



                    <?php
        if($fetch_data->num_rows()> 0 )

        {$x = 0;
            foreach($fetch_data->result() as $row)
            {$x = $x+1;
        ?>
            <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="<?php echo base_url(); ?>assets/images/team-image<?php echo $x?>.jpg" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>You can reach us on our social media accounts.</h4> 
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                  <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3><?php echo $row->name." ".$row->surname ;?></h3>
                              <p><?php echo $row->type;?></p>
                         </div>
                    </div>
        <?php
            }
        
        }
        else
        {
        ?>
            <tr>
                <td colspan="3">No Data Found</td>
            </tr>
        <?php   
        }
        ?>

               </div>
          </div>
     </section>

     <?php if($_SESSION['id'] !=0 ){?>
     <?php include"contact.php";}?>



      <?php include"bottom_of_page.php";?>