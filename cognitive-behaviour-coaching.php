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
                <?php include ( './components/section-title.php' ) ; ?>
                <?php include ( './components/paragraph.php' ) ; ?>
                <?php include ( './components/paragraph.php' ) ; ?>
                <?php include ( './components/paragraph.php' ) ; ?> 
            </div>
        </div>
            
        <div class="section">
            <div class="content">
                <div class="subtle-section-title">How Does It Work?</div> 
                 <div class="mini-paragraphs-container">
                     <?php include ( './components/picture-paragraph.php' ) ; ?>
                </div> 
                <div class="double-list-container">
                        <?php include ( './components/list.php' ) ; ?> 
                        <?php include ( './components/list.php' ) ; ?> 
                </div>
            </div>
        </div>
        
        <div class="section subtle-purple-section">
            <div class="content">
                <?php include ( './components/section-title.php' ) ; ?>
                <?php include ( './components/contact-form.php' ) ; ?>
            </div>
        </div>
        
    </div>
    
    <?php include ( './components/footer.php' ) ; ?>

</body>
    
<?php include ( './common/common-body.php' ) ; ?>    
</html>
