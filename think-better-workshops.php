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

                                <div class="form-input-container select-list-input-container">
                                    <select id="workshop-selection" class="form-select-list">
                                      <option selected="selected" disabled>Pick a workshop</option>
                                      <option value="full">Workshop Full Day - 17th October 2018</option>
                                      <option value="half">Workshop Half Day - 18th October 2018</option>
                                      <option value="full">Workshop Full Day - 20th October 2018</option>
                                      <option value="pod">Workshop 1 hour - 21st October 2018</option>
                                    </select>
                                </div>

                                <div id="pay-button-full">
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="HJ82P6ZLC74MJ">
                                        <input type="hidden" name="on0" value="Quantity">
                                        <div class="form-input-container select-list-input-container">
                                            <select name="os0" class="form-select-list quantity-select">
                                                <option selected="selected" disabled>Number of people</option>
                                                <option value="90">1 Person</option>
                                                <option value="180">2 People</option>
                                                <option value="270">3 People</option>
                                                <option value="324">4 People (10% Off)</option>
                                            </select>
                                        </div>

                                        <div class="form-total">
                                            <div class="total-text">Total: €</div>
                                            <div class="total-amount"></div>
                                        </div>

                                        <div class="pay-button-container">
                                            <input type="hidden" name="currency_code" value="EUR">
                                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                        </div>

                                    </form>

                                </div>


                                <div id="pay-button-half">
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="PMT2SFAW8WYYS">
                                        <input type="hidden" name="on0" value="Quantity">
                                        <div class="form-input-container select-list-input-container">
                                            <select name="os0" class="form-select-list quantity-select">
                                                <option selected="selected" disabled>Number of people</option>
                                                <option value="45">1 Person</option>
                                                <option value="90">2 People</option>
                                                <option value="135">3 People</option>
                                                <option value="162">4 People (10% Off)</option>
                                            </select>
                                        </div>
                                        <div class="form-total">
                                            <div class="total-text">Total: €</div>
                                            <div class="total-amount">0</div>
                                        </div>
                                        <input type="hidden" name="currency_code" value="EUR">
                                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>

                                <div id="pay-button-pod">
                                    <div>Pay on day Eur 30</div>
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

            </div>
        </div>
        

        <div class="section subtle-purple-section">
            <div class="content">
                <?php perch_content('Booking Form'); ?>
            </div>
        </div>
        
    </div>
    
    <?php include ( './components/footer.php' ) ; ?>

</body>
    
<?php include ( './common/common-body.php' ) ; ?>    
</html>
