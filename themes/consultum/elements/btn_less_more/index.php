<?php
function el_btn_less_more($text = "", $collapse_id = "")
{
  $img_src = get_template_directory_uri() . "/assets/img/";
  ?>
  <div data-slidetoggle="#<?= $collapse_id ?>" class="el-btn-less-more" role="button">
    <span>
      <?= $text ?>
    </span> <img alt="arrow" src="<?= $img_src ?>/arrow_top.svg">
  </div>
  <?php
}
?>

<script>
  // function btn_less_more_handle(el) {
  //   let collapse_id = el.getAttribute('data-collapse-id');

  //   if (collapse_id.length > 0) {
  //     let collapse_element = document.getElementById(collapse_id);
  //     collapse_element.classList.toggle('collapsible-seo-expend');

  //     // el.
  //   }
  // }

  document.addEventListener('DOMContentLoaded', function () {
    function slidetoggle() {
      document.querySelectorAll(this.getAttribute('data-slidetoggle')).forEach(el => {
        const ch = el.clientHeight,
          sh = el.scrollHeight,
          isCollapsed = !ch,
          noHeightSet = !el.style.height;

          console.log(isCollapsed);

        el.style.height = (isCollapsed || noHeightSet ? sh : 0) + "px";
        if (noHeightSet) return slidetoggle.call(this);
      });
    }

    document.querySelectorAll("[data-slidetoggle]").forEach(el => el.addEventListener('click', slidetoggle));
  });

</script>