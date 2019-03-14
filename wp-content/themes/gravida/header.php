<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SKT Gravida
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W5JRH4C');</script>
<!-- End Google Tag Manager -->	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>

<body <?php body_class(''); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5JRH4C"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="wrapper">
    	<div class="header">
        		<div class="site-aligner">
                	<div class="logo">
					<?php gravida_the_custom_logo(); ?>
                    <div class="clear"></div>
                    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h2>
                    <p><?php bloginfo( 'description' ); ?></p>                          
   					</div><!-- logo -->
                    <div class="mobile_nav"><a href="#"><?php esc_html_e('Go To...','gravida'); ?></a></div>
                    <div class="site-nav">
					<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                    </div><!-- site-nav --><div class="clear"></div>
                </div><!-- site-aligner -->
        </div><!-- header -->