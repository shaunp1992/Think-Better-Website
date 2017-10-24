<div class="footer-container page">
    <div class="footer-content nav-footer-content">
        <div class="footer-contact-section footer-section">
            <div class="footer-section-title">Contact Us:</div>
            <?php perch_content_custom('Contact Details', array(
                                    'page'=>'/contact.php',
                                    'template' => '_footer_contact_details.html',
                        )); 
                     ?>
        </div>
        <div class="footer-socials-section footer-section">
            <div class="footer-section-title">Follow Us:</div>
            <div class="footer-social-icons-container">
                <a class="footer-social-item" href="https://www.facebook.com/bevthinkbetter/" target="_blank">
                    <img class="footer-social-item-background" src="/assets/img/social-background.svg">
                    <img class="footer-social-icon" src="/assets/img/facebook-icon.svg">
                </a>
                
                <a class="footer-social-item" href="https://www.linkedin.com/in/beverley-webster-b8024b1a/" target="_blank">
                    <img class="footer-social-item-background" src="/assets/img/social-background.svg">
                    <img class="footer-social-icon" src="/assets/img/linkedin-icon.svg">
                </a>
            </div>
        </div>
        <div class="footer-copyright-section footer-section">
            <div class="footer-section-item">© 2017 ThinkBetter.ie</div>
        </div>
    </div>
</div>