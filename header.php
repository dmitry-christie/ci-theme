<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Conceito_Intuitivo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php 
$fonturi = get_template_directory_uri() . '/assets/fonts/HLT.ttf';


?>
	<style type="text/css">
@font-face {
    font-family: "HLT";
    src: url(<?php echo $fonturi;?>) format("truetype");
}
 
.home-container {
	background: rgba(239, 233, 233, 0.5); 

}

.background-image {
background: url('<?php echo get_template_directory_uri() . '/assets/img/bg.png'; ?>');
background-size: cover;

}


</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'conceito-intuitivo' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="header-container">
			<div class="header-logo-container">
				<a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/Logo.png';   ?>"></a>
			</div>
			<div class="menu-container">
				<ul>
					<li><a href="#">Projectos de Arquitectura</a></li>
					<li><a href="#">Gestão & Fiscalização</a></li>
					<li><a href="#">Levantamentos</a></li>
					<li><a href="#">Consultadoria</a></li>
					<li><a href="#">Contactos</a></li>
				</ul>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
