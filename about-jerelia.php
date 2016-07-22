<?php
/**
 *	Template Name: About Jerelia
 *
 *	The template for dispalying Custom Page Template: About Jerelia.
 *
 *	@package WordPress
 *	@subpackage jerelia
 */
?>
<?php $leader_id = get_theme_mod( 'leader_field_id', '1111111' ); ?>
<?php get_template_part('includes/header-no-hero'); ?>

<section id="about-jerelia" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( get_template_directory_uri() . '/layouts/images/jerelia-about.jpg' );?>">
<div class="container">
  <div class="row text-center">
	    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<?php  echo '<img src="'. get_template_directory_uri () .'/layouts/images/mb_logo.png" class="img-responsive mb16" alt="Майстерня бізнесу">' ?>
		<h4>Команда J’erelia робить все для того, щоб<br />
		бізнес з нами був <span>ефективним,</span><br />
		результат – <span>швидко досяжним,</span><br />
		співробітництво – <span>захоплюючим,</span><br />
		партнерство – <span>чесним.</span></h4>

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
	
	<div class="row text-center">
		<div class="col-sm-12">
			<h3 class="lightblue">
				Стань заможним у заможній країні!<br /> Готовий?
			</h3>
			<div>
				<a href="http://jerelia.com/uk-ua/account/register/<?php echo $leader_id; ?>" class="btn btn-xlg" >вперед!</a>
			</div>
		</div>
</div>
<?php get_template_part('includes/footer'); ?>