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
          <div class="phone-block">
            <img loading="lazy" src="<?= $img_src ?>/phone.svg" class="img" alt="phone icon" />
            <div class="phone-text">(332) 877-9148</div>
          </div>
          <div class="social">
            <a href=""><img loading="lazy" src="<?= $img_src ?>/linked.png" class="img" /></a>
            <a href=""><img loading="lazy" src="<?= $img_src ?>/fb.png" class="img" /></a>
            <a href=""><img loading="lazy" src="<?= $img_src ?>/inst.png" class="img" /></a>
          </div>
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
      <div class="consultum-logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/lamp.svg" class="img"
          alt="logo" />
        <a href="<?= esc_url(home_url('/')); ?>" class="div-3">ConsultumPro</a>
      </div>
      <div class="subscribe-block">
        <div class="title">Subscribe to news!</div>
        <div class="subscribe-btn">Subscribe</div>
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