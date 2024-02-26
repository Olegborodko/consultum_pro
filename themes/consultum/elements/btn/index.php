<?php
function el_btn($link = "#", $text = "")
{
  ?>
  <a class="el-btn" href="<?= $link ?>">
    <?= $text ?>
  </a>
  <?php
}
?>