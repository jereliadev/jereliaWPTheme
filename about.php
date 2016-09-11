<?php
/**
 *	Template Name: About 
 *
 *	The template for dispalying Custom Page Template: About.
 *
 *	@package WordPress
 *	@subpackage jerelia
 */
?>
<?php get_template_part('includes/header-no-hero'); ?>

<section class="m0 pt0 pb24" id="about-me">
<div class="container">
<div id="content" class="row m0" role="main">
<!-- Start loops -->
<?php if(have_posts()): while(have_posts()): the_post();?>
<article class="m0 p0" role="article" id="post_<?php the_ID()?>">
		<section class="m0 p0">
			   <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
               <?php the_post_thumbnail('full', array( 'class' => 'img-responsive cast-shadow' )); ?>
               </div>
                 <div class="col-xs-12 col-sm-8 col-sm-offset-2 pt48">
            	<?php the_content()?>
				</div><!-- /#content -->  
        </section>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); endif; ?>
</article>    
  </div><!-- /.row -->
</div><!-- /.container -->
</section>
<?php get_template_part( 'sections/front-page', 'callback' ); ?>
<?php get_template_part('includes/footer'); ?>