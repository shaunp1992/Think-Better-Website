<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Think Better Workshops</title>
    <?php include ( './common/common-head.php' ) ; ?>
</head>

<body>
    
    <?php include ( './components/navbar.php' ) ; ?>
    <?php perch_content('Header'); ?>
    
    <div class="page">
        <div class="section">
             <div class="content top-content">
                 <?php
                      perch_shop_complete_payment('paypal-express');

                      if (perch_shop_order_successful()) {
                          echo '<h1>Thank you for your order!</h1>';
                        }else{
                          echo '<h1>Payment Recieved!</h1>';
                        }
                    ?>
            </div>
        </div>
            
    </div>
    
    <?php include ( './components/footer.php' ) ; ?>

</body>
    
<?php include ( './common/common-body.php' ) ; ?>    
</html>