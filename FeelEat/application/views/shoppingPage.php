<div class="backg">
<?php include"top_of_page.php";?>
<?php include"new_navbar.php";?>

<div class="contanier">
<br><br><br><br>
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
    <h1 class="text-center"><strong class="color-danger text-title">SHOP CARD</h1>
    
        <h2 class="text-center" ><strong class="color-danger text-title"><?php
         include "db.php";
         $query= $db->query("SELECT * FROM op_table", PDO::FETCH_ASSOC);
         $rows = $query->fetchAll();
         $sum = 0;
         $point=0;
         foreach($rows as $row){
             if($row['order_id'] == $_SESSION['id']){
                $sum++;
             }
         }

         echo $sum;

        ?><strong class="color-danger text-title"> PRODUCT </h2>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-bordered table-striped">
                <thead>
                    <th class= "text-center">PRODUCT IMG</th>
                    <th class= "text-center">NAME</th>
                    <th class= "text-center">PRICE</th>
                    <th class= "text-center">NUMBER</th>
                    <th class= "text-center">SUM</th>
                    <th class= "text-center">REMOVE</th>
                </thead>
                <tbody>
                <?php
        ?>
                   
                       <?php
                            $query1= $db->query("SELECT * FROM op_table", PDO::FETCH_ASSOC);
                            $rows1 = $query1->fetchAll();
                            $query2= $db->query("SELECT * FROM product", PDO::FETCH_ASSOC);
                            $rows2 = $query2->fetchAll();
                            $controlarr = array();
                            $i=0;
                            $cntr=0;
                            $sum =0; //<?php echo $_SESSION['cart'][$row2['product_id']];
                            foreach($rows1 as $row1){
                                foreach($rows2 as $row2){
                                    if($row1['order_id'] == $_SESSION['id']&&$row1['product_id'] == $row2['product_id']){
                                        if(in_array($row2['product_id'],$controlarr)){
                                            break;
                                        }else{
                                            $controlarr[$i]=$row2['product_id'];
                                        }                                  
                                        ?> 
                                        <tbody>
                                        <th class= "text-center">
                                             
                                            <img src="<?php echo base_url()."".$row2['image'] ?>" width="120px" height="80px">
                                        </th>
                                            <th class= "text-center"><?php echo $row2['product_name'] ?> </th>
                                            <th class= "text-center"><?php echo $row2['price'] ?> </th>
                                            <th class= "text-center"><?php echo $_SESSION['cart'][$row2['product_id']];?></th>
                                            <th class= "text-center"><?php echo $row2['price']*$_SESSION['cart'][$row2['product_id']] ?> </th>
                                            <th class= "text-center"><form action = "<?php echo base_url(); ?>shopping_cart/removeFromCart" method="post">
                                            <input type="submit" name="product_id" value="<?php echo $row2['product_id'] ?>"
                                                class='btn btn-danger'>
                                             </input>
                                            </form></th>
                                 
                                        </tbody>
                                        <?php
                                         $i++;

                                        $sum += $row2['price']*$_SESSION['cart'][$row2['product_id']];
                                        
                                        $cntr=1;
                                        $_SESSION['sum'] = $sum;
                                        
                                        break;
                                    }
                                    
                                }
                            }

                            ?>
               
               </table>
            <table class="table">
                <tbody > 
                    
                    <th class= "text-right">
                    <div class="buttom">
                       <h2>SUM = <?php echo $sum;?>
                        </h2></div</th>

                </tbody>


            </table>

            <form class= "text-right" action="<?php echo base_url(); ?>buying">
            <div class="send-button">
                        <button href=><h2>BUY </h2></button>
                        </div>
            </form>
        </div>
    </div>

  
<?php include"bottom_of_page.php";?>
</div>


