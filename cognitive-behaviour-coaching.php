<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Behaviour Coaching</title>
    <?php include ( './common/common-head.php' ) ; ?>
</head>

<body>
    
    <?php include ( './components/navbar.php' ) ; ?>
    <?php perch_content('Header'); ?>
    
    <div class="page">
        <div class="section">
             <div class="content">
                <?php perch_content('About Cognitive Behaviour Coaching'); ?>
            </div>
        </div>
            
        <div class="section">
            <div class="content">
                <?php perch_content('How Does It Work'); ?>
            </div>
        </div>
        
        <div id="contact-form" class="section subtle-purple-section">
            <div class="content">
                <?php perch_content('Contact Form'); ?>
                <?php perch_content('Contact Form Test'); ?>
                <?php include ( './components/contact-form.php' ) ; ?>
            </div>
        </div>
        
    </div>
    
    <?php include ( './components/footer.php' ) ; ?>

</body>
    
<?php include ( './common/common-body.php' ) ; ?>    
</html>
