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
             <div class="content">
                <div class="section-title-container">
                    <div class="section-title">What We Do</div>
                    <div class="section-title-underline">
                        <img src="assets/img/title-underline.svg">
                    </div>
                    <div class="section-subtitle">Think Better services are designed to help people learn about staying well, achieving personal and professional 
success, coming back from the knocks in life and ultimately, THINKING, FEELING and ACTING better.</div>
                </div>
                <?php include ( './components/better-points.php' ) ; ?>

            </div>
        </div>
        
        <div class="section subtle-purple-section">
             <div class="content">
                <div class="section-title-container">
                    <div class="section-title">Our Services</div>
                    <div class="section-title-underline">
                        <img src="assets/img/title-underline.svg">
                    </div>
                </div>
                <?php include ( './components/services.php' ) ; ?>

            </div>
        </div>
        
        <div class="section purple-section" style="height: 600px;">
             <div class="content">
                <div class="section-title-container">
                    <div class="section-title" style="color: white">Upcoming Events</div>
                    <div class="section-title-underline">
                        <img src="assets/img/title-underline-white.svg">
                    </div>
                </div>
                

            </div>
        </div>
        
        <div class="section subtle-purple-section" style="height: 600px;">
             <div class="content">
                <div class="section-title-container">
                    <div class="section-title">Blog</div>
                    <div class="section-title-underline">
                        <img src="assets/img/title-underline.svg">
                    </div>
                </div>
            </div>
        </div>
            
 
        
    </div>
    
    <?php include ( './components/footer.php' ) ; ?>

</body>
    
<script src="./assets/js/main-min.js"></script>    
</html>
