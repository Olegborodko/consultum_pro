<?php
function el_why_select_us_box($title, $desc, $img_src)
{
  ?>
  <div class="el-why-select-us-box">
    <div class="column">
      <img loading="lazy" srcset="<?= $img_src ?>" class="img" />
    </div>
    <div class="column-2">
      <div class="title">
        <?= $title ?>
      </div>
      <div class="desc">
        <?= $desc ?>
      </div>
    </div>
  </div>
  <?php
}
?>