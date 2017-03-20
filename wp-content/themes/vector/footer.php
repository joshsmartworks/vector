<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vector
 */

?>

<?php wp_footer(); ?>

  <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Contact Us</h4>
                    <ul class="list-unstyled">
                        <li>Address: 18436 Hawthorne Blvd Ste 201Torrance, CA 90504</li>
                        <li>Phone: (310) 895-7130</li>
                        <li>Fax: (310) 698-3727</li>
                        <li>Sales: (866) 467-2164</li>
                        <li>Email: example@gmail.com</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Vector Outsourcing</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nam omnis saepe ullam. Reiciendis tenetur error, quibusdam. Quibusdam fuga ut sit, alias ipsam ab necessitatibus repellendus quo, accusantium deleniti, quis!</p>    
                </div>
            </div>
        </div>
        <div class="footer-social">
           <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5>Copyright &copy; 2017. All Rights Reserved</h5>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
           </div>
        </div>
    </footer>

        
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory');?>/assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/vendor/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/vendor/wow.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/vendor/jquery-easing.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/vendor/custom.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDx_CFFe9Qv0qPUTgVW_hG0RM74xApUz7I&callback=initMap">
    </script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
        
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                autoplay:true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                autoplayTimeout:5000,
                autoWidth:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:true,
                        autoWidth:true,
                    },
                    1000:{
                        items:3,
                        nav:true,
                    }
                }
            })
        });

    </script>

</body>
</html>
