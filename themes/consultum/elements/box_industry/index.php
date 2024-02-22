<?php
function el_industry_box($title, $desc, $link, $bgrn)
{
  $img_src = get_template_directory_uri() . "/assets/img/";
  ?>
  <a href="<?= $link ?>" class="el-industry-box" style="background-image: url(<?= $img_src ?>/<?= $bgrn ?>)">
    <div class="div-2">
      <div class="div-3">
        <?= $title ?>
      </div>
      <div class="img-2"></div>
    </div>
    <div class="div-4">
      <?= $desc ?>
    </div>
  </a>
  <?php
}
?>