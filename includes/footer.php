 <!-- Footer -->
  <footer>
    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-5">
            <h3 class="">Sign up for newsletter</h3>
          </div>
          <div class="col-md-5 col-sm-7">
            <form id="newsletter-validate-detail" method="post" action="#">
              <div class="newsletter-inner">
                <input class="newsletter-email" name='Email' placeholder='Enter Your Email'/>
                <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
              </div>
            </form>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="social">
              <ul class="inline-mode">
                <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
                <li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
                <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
          <div class="footer-logo"><a href="index.php"><img src="<?php  echo url; ?>images/logo.png" alt="fotter logo"></a> </div>
          <div class="footer-content">
            <div class="email"> <i class="fa fa-envelope"></i>
              <p>admin@gmail.com</p>
            </div>
            <div class="phone"> <i class="fa fa-phone"></i>
              <p>0725 002605</p>
            </div>
            <div class="address"> <i class="fa fa-map-marker"></i>
              <p>Kakamega - Kenya</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Information<a class="expander visible-xs" href="#TabBlock-1">+</a></h3>
            <div class="tabBlock" id="TabBlock-1">
              <ul class="list-links list-unstyled">

                <li><a href="">FAQs</a></li>
                <li><a href="#">Terms &amp; Condition</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
            <div class="tabBlock" id="TabBlock-4">
              <ul class="list-links list-unstyled">
                <li> <a href="account_page">Account</a> </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-coppyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2018 <a href="#"> Mutethia Isaiah </a>. All Rights Reserved. </div>
          <div class="col-sm-6 col-xs-12">
            <div class="payment">
              <ul>
                <li><a href="#"><img title="Visa" alt="Visa" src="images/visa.png"></a></li>
                <li><a href="#"><img title="Paypal" alt="Paypal" src="images/paypal.png"></a></li>
                <li><a href="#"><img title="Discover" alt="Discover" src="images/discover.png"></a></li>
                <li><a href="#"><img title="Master Card" alt="Master Card" src="images/master-card.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
  <!-- End Footer -->

</div>

<!-- mobile menu -->
<div id="jtv-mobile-menu" class="jtv-mobile-menu">
  <ul>
    <li class=""><a href="index.php">Home</a>
    </li>


    <li><a href="">Phones by Category</a>
      <ul>
           <?php
      $category=$connect->query("SELECT * FROM category");
      foreach($category as $list){
          ?>
        <li> <a href="mobile-category?category=<?php echo $list['type_name']; ?>"> <?php echo $list['type_name']; ?></a></li><br><br>
          <?php
      }
    ?>

      </ul>
    </li>
    <li><a href="account_page">Login</a></li>
    <li><a href="contact_us">Contact</a></li>
  </ul>
</div>

<!-- jquery js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery.validate.js"></script>
 <script type="text/javascript" src="js/additional-methods.js"></script>
 <script type="text/javascript" src="js/form-validator.js"></script>

<!-- bootstrap js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Mean Menu js -->
<script type="text/javascript" src="js/jquery.meanMenu.min.html"></script>

<!-- owl.carousel.min js -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<!-- bxslider js -->
<script type="text/javascript" src="js/jquery.bxslider.js"></script>

<!--jquery-ui.min js -->
<script type="text/javascript" src="js/jquery-ui.js"></script>

<!-- wow JS -->
<script type="text/javascript" src="js/wow.min.js"></script>

<!-- flexslider js -->
<script type="text/javascript" src="js/jquery.flexslider.js"></script>

<!-- mobile Menu JS -->
<script type="text/javascript" src="js/jtv-mobile-Menu.js"></script>
<!-- main js -->
<script type="text/javascript" src="js/main.js"></script>

<!-- countdown js -->
<script type="text/javascript" src="js/countdown.js"></script>

<!-- nivo slider js -->
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

<!--cloud-zoom js -->
<script type="text/javascript" src="js/cloud-zoom.js"></script>
<!-- revolution slider js -->
<script type="text/javascript" src="js/revolution-slider.js"></script>
<script type='text/javascript'>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_6').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 870,
                startheight: 450,
                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'off',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'off',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,

                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
</body>

</html>
