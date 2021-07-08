<div class="backg">
<?php include"top_of_page.php";?>
<?php include"new_navbar.php";?>

    <div class="contanier">
   
            <!-- HOME -->
            <section id="home">
            <div class="row">

                        <div class="owl-carousel owl-theme">
                            <div class="item item-first">
                                <div class="caption">
                                            <h1></h1>
                                </div>
                            </div>

                        </div>

            </div>
            </section>
    </div>

    <div class = "contanier">
        <br><br><br>,
        <div>
        <h2 class="text-center" ><strong class="color-danger text-title">ORDER</h2>
        <br><br><br>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
            
            <table class="table  table-bordered table-striped">
                <thead>
                    <th class= "text-center">ORDER ID</th>
                    <th class= "text-center">NAME</th>
                    <th class= "text-center">STAFF</th>
                    <th class= "text-center">ADDRESS</th>
                    <th class= "text-center">STATUS</th>
                    <th class= "text-center">POINTS EARNED</th>
                    <th class= "text-center">PAYMENT</th>
                    <th class= "text-center">AMOUNT</th>
                </thead>

                <tbody>
                <?php
                    if($_SESSION['st']== 0){ 
                ?>
                    <th class= "text-center">0</th>
                    <th class= "text-center"><?php echo $_SESSION['name']?></th>
                    <th class= "text-center"><?php echo $_SESSION['staff_id']?></th>
                    <th class= "text-center"><?php echo $_SESSION['selectedAddress']?></th>
                    <th class= "text-center"><?php echo $_SESSION['status']?></th>
                    <th class= "text-center"><?php echo $_SESSION['sum']*0.5?> </th>
                    <th class= "text-center"><?php echo $_SESSION['paymentType']?> </th>
                    <th class= "text-center"><?php echo $_SESSION['sum']."₺"?></th>
                    
                <?php
                    }
                    else if($_SESSION['st']== 1){ 
                ?>

                    
                    <th class= "text-center"><?php print_r($_SESSION['orderid'])?></th>
                    <th class= "text-center"><?php echo $_SESSION['name']?></th>
                    <th class= "text-center"><?php echo $_SESSION['staff_id']?></th>
                    <th class= "text-center"><?php echo $_SESSION['selectedAddress']?></th>
                    <th class= "text-center"><?php echo $_SESSION['status']?></th>
                    <th class= "text-center"><?php echo $_SESSION['sum']*0.5?> </th>
                    <th class= "text-center"><?php echo $_SESSION['paymentType']?> </th>
                    <th class= "text-center"><?php echo $_SESSION['sum']."₺"?></th>
                    
                <?php 
                    } 
                ?>    
                </tbody>
            </table>

            <br><br>

            <?php if($_SESSION['st']== 0){ 
                ?>
                    <form class= "text-right" action="<?php echo base_url();?>buying/saveToDB">
                    <div class="send-button">
                        <button>
                        <h4>Send Order</h4>
                        </button>
                        </div>
                    </form>
             <?php }
             ?>


        </div>
        </div>
    </div>

<?php include"bottom_of_page.php";?>