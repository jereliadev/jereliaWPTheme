<?php
/**
 *	The template for displaying the team section in front page.
 *
 *	@package WordPress
 *	@subpackage Jerelia
 */
?>
<?php
$team_title = get_theme_mod( 'jerelia_team_general_title', __( '', 'jerelia' ) );
$person_1_image = get_theme_mod( 'jerelia_team_general_image_1', esc_url( get_template_directory_uri() . '/layouts/images/person1.jpg' ) );
$person_1_name = get_theme_mod( 'jerelia_team_general_name_1', __( 'Диана Морозова', 'jerelia' ) );
$person_1_entry = get_theme_mod( 'jerelia_team_general_entry_1', __( 'Олена Філатова – це дійсно лідер, вона не просто зібрала команду, а поєднала абсолютно різних людей, надихнула їх на подолання перепон та досягнення спільної мети.', 'jerelia' ) );
$person_2_image = get_theme_mod( 'jerelia_team_general_image_2', esc_url( get_template_directory_uri() . '/layouts/images/person2.jpg' ) );
$person_2_name = get_theme_mod( 'jerelia_team_general_name_2', __( 'Микола Журавель', 'jerelia' ) );
$person_2_entry = get_theme_mod( 'jerelia_team_general_entry_2', __( 'Олена Філатова унікальна, її я можу слухати годинами, і не лише тому, що вона красномовно говорить, а тому, що її промови дійсно змістовні, мудрі та актуальні.', 'jerelia' ) );
$person_3_image = get_theme_mod( 'jerelia_team_general_image_3', esc_url( get_template_directory_uri() . '/layouts/images/person3.jpg' ) );
$person_3_name = get_theme_mod( 'jerelia_team_general_name_3', __( 'Вероника Максимова', 'jerelia' ) );
$person_3_entry = get_theme_mod( 'jerelia_team_general_entry_3', __( 'Раніше я не зустрічала людину, котра б змогла декількома словами мотивувати, надихнути, підтримати в непростій ситуації та направити в необхідну колію. Тепер я знаю таку людину – це Олена Філатова.', 'jerelia' ) );
?>


<section id="team" class="bg-secondary">
<div class="container">
		<div class="row">
	    <div class="col-sm-12  text-center mb0">
	    <h3><?php if( $team_title ): echo sanitize_html( $team_title ); endif; ?></h3>
		</div>
		</div>

		<div class="row">
			<div id="person_1" class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1 text-center plr32">
				
				<img src="<?php if($person_1_image): echo esc_url( $person_1_image ); endif;?>" alt=" <?php if( $person_1_name ): echo sanitize_html( $person_1_name ); endif; ?>" title="<?php if( $person_1_name ): echo sanitize_html( $person_1_name ); endif; ?>">
					<!--/.person-image-->
				
					<h5><?php if( $person_1_name ): echo sanitize_html( $person_1_name ); endif; ?></h5>
					<p><?php if( $person_1_entry ): echo sanitize_html( $person_1_entry ); endif; ?></p>
				<!--/.person-content-->

			</div><!--/.col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1-->

			<div id="person_2" class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1 text-center plr32">
				
				<img src="<?php if($person_2_image): echo esc_url( $person_2_image ); endif;?>" alt=" <?php if( $person_2_name ): echo sanitize_html( $person_2_name ); endif; ?>" title="<?php if( $person_2_name ): echo sanitize_html( $person_2_name ); endif; ?>">
					<!--/.person-image-->
				
					<h5><?php if( $person_2_name ): echo sanitize_html( $person_2_name ); endif; ?></h5>
					<p><?php if( $person_2_entry ): echo sanitize_html( $person_2_entry ); endif; ?></p>
				<!--/.person-content-->

			</div><!--/.col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1-->

			<div id="person_3" class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1 text-center plr32">
				
				<img src="<?php if($person_3_image): echo esc_url( $person_3_image ); endif;?>" alt=" <?php if( $person_3_name ): echo sanitize_html( $person_3_name ); endif; ?>" title="<?php if( $person_3_name ): echo sanitize_html( $person_3_name ); endif; ?>">
					<!--/.person-image-->
				
					<h5><?php if( $person_3_name ): echo sanitize_html( $person_3_name ); endif; ?></h5>
					<p><?php if( $person_3_entry ): echo sanitize_html( $person_3_entry ); endif; ?></p>
				<!--/.person-content-->

			</div><!--/.col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1-->

						

		</div><!--/.row-->
	</div><!--/.container-->
</section>
	
