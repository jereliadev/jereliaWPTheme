<?php
$hero_general_image = get_theme_mod( 'jerelia_hero_general_image', esc_url( get_template_directory_uri() . '/layouts/images/front-page-header.jpg' ) );
$hero_title = get_theme_mod( 'jerelia_hero_general_title', __( 'Лидер Jerelia', 'jerelia' ) );
$hero_fade = get_theme_mod( 'jerelia_hero_general_fade', 1 );
?>
<!DOCTYPE html>
<html class="no-js">
<head>
<title><?php echo wp_get_document_title(); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->
<header id="header" class='bloc-fill-screen <?php  if($hero_fade == 1 ): echo "fade-right"; endif; ?>' style="background: url('<?php echo esc_url( $hero_general_image ); ?>')">
<nav class="navbar navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php echo "Майстерня бізнесу " . $hero_title; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-right',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<?php get_template_part( 'sections/front-page', 'hero' ); ?>
</header>
