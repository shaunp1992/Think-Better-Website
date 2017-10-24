<?php include('../perch/runtime.php'); ?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Think Better Blog</title>
    <?php include ( '../common/common-head.php' ) ; ?>
    <meta charset="utf-8">
	<?php perch_blog_post_meta(perch_get('s')); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="rss.php" />
	<?php perch_get_css(); ?>
	<?php perch_blog_post_webmention_endpoint(perch_get('s')); ?>
</head>

<body>
    
    <?php include ( '../components/navbar.php' ) ; ?>
    <?php perch_content('Header'); ?>
    <span id="page" class="anchor"></span>
    <div class="page">
        <div class="section">
             <div class="content">
                <?php perch_blog_post(perch_get('s')); ?>                 
            </div>
        </div>
            
       
        
    </div>
    
    <?php include ( '../components/footer.php' ) ; ?>

</body>
    
<?php include ( '../common/common-body.php' ) ; ?>    
</html>