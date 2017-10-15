<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Behaviour Therapy</title>
    <?php include ( './common/common-head.php' ) ; ?>
</head>

<body>
    
    <?php include ( './components/navbar.php' ) ; ?>
    <?php perch_content('Header'); ?>
    
    <div class="page">
        <div class="section">
             <div class="content">
                <?php perch_content('About Think Better At Work'); ?>
            </div>
        </div>
            
        <div class="section">
            <div class="content">
                <?php perch_content('How Does It Work/ What It Includes'); ?>
            </div>
        </div>
        
        <div class="section subtle-purple-section">
            <div class="content">
                <?php perch_content('Contact Form'); ?>
                <?php include ( './components/contact-form.php' ) ; ?>
            </div>
        </div>
        
    </div>
    
    <?php include ( './components/footer.php' ) ; ?>

</body>
    
<?php include ( './common/common-body.php' ) ; ?>    
</html>
