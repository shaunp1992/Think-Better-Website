<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/magnific-popup.min.js"></script>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    appId      : '{your-app-id}',
    xfbml      : true,
    version    : 'v2.5'
  });

  // Get Embedded Video Player API Instance
  var my_video_player;
  FB.Event.subscribe('xfbml.ready', function(msg) {
    if (msg.type === 'video') {
      my_video_player = msg.instance;
      my_video_player.unmute();
    }
  });
};

(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/en_US/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
</script>

<script src="/assets/js/main-min.js"></script> 