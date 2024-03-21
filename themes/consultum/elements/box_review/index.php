<?php
function el_box_review($title, $desc, $name, $time_text, $status = "Verified")
{
  $img_src = get_template_directory_uri() . "/assets/img/";
  ?>
  <div class="el-box-review">
    <div class="div-2">
      <img alt="green stars" loading="lazy" src="<?= $img_src ?>/green_stars.svg" class="img" />
      <div class="div-3">
        <img alt="verified" loading="lazy" src="<?= $img_src ?>/verified.webp" class="img-2" />
        <div class="div-4">
          <?= $status ?>
        </div>
      </div>
    </div>
    <div class="div-5">
      <?= $title ?>
    </div>
    <div class="div-6">
      <?= $desc ?>
    </div>
    <div class="div-7">
      <div class="div-8">
        <?= $name ?>
      </div>
      <div class="div-9">
        <?= $time_text ?>
      </div>
    </div>
  </div>

  <?php
}
?>