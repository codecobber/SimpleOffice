
<!-- Footer Partial -->
<footer class="footer">
  <div class="row">
    <div class="small-12 medium-6 large-4 columns">
      <p class="logo"><?php get_site_name(); ?> <i class="fa fa-bookmark-o" aria-hidden="true"></i></p>
      <p>
        <ul class="footer-links"><?php get_navigation(return_page_slug()); ?></ul>
      </p>
      <p class="subheader">
        <?php get_component('footerblurb'); ?>
      </p>
    </div>
    <div class="small-12 medium-6 large-5 columns">
      <p class="about" id="footerContact">Contact us</p>
      <ul class="contact">
        <li><p><i class="fa fa-bookmark-o" aria-hidden="true"></i> 1595 Spring Street New Britain, CT 06051</p></li>
        <li><p><i class="fa fa-bookmark-o" aria-hidden="true"></i> +1-656-453-9966</p></li>
        <li><p><i class="fa fa-bookmark-o" aria-hidden="true"></i> contact@emperor.com</p></li>
      </ul>
    </div>
    <div class="small-12 medium-12 large-3 columns">
      <p class="about">Follow us</p>
      <p class="subheader">
        Aiming to provide good quality, easy to use responsive web site templates and themes, Code Cobber provides you with an ever growing selection of resources designed to save you time.
      </p>
      <ul class="inline-list social">
        <li><a class="blockSec" id="cblocks" href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
        <li><a class="blockSec" id="fblocks" href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
        <li><a class="blockSec" id="iblocks" href="#"><i class="fa fa-pinterest-p fa-lg" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>


        <div class="row footerTop">
          <div class="medium-12 columns">
            <div class="copyright"><?php get_site_name(); ?>
   &copy; <?php echo date('Y'); ?> . Design by <a href="http://www.codecobber.co.uk" target="_blank">Code Cobber</a> . <?php get_site_credits(); ?>
    </div>
          </div>
        </div>
      </footer>

<!-- Close footer partial -->



    <script src="<?php get_theme_url(); ?>/js/vendor/what-input.js"></script>
    <script src="<?php get_theme_url(); ?>/js/vendor/foundation.min.js"></script>
    <script src="<?php get_theme_url(); ?>/js/app.js"></script>
    <script src="<?php get_theme_url(); ?>/js/slidePush.js"></script>
    <script src="<?php get_theme_url(); ?>/js/jquery.backstretch.min.js"></script>
    <script id="scrollCheck" src="<?php get_theme_url(); ?>/js/scrollCheck.js"></script>


    


  </body>

</html>
