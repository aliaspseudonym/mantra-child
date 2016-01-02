<?php
/**
 * The Header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Cryout Creations
 * @subpackage mantra
 * @since mantra 0.5
 */
 ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<?php  	cryout_seo_hook(); ?>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
 	cryout_header_hook();
	wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php cryout_body_hook(); ?>

<div id="wrapper" class="hfeed">

<?php cryout_wrapper_hook(); ?>

<header id="header">

		<div id="masthead">

			<div id="branding" role="banner" >

				<?php cryout_branding_hook();?>
				<div style="clear:both;"></div>

			</div><!-- #branding -->

			<nav id="access" class="jssafe" role="navigation">

				<?php cryout_access_hook();?>

			</nav><!-- #access -->
			
						<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup_header">
<form action="//kolbetimes.us12.list-manage.com/subscribe/post?u=18821a9059b1c479c0607e9b3&amp;id=e3bc9fa822" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="mc-field-group">
	<label for="mce-EMAIL">Join our mailing list!
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="email address">	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_18821a9059b1c479c0607e9b3_e3bc9fa822" tabindex="-1" value=""></div>

    </div>
</form>
</div>

<!--End mc_embed_signup-->

		</div><!-- #masthead -->

	<div style="clear:both;"> </div>

</header><!-- #header -->
<div id="main">
	<div  id="forbottom" >
		<?php cryout_forbottom_hook(); ?>

		<div style="clear:both;"> </div>
		
		<?php cryout_breadcrumbs_hook();?>
							