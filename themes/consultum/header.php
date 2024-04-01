<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consultum
 */

require_once get_template_directory() . "/elements/consultum_logo/index.php";
require_once get_template_directory() . "/elements/social/index.php";
require_once get_template_directory() . "/elements/lets_start/index.php";
require_once get_template_directory() . "/elements/phone/index.php";
require_once get_template_directory() . "/elements/box_review/index.php";
require_once get_template_directory() . "/elements/box_industry/index.php";
require_once get_template_directory() . "/elements/btn/index.php";
require_once get_template_directory() . "/elements/testimonials_box/index.php";
require_once get_template_directory() . "/elements/box_why_select_us/index.php";
require_once get_template_directory() . "/elements/btn_video/index.php";

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
  <?php require_once "parts/menu.php"; ?>

	</header><!-- #masthead -->
