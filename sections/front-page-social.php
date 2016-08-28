<?php
/**
 *	The template for displaying the social section in front page.
 *
 *	@package WordPress
 *	@subpackage Jerelia
 */
?>
<?php

$social_title = get_theme_mod( 'jerelia_social_general_title', __( 'Слідуй за мною', 'jerelia' ) );
$social_button_linkFB = get_theme_mod( 'jerelia_social_general_linkFB', __( 'Jerelia.Ukraine', 'jerelia' ) );
$social_button_linkVK = get_theme_mod( 'jerelia_social_general_linkVK', __( '89969471', 'jerelia' ) );
?>
<div class="col-md-3 col-md-3 col-sm-3 mb-xs-24" id="social">
<h4><?php if( $social_title ): echo sanitize_html( $social_title ); endif; ?></h4>

<?php if( $social_button_linkFB ){ ?>

<!-- Facebook Widget -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/<?php echo sanitize_html( $social_button_linkFB ); ?>" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/<?php echo sanitize_html( $social_button_linkFB ); ?>" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/<?php echo sanitize_html( $social_button_linkFB ); ?>">Джерелія/Jerelia</a></blockquote></div><?php
} ?>

<?php if( $social_button_linkVK ){ ?>
<!-- VK Widget -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
<div id="vk_groups" class="pt12"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "auto", height: "200", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, <?php echo sanitize_html( $social_button_linkVK ); ?>);
</script><?php
} ?>



