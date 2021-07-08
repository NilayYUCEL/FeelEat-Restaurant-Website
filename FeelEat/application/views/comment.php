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
                                             <h1>COMMENTS</h1>
                                        </div>
                                   </div>
                              </div>
                         </div>


          </div>
     </section>


          <!-- Feedbacks -->
          <section id="feedbacks" data-stellar-background-ratio="0.5" href="<?php echo base_url(); ?>comment">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         
                    <div class="table-responsive">
             <table class="table table-bordered"  >
            <tr>
                <th>Comments</th>
            </tr>
        <?php
        if($fetch_data->num_rows()> 0 )
        {
            foreach($fetch_data->result() as $row)
            {
        ?>
         <?php if($row->type != "Career" ) { ?>
            <tr>
            
                <td><?php  echo $row->text; ?><td>
                

            </tr>
            <?php }?>
        <?php
            }
        
        }
        
        ?>
            
        
        </table>
    </div>




                    </div>
                    
               </div>
          </div>
      </section>

      <?php if($_SESSION['id'] !=0 ){?>
<?php include"contact.php";}?>



      <?php include"bottom_of_page.php";?>