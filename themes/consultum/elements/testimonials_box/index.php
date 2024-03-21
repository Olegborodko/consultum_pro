<?php

function el_testimonials_box()
{
  $img_src = get_template_directory_uri() . "/assets/img/";
  ?>

  <div class="testimonials-box">
    <div class="div-2">
      <div class="div-3">
        <div class="div-4">R</div>
        <div class="div-5">
          <div class="div-6">Cody Fisher</div>
          <div class="div-7">02-02-2024</div>
        </div>
      </div>
      <img alt="google min" loading="lazy" src="<?= $img_src ?>/testim_google.svg" class="img" />
    </div>
    <img alt="stars" loading="lazy" src="<?= $img_src ?>/stars.svg" class="img-2" />
    <div class="div-8">
      Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
      consectetur, adipisci velit, sed qu
    </div>
    <a href="#" class="div-9">Show more</a>
  </div>
  <?php
}

?>