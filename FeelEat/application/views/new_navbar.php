<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="<?php echo base_url(); ?>Welcome" class="navbar-brand">Feel <span>.</span> Eat</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="<?php echo base_url(); ?>Welcome" class="smoothScroll">Home</a></li>
                         <li><a href="<?php echo base_url(); ?>Welcome" class="smoothScroll">About Us</a>
                              <ul type="none">
                                   <li><a href="<?php echo base_url(); ?>staff_control">Team</a></li>
                                   <li><a href="<?php echo base_url(); ?>comment">Feedbacks </a></li>
                              </ul>  
                         </li>
                         <li><a href="<?php echo base_url(); ?>shopping_cart" class="smoothScroll">Menu</a></li>
                         <li><a href="#footer" class="smoothScroll">Reservation</a>
                         </li>
                         <li><a href="#footer" class="smoothScroll">Contact</a>
                              <ul type="none">
                                   <li><a href="#contact">Career</a></li>
                                   <li class="Suggestion"><a href="#contact">Suggestion and Complaint</a></li>
                              </ul> 
                         </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="<?php echo base_url(); ?>Welcome" class="section-btn"><?php  echo $_SESSION['name']." | ".$_SESSION['score'] ?></a>
                         <ul type="none">
                                   <li><a href="<?php echo base_url(); ?>settings">Account</a></li>
                                   <li><a href="<?php echo base_url(); ?>shopping_cart/goToCart">Shopping Cart</a></li>
                                   <li><a href="<?php echo base_url(); ?>orders">Orders</a></li>
                                   <li><a href="<?php echo base_url(); ?>page_exit">Exit</a></li>
                              </ul>  
                         </li>
                    </ul>

               </div>

          </div>
     </section>