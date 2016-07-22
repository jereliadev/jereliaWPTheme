<?php
$team_general_show = get_theme_mod( 'jerelia_team_general_show', 1 );
?>

<?php get_template_part('includes/header'); ?>
 
 <!-- Get Аbout + Social -->      
<?php get_template_part( 'sections/front-page', 'about' ); ?>
 
<?php get_template_part( 'sections/front-page', 'company' ); ?>
  <!-- Get Team --> 
<?php  if( $team_general_show == 1 ): get_template_part( 'sections/front-page', 'team' ); endif; ?>
 <!-- Get Callback -->      
<?php get_template_part( 'sections/front-page', 'callback' ); ?>

<?php get_template_part('includes/footer'); ?>
