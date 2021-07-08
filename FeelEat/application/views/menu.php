     <?php include"top_of_page.php";?>
     <?php include"navbar.php";?>

     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <h1>Our Menus</h1>
                                        <h3>Tea Time &amp; Dining</h3>
                                   </div>
                              </div>
                         </div>

                    </div>

          </div>
     </section>


    <!-- MENU -->
    <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
          <?php
               include "db.php";
               $query= $db->query("SELECT * FROM product", PDO::FETCH_ASSOC);
               $rows = $query->fetchAll();

          ?>

          <form action="<?php echo base_url(); ?>signinbutton" method = "post" id ="demo">
          <?php foreach($rows as $row) {?>
               <div class="col-md-6 col-xs-3" width="200px" height="200px">
                                   <!-- MENU THUMB -->
                                   <div class="menu-thumb">
                                        <a href="<?php echo base_url() .''.$row["image"]; ?>" class="image-popup" title="Self-made Salad">
                                             <img src="<?php echo base_url() .''.$row["image"]; ?>"  class="img-responsive" alt="">

                                             <div class="menu-info">
                                                  <div class="menu-item">
                                                       <h3><?php echo $row["product_name"]; ?></h3>
                                                       <p><?php echo $row["information"]; ?></p>
                                                  </div>
                                                  <div class="menu-price">
                                                       <span><?php echo $row["price"]; ?>₺</span>
                                                  </div>

                                             </div>
                                        </a>

                                        <p>                                          
                                             <button class='btn btn-warning'>
                                             X</button>
                                        </p>
                                        
                                   </div>
               </div>
               <?php }?>
              
          </form>
          <iframe name="h" id="h" frameborder="0" style="display:none"></iframe>


    </div>
          </div>
     </section>


     <?php include"bottom_of_page.php";?>

