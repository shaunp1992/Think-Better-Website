$(document).ready(function(){function t(){var t=$(window).width(),o=$(".services-container");t>991&&void 0!==o.data("owlCarousel")?(o.removeClass("owl-carousel"),$(".services-container").each(function(){var t="#"+this.id;$(t).data("owlCarousel").destroy()})):t<991&&o.owlCarousel({loop:!1,margin:10,nav:!1,dots:!0,autoHeight:!0,responsive:{0:{items:1},767:{items:1},768:{items:1}}})}$(".mobile-menu-button").click(function(){$(".mobile-menu-container").toggleClass("open")}),$(".better-points-container").owlCarousel({loop:!1,margin:10,nav:!1,dots:!0,responsive:{0:{items:1},767:{items:1},768:{items:3}}}),jQuery.fn.exists=function(){return this.length>0},$(".services-container").exists()&&($(document).ready(t),$(window).resize(t)),$(".events-container").owlCarousel({loop:!1,margin:10,nav:!1,dots:!0,responsive:{0:{items:1},600:{items:1},1e3:{items:1}}}),$("#home-header-video").magnificPopup({type:"inline"}),$("#pay-submit").click(function(){$("#booking").submit()}),$("#pay-submit-container").click(function(){$("#booking").submit()}),$("#pay-button-full").show(),$("#pay-button-half").hide(),$("#pay-button-pod").hide(),$("#workshop-selection").on("change",function(){$(".quantity-select").val($(".quantity-select option:first").val()),$(".total-amount").html(""),"full"===this.value?($("#pay-button-full").show(),$("#pay-button-half").hide(),$("#pay-button-pod").hide(),$("#workshop-details-full").val($("#workshop-selection option:selected").text())):"half"===this.value?($("#pay-button-full").hide(),$("#pay-button-half").show(),$("#pay-button-pod").hide(),$("#workshop-details-half").val($("#workshop-selection option:selected").text())):"pod"===this.value&&($("#pay-button-full").hide(),$("#pay-button-half").hide(),$("#pay-button-pod").show())}),$(".quantity-select").on("change",function(){$(".total-amount").html(this.value)})});