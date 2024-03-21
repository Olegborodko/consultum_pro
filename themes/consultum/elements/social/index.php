<?php

function el_social()
{
  $img_src = get_template_directory_uri() . "/assets/img/";
  ?>
  <div class="el-social">
    <a href=""><img alt="linkedin" loading="lazy" src="<?= $img_src ?>/linked.webp" class="img" /></a>
    <a href=""><img alt="facebook" loading="lazy" src="<?= $img_src ?>/fb.webp" class="img" /></a>
    <a href=""><img alt="instagram" loading="lazy" src="<?= $img_src ?>/inst.webp" class="img" /></a>
  </div>
  <?php
}

?>