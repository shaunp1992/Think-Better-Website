$(document).ready(function(){

    $(".mobile-menu-button").click(function() {  //use a class, since your ID gets mangled
        $(".mobile-menu-container").toggleClass("open");      //add the class to the clicked element
    });
    
    $('.better-points-container').owlCarousel({
        loop:false,
        margin:10,
        nav:false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:1
            },
            768:{
                items:3
            }
        }
    });
    
    $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
        console.log(this.offset());
    if (this.hash !== "" && this.offset()) {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
        
    jQuery.fn.exists = function(){return this.length>0;};
    
   if ($(".services-container").exists()) {
    
        function mobile() {  
            var checkWidth = $(window).width();
            var demo = $(".services-container");

            if (checkWidth > 991 && typeof demo.data('owlCarousel') !== 'undefined') {
                demo.removeClass('owl-carousel');

                $('.services-container').each(function() {
                    var carid = "#" + ( this.id );
                    $(carid).data('owlCarousel').destroy(); 
                });    
                } else if (checkWidth < 991) {
                  demo.owlCarousel({
                     loop:false,
                    margin:10,
                    nav:false,
                    dots: true,
                    autoHeight: true,
                      responsive:{
                        0:{
                            items:1
                        },
                        767:{
                            items:1
                        },
                        768:{
                            items:1
                        }
                    }
                  });
                }
            }
            $(document).ready(mobile);
            $(window).resize(mobile);
    }
    
    $('.events-container').owlCarousel({
        loop:false,
        margin:10,
        nav:false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    
    $('#home-header-video').magnificPopup({
        type: 'inline',

    });

    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };
     
    var formContact = getUrlParameter('fc');
    
    $('#contact-form-fields').show();
    $('#contact-form-perch-success').hide();
    
    if(formContact === 'phs'){
        $('#contact-form-fields').hide();
        $('#contact-form-perch-success').show();
    }
    else{
        $('#contact-form-fields').show();
        $('#contact-form-perch-success').hide();
    }
    
    var formBooking = getUrlParameter('fb');
    
    $('#booking-form-fields').show();
    $('#booking-form-pay-success').hide();
    $('#booking-form-perch-success').hide();
    
    if(formBooking === 'pls'){
        $('#booking-form-fields').hide();
        $('#booking-form-pay-success').show();
        $('#booking-form-perch-success').hide();
    }
    else if(formBooking === 'phs'){
        $('#booking-form-fields').hide();
        $('#booking-form-pay-success').hide();
        $('#booking-form-perch-success').show();
    }
    else{
        $('#booking-form-fields').show();
        $('#booking-form-pay-success').hide();
        $('#booking-form-perch-success').hide();
    }
    
    $('#pay-button-full').show(); 
    $('#pay-button-half').hide();
    $('#pay-button-pod').hide(); 
    $(".perch-form-people-select").prepend('<option selected="selected" disabled value="">Number of people</option>');
   
     $('#workshop-selection').on('change', function() {
        $(".quantity-select").val($(".quantity-select option:first").val());    
        $(".total-amount").html("0");
        
       if( this.value === "full" ){
         $('#pay-button-full').show(); 
         $('#pay-button-half').hide(); 
         $('#pay-button-pod').hide(); 
         $("#workshop-details-full").val($("#workshop-selection option:selected").text()); 
       }
       else if( this.value === "half" ){
         $('#pay-button-full').hide(); 
         $('#pay-button-half').show(); 
         $('#pay-button-pod').hide(); 
         $("#workshop-details-half").val($("#workshop-selection option:selected").text()); 
       }
       else if( this.value === "pod" ){
         $('#pay-button-full').hide(); 
         $('#pay-button-half').hide(); 
         $('#pay-button-pod').show();
       }
       else{
                                   
       }  
   });
     
   $('.quantity-select').on('change', function() {
        $(".total-amount").html(this.value);
   });
    
   $('.reset-form-button').click(function() {
       var newurl = window.location.href.split('?')[0];
       window.location.href = newurl + window.location.hash;
   });

});

