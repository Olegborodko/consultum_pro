<?php
function el_btn($link = "#", $text = "", $class = "")
{
  ?>
  <a class="el-btn <?= $class ?>" href="<?= $link ?>">
    <?= $text ?>
  </a>
  <?php
}
?>