<div class="backg">
<?php include "top_of_page.php";?>
<?php include "new_navbar.php";?>

<div class="contanier">
         <!-- HOME -->
         <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                            
                              </div>
                         </div>

                    </div>

          </div>
     </section>
</div>
    <div class = "contanier">
    
        <h2 class="text-center" >
            <br/>
            <br/>
            <br/>
            <strong class="color-danger text-title2">PAST ORDERS</h2>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table  table-bordered table-striped">
                <thead>
                    <th class= "text-center">ORDER ID</th>
                    <th class= "text-center">ADDRESS</th>
                    <th class= "text-center">PAYMENT</th>
                    <th class= "text-center">AMOUNT</th>
                </thead>
                <tbody>
                <?php
        ?>
                   
                       <?php
                            include "db.php";
                            $query1= $db->query("SELECT * FROM ordering", PDO::FETCH_ASSOC);
                            $rows1 = $query1->fetchAll();
                            $controlarr = array();
                            $i=0;
                            $cntr=0;
                            $sum =0; 
                            foreach($rows1 as $row1){
                                    if($row1['membership_id'] == $_SESSION['id']){                              
                                        ?> 
                                        <tbody> 
                                            <th class= "text-center"><?php echo $row1['order_id'] ?> </th>
                                            <th class= "text-center"><?php echo $row1['address'] ?> </th>
                                            <th class= "text-center"><?php echo $row1['payment_type'] ?></th>
                                            <th class= "text-center"><?php echo $row1['amount'] ?> ₺
                                        </th>
                                                                            
                                        </tbody>
                                        <?php
                                    }
                                    
                                }
                            

                            ?>
               
            </table>

        </div>
    </div>

<?php include"bottom_of_page.php";?>
</div>
