<?php
$hero_title = get_theme_mod( 'jerelia_hero_general_title', __( 'Лидер Jerelia', 'jerelia' ) );
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
<header id="header">
<nav class="navbar navbar-static-top">
  <div class="container">
        <div class="row">
     
    <div class="navbar-header">
                          <button type="button" class="widget-handle mobile-toggle visible-sm visible-xs navbar-toggle" data-toggle="collapse" data-target=".navbar-menu-collapse">
                                <i class="fa fa-bars"></i>
                                <span class="sr-only">Toggle navigation</span>
                          </button>
          
<a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php echo "Майстерня бізнесу " . $hero_title; ?></a>

</div>
          

<!--     <div class="collapse navbar-collapse" id="navbar"> -->
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-right',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-menu-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
<!--     </div> --><!-- /.navbar-collapse -->


    </div>
  </div><!-- /.container -->
</nav>
</header>
