<?php
function el_consultum_logo()
{
  $img_src = get_template_directory_uri() . "/assets/img/";
  ?>
  <div class="el-consultum-logo">
    <img loading="lazy" src="<?= $img_src ?>/lamp.svg" class="img" alt="logo" />
    <a href="<?= esc_url(home_url('/')); ?>" class="div-3">ConsultumPro</a>
  </div>
  <?php
}

?>