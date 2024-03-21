<?php

function el_phone_block()
{
  $img_src = get_template_directory_uri() . "/assets/img/";
  ?>
  <div class="el-phone-block">
    <img loading="lazy" src="<?= $img_src ?>/phone.svg" class="img" alt="phone" />
    <div class="phone-text">(332) 877-9148</div>
  </div>
  <?php
}
?>