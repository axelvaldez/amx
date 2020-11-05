  <footer class="container py-5" role="contentinfo">
    <div class="row justify-content-center">
      <div class="col-12 col-md-5 footer-credits">
        <div class="main-footer-container">
          <p class="my-0">
            &copy; 2017-<?php echo date("Y"); ?> Axel Valdez.<br>
            Powered by Wordpress and coffee.<br>
            <a href="<?php bloginfo('url'); ?>/feed/">Subscribe via RSS</a>
          </p>
        </div>
      </div>
      <div class="col-12 col-md-5 footer-social">
        <p class="my-0"><a href="/privacy" class="muted" title="Privacy Policy">Privacy Policy</a></p>
        <?php include('inc/social.php'); ?>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>
</body>
</html>