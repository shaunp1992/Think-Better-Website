<div class="form-container booking-form-container">
    <div class="form">
        <div class="form-title">Booking Form</div>
        
        <div id="booking-form-fields" class="form-fields-container form-content">
            
            <div class="form-input-container select-list-input-container">
                <select id="workshop-selection" class="form-select-list" required="true">
                  <option selected="selected" disabled value="">Pick a workshop</option>
                  <?php
                      perch_content_custom('Events', [
                        'page'=>'/think-better-workshops.php',
                        'template'=>'_booking-form-option.html',
                      ]);
                  ?>    
                        
                </select>
            </div>    
            
            <?php perch_content('Booking Forms'); ?>
            
        </div>
        
        <div id="booking-form-pay-success" class="form-content form-response-container">
            <div class="form-response-message">Thank you for your payment. We look forward to seeing you!</div>
            <div class="form-button-container">
                <div class="button button-purple reset-form-button">Reset Form</div>
            </div>
        </div>
        
        <div id="booking-form-perch-success" class="form-content form-response-container">
            <div class="form-response-message">Thank you for your booking. <br><br>Please don't forget we only accept cash on the day. We look forward to seeing you!</div>
            <div class="form-button-container">
                <div class="button button-purple reset-form-button">Reset Form</div>
            </div>
        </div>
        
<!--
        <div class="form-button-container">
            <div class="button button-purple">
                <div class="button-text button-text-white">Send</div>
            </div>
        </div>
-->
    </div>
    
    <div class="form-discount-container">
        <img class="form-discount-background" src="assets/img/social-background.svg">
        <div class="form-discount-text">10% discounts for groups of 4 +</div>
    </div>
    
    <div class="form-leaning-icon-container"> 
        <img src="assets/img/leaning-icon.svg">
    </div>    
</div>

