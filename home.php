<?php ?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/rough-css.css">
    <?php include ( './common/common-header.php' ) ; ?>
</head>

<body>
    
    <?php include ( './components/navbar.php' ) ; ?>
    <?php include ( './components/home-header.php' ) ; ?>
    
    <div class="page">
        
        <div class="section">
             <div class="content top-content">
                <?php include ( './components/section-title.php' ) ; ?>
                <?php include ( './components/better-points.php' ) ; ?>

            </div>
        </div>
        
        <div class="section subtle-purple-section">
             <div class="content">
                <?php include ( './components/section-title.php' ) ; ?>
                <?php include ( './components/services.php' ) ; ?>

            </div>
        </div>
        
        <div class="section purple-section">
             <div class="content">
                <?php include ( './components/section-title-white.php' ) ; ?>
                 
                 <div class="events-container owl-carousel owl-theme">
                        <?php include ( './components/event-card.php' ) ; ?>
                        <?php include ( './components/event-card.php' ) ; ?>
                        <?php include ( './components/event-card.php' ) ; ?>
                        <?php include ( './components/event-card.php' ) ; ?>
                 </div>
                
            </div>
        </div>
            
 
        
    </div>
    
    <?php include ( './components/footer.php' ) ; ?>

</body>
    
<script src="./assets/js/main-min.js"></script>    
</html>
