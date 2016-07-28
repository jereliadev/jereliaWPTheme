<?php
/**
 *	The template for displaying the  header section in front page.
 *
 *	@package WordPress
 *	@subpackage Jerelia
 */
?>
<?php
$hero_title = get_theme_mod( 'jerelia_hero_general_title', __( 'Лидер Jerelia', 'jerelia' ) );
$hero_entry = get_theme_mod( 'jerelia_hero_general_entry', __( 'Обмежений фінансово? Розпочни власний бізнес в інтернеті та отримай свободу!', 'jerelia' ) );
?>
<div class="hero front-page align-transform">
	<div class="container">
		<div class="row">
					<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 text-center">
						<?php  echo '<img src="'. get_template_directory_uri () .'/layouts/images/mb_logo.png" class="img-responsive mb16" alt="Майстерня бізнесу">' ?> 
						<h2 class="mb64"><mark><?php if( $hero_title ): echo sanitize_html( $hero_title ); endif; ?></mark></h2>
						<p class="mb32"><?php if( $hero_entry ): echo sanitize_html( $hero_entry ); endif; ?></p>

<?php if(function_exists('hero_mail')){
    hero_mail();
} ?>
						<form data-parsley-validate action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post">
						<input type="text" name="cf-name" value="<?php if(isset($_POST['cf-name']))  echo $_POST['cf-name'];?>" size="40" placeholder="Ім'я" required="">
                    	<input type="email" name="cf-email" value="<?php if(isset($_POST['cf-email']))  echo $_POST['cf-email'];?>"  size="40" placeholder="E-mail" required="" data-parsley-trigger="change" data-parsley-type="email">
						<input type="submit" name="cf-submitted-h" value="відправити" size="40">
                    	</form>
					</div><!--/.col-sm-6-->
		</div><!--/.row-->
	</div><!--/.container-->
</div><!--/.hero.front-page-->