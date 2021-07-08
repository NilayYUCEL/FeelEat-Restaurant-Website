<div class="backg">
<?php include"top_of_page.php";?>
<?php include"new_navbar.php";?>

    <?php 
            ?>

    <div class = "contanier">
        <br><br><br><br><br><br>
        <h2 class="text-center" ><strong class="color-danger text-title">PROFILE</h2>
        <br>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <form class= "text-center text-title"><h3><?php echo "Your point: ".$_SESSION['score']." ";?></h3></form> 
                <br>
                <form class= "text-center text-title"><h3><?php echo $_SESSION['name']." " . $_SESSION['surname'];?></h3></form> 
                <br>

                <form class= "text-center text-title" action ="<?php echo base_url(); ?>/settings/changePhone" 
                    method="post"> 
                    <div class="profile">
                    PHONE: <?php echo $_SESSION['phone'];?>                 
                    <br>
                    </div>
                    <input name="phoneChange" >
                    <button>UPDATE</button>
                </form> 

                <br>

                <form class= "text-center text-title" action ="<?php echo base_url(); ?>/settings/changeMail" 
                    method="post" >
                    <div class="profile">
                    MAIL: <?php echo $_SESSION['mail']?>
                    <br>
                    </div>
                    <input type = "email" name="mailChange" >
                    <button>UPDATE</button>
                </form> 

                <br>

                <form class= "text-center text-title" action ="<?php echo base_url(); ?>/settings/changePassword" 
                    method="post">
                    <a class="password1"> PASSWORD: ********** </a>
                    <br>
                    <input type= "password" name="passwordChange" >
                    <button>UPDATE</button>
                </form> 


                <br>
                <br>
                <br>

                <form class= "text-center text-color1" action ="#" 
                    method="post">
                    <h2 class="password"> ADDRESS </h2>
                    <br>
                    <?php 
                    include "db.php";
                    $query= $db->query("DROP VIEW addresslist", PDO::FETCH_ASSOC);
                    $query1= $db->query("CREATE view addresslist AS SELECT address.address, address.city FROM 
                    address INNER JOIN membership ON address.membership_id = membership.member_id and membership.member_id= ". $_SESSION['id']."", PDO::FETCH_ASSOC);
                    $query2= $db->query("SELECT * FROM addresslist", PDO::FETCH_ASSOC);
                    $rows1 = $query2->fetchAll();
                    foreach($rows1 as $row){ ?>
                        <a><?php echo $row['address']. "-" .$row['city']?></a>
                        <br>
                <?php    }
                    ?>
                </form>








        </div>
    </div>

<?php include"bottom_of_page.php";?>
</div>