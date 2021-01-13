<footer>

<div class="container">
<div class="row">
<div class="col-md-4">
    <img src="images/logo.png" width="100" height="60" class="logo-small img-responsive" alt="BINDRA & ASSOCIATES">
    <p>
       APL Construction is a leading Construction Company Serving in Patna Bihar and Pan India region since 2018, provides services with Quality, Reliable and at Affordable price...<a href="about-us" style="color:#bc791a;">read more</a>
    </p>
</div>
<div class="col-md-4">
    <div class="widget widget_recent_post">
        <h3>Important Link</h3>
       <ul class="fa-ul text-s">
                <li><i class="fa fa-angle-double-right"></i> <a href="index">Home</a></li>
                <li><i class=" fa fa-angle-double-right"></i> <a href="about-us">About Us</a></li>
                <li><i class=" fa fa-angle-double-right"></i> <a href="services">Our Services</a></li>
                <li><i class=" fa fa-angle-double-right"></i> <a href="#">Projects</a></li>
                <li><i class=" fa fa-angle-double-right"></i> <a href="contact-us">Contact Us</a></li>
                <li><i class=" fa fa-angle-double-right"></i> <a href="admin"><b>Admin Portal</b></a></li>
            </ul>
    </div>
</div>

<div class="col-md-4">
    <h3>Contact Us</h3>
    <div class="widget widget-address">
        <address>
        <p> <i class="fa fa-map-marker" aria-hidden="true"></i> KP-29A, Jitendra Bhawan,Kailash puri 90 Feet Road,Hanuman Nagar Kankarbagh,patna-800020</p>
        <p> <i class="fa fa-phone"></i> +91 85443 02574</p>
        <p> <i class="fa fa-mobile" aria-hidden="true"></i>0612-2350008</p>
        <p><a href="http://api.whatsapp.com/send?phone=918935989017" target="_blank" style="color: black;"><img src="images/whatsapp.png" >Whatsapp Us</a></p>
        <p> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:aplconstructionpatna@gmail.com">aplconstructionpatna@gmail.com</a></p>
        <p><a href="https://play.google.com/store/apps/details?id=in.indilabz.aplbroker" target="_blank"><img src="images/playstore.png" width="250" height="50"></a></p>
        </address>
    </div>
</div>
</div>
</div>

<div class="subfooter">
<div class="container">
<div class="row">
    <div class="col-md-6 new-idea">
        2020 || APL Construction || Patna Bihar</div>
    <div class="col-md-6 dmb-right-center">
        <div class="social-icons">
            <p style="margin-bottom:0px;"><span style="color:#fff;">Developed by I</span><a class="white" href="https://bunkit.in/" target="_blank" style="color:#ff6116 !important;">&nbsp;BUNK INFOTECH PVT LTD</a></p>
            
        </div>
    </div>
</div>
</div>
</div>

</footer>
<!-- footer close -->

<a href="#" id="back-to-top"></a>

</div>

<!-- Javascript Files
================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/easing.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/enquire.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/rsbuilwork.js"></script>
<script>
// Trigger CSS animations on scroll.
// Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/

// Looking for a version that also reverses the animation when
// elements scroll below the fold again?
// --> Check https://codepen.io/bramus/pen/vKpjNP

jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.length == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
        $animatables.each(function(i) {
       var $animatable = $(this);
            if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
            }
    });

    };
  
  // Hook doAnimations on scroll, and trigger a scroll
    $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});
</script>

</body>
</html> 