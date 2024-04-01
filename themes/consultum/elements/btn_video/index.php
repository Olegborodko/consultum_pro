<?php
function el_btn_video($link = "#", $text = "")
{
  $img_src = get_template_directory_uri() . "/assets/img/";
  ?>
  <a class="el-btn-video" href="<?= $link ?>">
    <?= $text ?> <img alt="play" src="<?= $img_src ?>/arrow.svg">
  </a>
  <?php
}
?>