<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress_Starter_Kit
 */

?>

<?php wp_footer(); ?>

<!-- SIGN UP SECTION -->
<section id="signup">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2>Want to work together?</h2>
        <p class="subtitle">I'm currently accepting new projects and would love to hear about yours. Please take a few minutes to tell me about it.</p>
        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">GET STARTED</button>

      </div><!-- /col-->
    </div><!-- /row -->
  </div><!-- /container -->
</section><!-- /#signup -->

<!-- FOOTER -->
<!-- ==================================== -->
<footer>
  <div class="container">
    <div class="row">
      <div class="logo-container">
        <a href="/" class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/originals/cldigitaldesign3.png" alt="CL Digital Design"></a>

        <p class="copyright">&copy; 2017 Charles Loehle</p>

        <?php
          wp_nav_menu( array(
            'display_location'  => 'footer',
            'container'       => 'nav',
            'menu_class'      => 'list-unstyled list-inline'
          ) );
        ?>
      </div><!-- /.logo-container -->
    </div><!-- /row -->
  </div><!-- /container -->
</footer>

<!-- MODAL -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Contact Me</h4>
      </div><!-- /.modal-header -->

      <div class="modal-body">
        <p>Enter your name and email</p>
          <form class="form-inline" role="form">
            <div class="form-group">
              <label class="sr-only" for="subscribe-name">Name</label>
              <input type="text" class="form-control" id="subscribe-name" placeholder="Name*">
            </div><!-- /.form-group -->
            <div class="form-group">
              <label class="sr-only" for="subscribe-email">Email</label>
              <input type="text" class="form-control" id="subscribe-email" placeholder="Email*">
            </div><!-- /.form-group -->
            <div class="form-group">
              <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
            </div><!-- /.form-group -->
          </form>
        <input type="submit" class="btn btn-success" value="Get Started">
        <hr>
        <p>By providing your email you consent to receiving occasional promotional emails &amp; newsletters.
      </div><!-- /.modal-BODY -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- BOOTSTRAP CORE JAVASCRIPT placed at the end of the document so the pages load faster
=========================================================================== -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/dist/typed.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/dist/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/dist/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/dev/scripts.js"></script>

</body>
</html>
