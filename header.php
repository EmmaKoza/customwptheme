<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">

    <div class="logo-container">
      <?php $logoImage = get_field('logo'); ?>
      <img src="<?php echo $logoImage ?>" alt="" class="logoImage">

    </div>
    <div class="title-box">
      <h1>
        <?php bloginfo( 'name' ); ?>
      </h1>
    <h3 class="site-description"><?php bloginfo('description'); ?></h3>
    </div>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

