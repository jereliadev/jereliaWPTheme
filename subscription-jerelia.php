<?php
/**
 *	Template Name: Jerelia subscription
 *
 *	The template for dispalying Custom Page Template: About Jerelia.
 *
 *	@package WordPress
 *	@subpackage jerelia
 */
?>
<?php get_template_part('includes/header-no-hero'); ?>

<section id="about-jerelia" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( get_template_directory_uri() . '/layouts/images/jerelia-subscription.jpg' );?>">
<div class="container">
  <div class="row text-center">
	    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<h2>Дякуємо Вам за звернення</h2>
		<h4>Очікуйте відповіді найближчим часом</h4>

	    </div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.section -->

</section>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
      <div id="content" role="main">
<!-- Start loops -->
<?php if(have_posts()): while(have_posts()): the_post();?>
    <article class="m0" role="article" id="post_<?php the_ID()?>">
         <section class="pt48 pb0">
            <?php the_content(); ?>
        </section>
        <footer>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); endif; ?>

      </div><!-- /#content -->
    </div>
    
    
  </div><!-- /.row -->
</div><!-- /.container -->
<?php get_template_part('includes/footer'); ?>