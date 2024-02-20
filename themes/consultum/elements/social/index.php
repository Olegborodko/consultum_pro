<?php

function el_social()
{
  $img_src = get_template_directory_uri() . "/assets/img/";
  ?>
  <div class="el-social">
    <a href=""><img loading="lazy" src="<?= $img_src ?>/linked.png" class="img" /></a>
    <a href=""><img loading="lazy" src="<?= $img_src ?>/fb.png" class="img" /></a>
    <a href=""><img loading="lazy" src="<?= $img_src ?>/inst.png" class="img" /></a>
  </div>
  <?php
}

?>