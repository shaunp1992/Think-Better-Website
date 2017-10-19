<div class="form-container booking-form-container">
    <div class="form">
        <div class="form-title">Booking Form</div>
        
        <div id="booking-form-fields" class="form-fields-container form-content">
            
            <div class="form-input-container select-list-input-container">
                <select id="workshop-selection" class="form-select-list" required="true">
                  <option selected="selected" disabled value="">Pick a workshop</option>
                  <option value="full">Workshop Full Day - 17th October 2018</option>
                  <option value="half">Workshop Half Day - 18th October 2018</option>
                  <option value="full">Workshop Full Day - 20th October 2018</option>
                  <option value="pod">Workshop 1 hour - 21st October 2018</option>
                    
                  <?php
                      perch_content_custom('Events', [
                        'page'=>'/think-better-workshops.php',
                        'template'=>'_booking-form-option.html',
                      ]);
                  ?>    
                        
                </select>
            </div>    
            
            <div id="pay-button-full">                
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                
                    <input type="hidden" name="on1" value="Workshop Booked">
                    <input id="workshop-details-full" type="hidden" name="os1">
                    
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="U593LR2E4L34L">
                    <input type="hidden" name="on0" value="Price">
                    <div class="form-input-container select-list-input-container">
                        <select name="os0" class="form-select-list quantity-select" required="true">
                            <option selected="selected" disabled value="" >Number of people</option>
                            <option value="95">1 Person</option>
                            <option value="190">2 People</option>
                            <option value="285">3 People</option>
                            <option value="340">4 People (10% Off)</option>
                            <option value="425">5 People (10% Off)</option>
                            <option value="510">6 People (10% Off)</option>
                        </select>
                    </div>
                    
                    <div class="form-input-container">
                        <input type="hidden" name="on2" value="Name">
                        <input type="text" class="form-input" placeholder="Full Name" name="os2" required="true">
                    </div>
            
                    <div class="form-input-container">
                        <input type="hidden" name="on3" value="Email">
                        <input type="email" class="form-input" placeholder="Email" name="os3" required="true" autocomplete="email">
                    </div>
            
                    <div class="form-input-container">
                        <input type="hidden" name="on4" value="Phone">
                        <input type="text" class="form-input" placeholder="Phone" name="os4" required="true">
                    </div>

                    <div class="form-total">
                        <div class="total-text">Total: €</div>
                        <div class="total-amount">0</div>
                    </div>
                   
                    <div class="form-pay-when">
                        <div class="pay-when-text">*Pay now online</div>
                    </div>
                    
                    <div id="pay-submit-container" class="pay-button-container form-button-container">
                        <input type="hidden" name="currency_code" value="EUR">
                        <input id="pay-submit" type="image" src="assets/img/pay-button.svg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </div>
                    
                </form>

            </div>

            <div id="pay-button-half">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    
                    <input type="hidden" name="on1" value="Workshop Booked">
                    <input id="workshop-details-half" type="hidden" name="os1">
                    
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="PMT2SFAW8WYYS">
                    <input type="hidden" name="on0" value="Price">
                    <div class="form-input-container select-list-input-container">
                        <select name="os0" class="form-select-list quantity-select" required="true">
                            <option selected="selected" disabled value="" >Number of people</option>
                            <option value="45">1 Person</option>
                            <option value="90">2 People</option>
                            <option value="135">3 People</option>
                            <option value="160">4 People (10% Off)</option>
                            <option value="200">5 People (10% Off)</option>
                            <option value="240">6 People (10% Off)</option>
                            
                        </select>
                    </div>
                    
                    <div class="form-input-container">
                        <input type="hidden" name="on2" value="Name">
                        <input type="text" class="form-input" placeholder="Full Name" name="os2" required="true">
                    </div>
            
                    <div class="form-input-container">
                        <input type="hidden" name="on3" value="Email">
                        <input type="email" class="form-input" placeholder="Email" name="os3" required="true" autocomplete="email">
                    </div>
            
                    <div class="form-input-container">
                        <input type="hidden" name="on4" value="Phone">
                        <input type="text" class="form-input" placeholder="Phone" name="os4" required="true">
                    </div>
                    
                    <div class="form-total">
                        <div class="total-text">Total: €</div>
                        <div class="total-amount">0</div>
                    </div>
                    
                    <div class="form-pay-when">
                        <div class="pay-when-text">*Pay now online</div>
                    </div>
                    
                    <div id="pay-submit-container" class="pay-button-container form-button-container">
                        <input type="hidden" name="currency_code" value="EUR">
                        <input id="pay-submit" type="image" src="assets/img/pay-button.svg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </div>
                </form>
            </div>

            <div id="pay-button-pod">
                <perch:form id="booking" method="post" app="perch_forms">
                    <div class="form-fields-container">
                        
                        <div class="form-input-container select-list-input-container">
                            <perch:input type="select" id="price" required="true" label="Price" class="form-select-list quantity-select perch-form-people-select" options="1 Person|30, 2 People|60, 3 People|90, 4 People (10% Discount)|105, 5 People (10% Discount)|135, 6 People (10% Discount)|160"/>
                            <perch:error for="people" type="required">Select Number of People</perch:error>
                        </div>
                        
                        <div class="form-input-container">
                            <perch:input type="text" id="name" required="true" label="Name" class="form-input" placeholder="Full Name" />
                            <perch:error for="name" type="required">Please add your fullname</perch:error>
                        </div>

                        <div class="form-input-container">
                            <perch:input type="email" id="email" required="true" label="Email" class="form-input" placeholder="Email" />
                            <perch:error for="email" type="required">Please add your email address</perch:error>
                            <perch:error for="email" type="format">Please check your email address</perch:error>
                        </div>

                        <div class="form-input-container">
                            <perch:input type="text" id="phone" required="true" label="Phone" class="form-input" placeholder="Phone" />
                            <perch:error for="phone" type="required">Please add your phone numbeer</perch:error>
                        </div>

                    </div>

                    <div class="form-total">
                        <div class="total-text">Total: €</div>
                        <div class="total-amount">0</div>
                    </div>
                    
                    <div class="form-pay-when">
                        <div class="pay-when-text">*Pay on day (Cash please!)</div>
                    </div>
                    
                    <div class="form-button-container">
                        <perch:input type="submit" id="submit" class="button button-purple" value="Book" />
                    </div>
                </perch:form>
            </div>
            
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

