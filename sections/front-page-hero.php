<?php
/**
 *	The template for displaying the  header section in front page.
 *
 *	@package WordPress
 *	@subpackage Jerelia
 */
?>
<?php
$hero_logo = get_theme_mod( 'jerelia_hero_general_logo', 1 );
$hero_title = get_theme_mod( 'jerelia_hero_general_title', __( 'Лидер Jerelia', 'jerelia' ) );
$hero_entry = get_theme_mod( 'jerelia_hero_general_entry', __( 'Обмежений фінансово? Розпочни власний бізнес в інтернеті та отримай свободу!', 'jerelia' ) );
$hero_call = get_theme_mod( 'jerelia_hero_general_call', __( 'Заголовок', 'jerelia' ) );
?>
<div class="hero front-page align-transform">
	<div class="container">
		<div class="row">
					<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 text-center">
					<?php  if( $hero_logo == 1 ) { ?>
					<img src="<?php  echo get_template_directory_uri () ?>/layouts/images/mb_logo.png" alt="Майстерня бізнесу">
					<h5 class="mb64"><mark class="hero-title"><?php if( $hero_title ): echo sanitize_html( $hero_title ); endif; ?></mark></h5><?php
					} ?>
						


						<h2 class="mb32"><mark class="hero-call"><?php if( $hero_call ): echo sanitize_html( $hero_call ); endif; ?></mark></h2>
						<p class="mb16"><?php if( $hero_entry ): echo sanitize_html( $hero_entry ); endif; ?></p>

<?php if(function_exists('hero_mail')){
    hero_mail();
} ?>
						<form data-parsley-validate action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post">
						<input type="text" name="cf-name" value="<?php if(isset($_POST['cf-name']))  echo $_POST['cf-name'];?>" size="40" placeholder="Ім'я" required="">
                    	<input type="email" name="cf-email" value="<?php if(isset($_POST['cf-email']))  echo $_POST['cf-email'];?>"  size="40" placeholder="E-mail" required="" data-parsley-trigger="change" data-parsley-type="email">
                    	<input type="tel" name="cf-tel" value="<?php if(isset($_POST['cf-tel']))  echo $_POST['cf-tel'];?>"  size="40" placeholder="Телефон" data-parsley-trigger="change" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$">
						<input type="submit" name="cf-submitted-h" value="відправити" size="40">
                    	</form>
					</div><!--/.col-sm-6-->
		</div><!--/.row-->
	</div><!--/.container-->
</div><!--/.hero.front-page-->