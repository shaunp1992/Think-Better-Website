<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Think Better Blog</title>
    <?php include ( './common/common-head.php' ) ; ?>
</head>

<body>
    
    <?php include ( './components/navbar.php' ) ; ?>
    <?php perch_content('Header'); ?>
    <span id="page" class="anchor"></span>
    <div class="page">
        <div class="section">
             <div class="content">
                 <?php perch_content('Section Title'); ?>
                 <?php perch_blog_custom([
                        'template'   => 'post_in_list.html',
                        'count'      => 10,
                        'sort'       => 'postDateTime',
                        'sort-order' => 'DESC',
		          ]);?>
            </div>
        </div>
            
       
        
    </div>
    
    <?php include ( './components/footer.php' ) ; ?>

</body>
    
<?php include ( './common/common-body.php' ) ; ?>    
</html>