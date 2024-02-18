<?php
global $post;
$the_post_ID = $post->ID;
$menu_items = wp_get_nav_menu_items('header-menu');
$active = "";
$index = 0;
?>

<section class="menu">
  <div class="div-2">
    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/lamp.svg" class="img" alt="logo" />
    <a href="<?= esc_url(home_url('/')); ?>" class="div-3">ConsultumPro</a>
  </div>
  <div class="div-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <?php
          function echo_simple_menu_item($active, $menu_item)
          {
            echo '<li class="nav-item"><a class="nav-link ' . $active . '" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
          }

          echo '<ul class="navbar-nav">';

          foreach ($menu_items as $menu_item) {
            $active = "";
            if ($the_post_ID === $menu_item->object_id) {
              $active = "active";
            }

            // if parent has children
            $children = array_filter($menu_items, function ($child) use ($menu_item) {
              return $child->menu_item_parent == $menu_item->ID;
            });

            if (count($children) > 0) {
              $index = $index + 1;
              echo '<li class="nav-item dropdown">';
              echo '<a class="nav-link dropdown-toggle" href="' . $menu_item->url . '" id="dropd_m_' . $menu_item->ID . '" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">';
              echo $menu_item->title;
              echo '</a>';
              echo '<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropd_m_' . $menu_item->ID . '">';

              foreach ($children as $child) {
                $index = $index + 1;
                $active = "";
                if ($the_post_ID === $child->object_id) {
                  $active = "active";
                }

                echo '<li><a class="dropdown-item ' . $active . '" href="' . $child->url . '">' . $child->title . '</a></li>';
              }

              echo '</ul>';
              echo '</li>';
            } else {
              if (!$menu_item->menu_item_parent) {
                echo_simple_menu_item($active, $menu_item);
              }
            }
          }

          echo '</ul>';
          ?>

        </div>
      </div>
    </nav>
  </div>
  <a href="#" class="div-12">contact us</a>
</section>