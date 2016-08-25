<?php
/**
 *	The template for displaying the jerelia section in front page.
 *
 *	@package WordPress
 *	@subpackage Jerelia
 */

?>

<?php
$leader_field_id = get_theme_mod( 'leader_field_id', __( '1111111' ) );
?>

<section id="company" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( get_template_directory_uri() . '/layouts/images/jerelia-company.jpg' );?>">
	<div class="container"">
										<div class="row">
											<div class="col-sm-12 text-center">
												<h1>Майстерня бізнесу з J&rsquo;erelia</h1>
												<h3>Вітаємо! Ти зробив правильне рішення:<br />будувати бізнес з нами.</h3>
											</div>
										</div>
										<div class="row text-center">
											<div class="col-sm-4">
												<img src="<?php echo esc_url( get_template_directory_uri() . '/layouts/images/light-bulb.svg' );?>" class="img-circle center-block fade-80" width="100" height="100" />
												<h4 class="mb0">
													Цікаво як?
												</h4>
												<p>
													Просто! У нас є перевірена на практиці система розвитку бізнесу.
												</p>
											</div>
											<div class="col-sm-4">
												<img src="<?php echo esc_url( get_template_directory_uri() . '/layouts/images/presentation.svg' );?>" class="img-circle center-block fade-80" width="100" height="100" />
												<h4 class="mb0">
													Стань частиною системи
												</h4>
												<p>
													Увімкнись сам і включити своїх партнерів, – <br />це гарантія швидкісного розвитку бізнесу.
												</p>
											</div>
											<div class="col-sm-4">
												<img src="<?php echo esc_url( get_template_directory_uri() . '/layouts/images/safebox.svg' );?>" class="img-circle center-block fade-80" width="100" height="100" />
												<h4 class="mb0">
													Наша мета
												</h4>
												<p class="m0">
													Ми не будемо розповідати тобі,<br />як заробити 2000, 3000, навіть 5000 грн.<br />Наша мета: показати тобі шлях і дати інструменти для досягнення доходів<h4>50 000 грн.</h4>
												</p>
											</div>
										</div>
										<div class="row text-center">
											<div class="col-sm-12">
												<img src="<?php echo esc_url( get_template_directory_uri() . '/layouts/images/success.svg' );?>" class="img-circle center-block fade-80" width="150" height="150" />
												<h3>
													Стань заможним у заможній країні!<br /> Готовий?
												</h3>
												<div>
													<a href="http://jerelia.com/uk-ua/account/register/<?php if( $leader_field_id ): echo sanitize_html( $leader_field_id ); endif; ?>" class="btn btn-white btn-xlg" >вперед!</a>
												</div>
											</div>
										</div>

	</div>
</section>
	
