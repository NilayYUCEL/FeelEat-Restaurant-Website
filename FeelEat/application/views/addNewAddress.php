<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/address.css">
</head>
<body>
    <div class="cont_heg_50" >
        <form  action="<?php echo base_url(); ?>buying/saveNewAddress" method = "post">
        <div class="text" >
            <input class="input"  type="address" name = "address" placeholder="ADDRESS"> <br>
            <input class="input"  type="city" name = "city" placeholder="CITY"> <br>
            <button type="submit" >Save</button>
            </div>
        </form>
        </div>
</body>
</html>