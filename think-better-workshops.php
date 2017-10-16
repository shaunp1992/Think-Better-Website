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
                <?php perch_content('Benefits Of The Workshop'); ?>
            </div>
        </div>
            
        <div class="section subtle-purple-section">
            <div class="content">
                <?php perch_content('The Day'); ?>
            </div>
        </div>
        
        <div class="section purple-section">
             <div class="content">
                <div class="section-title-container">
                    <div class="section-title section-title-white">Upcoming Events</div>
                    <div class="section-title-underline">
                        <img src="assets/img/title-underline-white.svg">
                    </div>
                </div>
                 
                 <div class="events-container owl-carousel owl-theme">
                        <?php include ( './components/event-card.php' ) ; ?>
                        <?php include ( './components/event-card.php' ) ; ?>
                        <?php include ( './components/event-card.php' ) ; ?>
                        <?php include ( './components/event-card.php' ) ; ?>
                 </div>
                
            </div>
        </div>
        
        <div class="section subtle-purple-section">
            <div class="content">
                <?php perch_content('Booking Form'); ?>
                <div class="form-container">
                <div class="form">
                    <div class="form-title">Booking Form</div>

                    <div class="form-fields-container">

                        <div class="form-input-container">
                            <input type="text" class="form-input" placeholder="Full Name">
                        </div>

                        <div class="form-input-container">
                            <input type="text" class="form-input" placeholder="Email">
                        </div>

                        <div class="form-input-container">
                            <input type="text" class="form-input" placeholder="Phone">
                        </div>

                        <div class="form-input-container">
                            <textarea rows="4" cols="50" class="form-input" placeholder="Message"></textarea>
                        </div>

                    </div>

                    <div class="form-button-container">
                        <div class="button button-purple">
                            <div class="button-text button-text-white">Send</div>
                        </div>
                    </div>
                </div>

                <div class="form-leaning-icon-container"> 
                    <img src="assets/img/leaning-icon.svg">
                </div>


            </div>
                
                
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="HJ82P6ZLC74MJ">
                <table>
                <tr><td><input type="hidden" name="on0" value="Quantity">Quantity</td></tr><tr><td><select name="os0">
                    <option value="1 Person">1 Person €90.00 EUR</option>
                    <option value="2 People">2 People €180.00 EUR</option>
                    <option value="4 People">4 People €324.00 EUR</option>
                </select> </td></tr>
                </table>
                <input type="hidden" name="currency_code" value="EUR">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
    


            <?php perch_shop_products(); ?>
            </div>
        </div>
        
        <div class="section subtle-purple-section">
            <div class="content">
                
                <?php perch_content('Testing Add To Cart')?>
                
                
                
                
                <?php perch_shop_products(); ?>
            </div>
        </div>
        
        
        
    </div>
    
    <?php include ( './components/footer.php' ) ; ?>

</body>
    
<?php include ( './common/common-body.php' ) ; ?>    
</html>
