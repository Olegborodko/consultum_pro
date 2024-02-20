<?php
/**
 * The template for displaying the footer
 *
 * @package consultum
 */

$img_src = get_template_directory_uri() . "/assets/img/";
?>

<footer id="colophon" class="site-footer">
  <div class="top">
    <div class="custom-containder">
      <div class="row">
        <div class="col">
          <?php el_phone_block(); ?>
          <?php el_social(); ?>
        </div>
        <div class="col">
          <?php
          $args = array(
            'menu' => 'footer_1',
            'menu_class' => 'footer-menu',
            'depth' => 1,
            'container' => 'nav',
            'fallback_cb' => false
          );

          wp_nav_menu($args);
          ?>
        </div>
        <div class="col">
          <?php
          $args = array(
            'menu' => 'footer_2',
            'menu_class' => 'footer-menu',
            'depth' => 1,
            'container' => 'nav',
            'fallback_cb' => false
          );

          wp_nav_menu($args);
          ?>
        </div>
        <div class="col">
          <div class="industry-title">Industry</div>
          <?php
          $args = array(
            'menu' => 'footer_3',
            'menu_class' => 'footer-menu',
            'depth' => 1,
            'container' => 'nav',
            'fallback_cb' => false
          );

          wp_nav_menu($args);
          ?>
        </div>
        <div class="col">
          <?php
          $args = array(
            'menu' => 'footer_4',
            'menu_class' => 'footer-menu',
            'depth' => 1,
            'container' => 'nav',
            'fallback_cb' => false
          );

          wp_nav_menu($args);
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="center">
    <div class="custom-containder center-block">
      <?php el_consultum_logo(); ?>
      <div class="subscribe-block">
        <div class="title">Subscribe to news!</div>
        <a href="" class="subscribe-btn">Subscribe</a>
      </div>
    </div>
  </div>
  <div class="buttom">
    <span>Privacy</span> © 2024 ConsultumPro
  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>