<?php
/*
 * Template Name: Home
 * Description: _
 */
get_header();

$img_src = get_template_directory_uri() . "/assets/img/";
?>

<section class="banner">
  <div class="text">
    <?php el_lets_start() ?>
    Your reliable partner in writing a
    <span>business plan</span>
  </div>
  <div class="buttom">
    <div class="custom-containder buttom-block">
      <?php el_phone_block(); ?>
      <div class="google-r-block">
        <img src="<?= $img_src ?>/google.svg"><br>
        <span>Reviews</span><img class="stars" src="<?= $img_src ?>/stars.svg">
      </div>
      <div class="reviews-block">
        <img class="stars" src="<?= $img_src ?>/stars.svg"><br>
        <span>2,156 reviews</span>
      </div>
      <div class="trustpilot-block">
        <img src="<?= $img_src ?>/trust.svg"><br>
        <span>2,156 reviews</span>
      </div>
      <div class="excellent-block">
        <span>Excellent</span><br>
        <img src="<?= $img_src ?>/green_starts.svg">
      </div>
      <?php el_social(); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>