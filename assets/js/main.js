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
        
    jQuery.fn.exists = function(){return this.length>0;};
    
   if ($(".services-container").exists()) {
    
        function mobile() {  
            var checkWidth = $(window).width();
            var demo = $(".services-container");

            if (checkWidth > 991 && typeof demo.data('owlCarousel') != 'undefined') {
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

    var show='<?php echo $disp_div; ?>';
    
    $('#booking-form-fields').show();
    $('#booking-form-perch-success').hide();
    
    if(show==1){
        $('#booking-form-fields').hide();
        $('#booking-form-perch-success').show();
    }
    else if(show==2)
    {
        $('#div_search_rooms').show();
    }
    
    $('#pay-button-full').show(); 
    $('#pay-button-half').hide();
    $('#pay-button-pod').hide(); 
    $(".perch-form-people-select").prepend('<option selected="selected" disabled=>Number of people</option>');
   
     $('#workshop-selection').on('change', function() {
        $(".quantity-select").val($(".quantity-select option:first").val());    
        $(".total-amount").html("");
        
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

});

