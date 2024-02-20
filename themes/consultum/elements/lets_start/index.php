<?php

function el_lets_start()
{
  $img_src = get_template_directory_uri() . "/assets/img/";
  ?>
  <a href="" class="el-lets-start">
    <div class="div-2">Lets start</div>
    <img loading="lazy"
      src="<?=$img_src?>/row_right.svg"
      class="img" />
  </a>
  <?php
}
?>