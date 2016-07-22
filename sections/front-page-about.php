<?php
/**
 *	The template for displaying the about section in front page.
 *
 *	@package WordPress
 *	@subpackage Jerelia
 */
?>
<?php
$about_image = get_theme_mod( 'jerelia_about_general_image', esc_url( get_template_directory_uri() . '/layouts/images/about-image.jpg' ) );
$about_title = get_theme_mod( 'jerelia_about_general_title', __( 'Давайте знайомитись', 'jerelia' ) );
$about_entry = get_theme_mod( 'jerelia_about_general_entry', __( 'Мене звати Олена Філатова. Я – Регіональний Директор, член Ради Інвесторів компанії J’erelia. Експерт в області маркетингу і побудови бізнеса, бізнес-тренер и коуч. Головна моя задача: створювати умови для розвитку бізнесу кожного українця, незалежно від фаху, професії чи освіти.', 'jerelia' ) );
$social_general_show = get_theme_mod( 'jerelia_social_general_show', 1 );
?>
<section id="about" class="bg-secondary">
<div class="container">
		<div class="row align-children">
		<div class="col-md-4 col-sm-4 mb-xs-24">
			<h3><?php if( $about_title ): echo sanitize_html( $about_title ); endif; ?></h3>
			<p class="mb32"><?php if( $about_entry ): echo sanitize_html( $about_entry ); endif; ?></p>
			<a class="btn btn-lg btn-filled" href="/about">Моя історія</a>
		</div><!-- /. col-md-4 col-sm-5 mb-xs-24 -->


		<?php  if( $social_general_show == 1 ) { ?>
            <div class="col-md-5 col-sm-5 mb-xs-24"><?php
            }
            else { ?>
                 <div class="col-md-7 col-md-offset-1 col-sm-6 col-sm-offset-1 text-center"><?php
            } ?>

			<img class="cast-shadow about-image" src="<?php if($about_image): echo esc_url( $about_image ); endif;?>">
		</div><!-- /. col col-sm-5 or col-sm-6 -->
 
 <!-- Get Social -->
 <?php  if( $social_general_show == 1 ): get_template_part( 'sections/front-page', 'social' ); endif; ?>
			


		</div><!--/.row-->
	</div><!--/.container-->
</section>
	
