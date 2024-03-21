<?php

function el_lets_start($title, $link)
{
  $img_src = get_template_directory_uri() . "/assets/img/";
  ?>
  <a href="<?=$link?>" class="el-lets-start">
    <div class="div-2"><?= $title ?></div>
    <img loading="lazy" alt="right arrow" src="<?=$img_src?>/row_right.svg" class="img" />
  </a>
  <?php
}
?>