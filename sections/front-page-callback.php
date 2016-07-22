<?php
/**
 *	The template for displaying the callback section in front page.
 *
 *	@package WordPress
 *	@subpackage Jerelia
 */
?>
<?php
$callback_image = get_theme_mod( 'jerelia_callback_general_image', esc_url( get_template_directory_uri() . '/layouts/images/callback-image.jpg' ) );
$hero_title = get_theme_mod( 'jerelia_hero_general_title', __( 'Лидер Jerelia', 'jerelia' ) );
$callback_entry = get_theme_mod( 'jerelia_callback_general_entry', __( 'Є речі які я не розповідаю на сайті, такі собі секрети мого бізнесу. Підписуйся, щоб дізнатісь більше!', 'jerelia' ) );
?>
<section id="callback" class="callback" style="background-image: url('<?php echo esc_url( $callback_image ); ?>')">
<div class="container">
		<div class="row">
		<div class="col-md-6 col-sm-6 mb-xs-24 pull-left">
						<?php  echo '<img src="'. get_template_directory_uri () .'/layouts/images/mb_logo.png" class="img-responsive mb16" alt="Майстерня бізнесу">' ?> 
						<h2 class="mb64"><mark><?php if( $hero_title ): echo sanitize_html( $hero_title ); endif; ?></mark></h2>
						<p class="mb32"><?php if( $callback_entry ): echo sanitize_html( $callback_entry ); endif; ?></p>
						
		</div><!-- /. col-md-6 col-sm-6 mb-xs-24 -->
		</div><!-- /. row -->

<?php if(function_exists('call_mail')){
    call_mail();
} ?> 

		<div class="row">
				<form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post" novalidate="novalidate">
                    	<div class="col-sm-5"><input type="text" name="cf-name" value="<?php if(isset($_POST['cf-name']))  echo $_POST['cf-name'];?>" size="40" placeholder="Ім'я"></div>
                    	<div class="col-sm-5"><input type="email" name="cf-email" value="<?php if(isset($_POST['cf-email']))  echo $_POST['cf-email'];?>"  size="40" placeholder="E-mail"></div>
                    	<div class="col-sm-2"><input name="cf-submitted-c" type="submit" value="відправити" size="40"></div>
                    	</form>

		</div><!--/.row-->
	</div><!--/.container-->

</section>
	
