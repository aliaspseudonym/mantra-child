<?php
/**
 * Frontpage content for kolbe times
 *
 * @package Cryout Creations
 * @subpackage Mantra
 * @since Mantra 1.0
 */

$options= mantra_get_theme_options();
foreach ($options as $key => $value) {
     ${"$key"} = $value ;
} 

?><?php cryout_before_article_hook(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="thumbholder">
			<div class="side-thumbnail">
				<?php the_post_thumbnail('medium'); ?>
			</div>
		
	
		<header class="entry-header">	
				<hgroup>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'mantra' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</hgroup>
			<?php cryout_post_title_hook(); 
			?>

		
		</header><!-- .entry-header -->
			<?php cryout_post_before_content_hook();  
			?>
		</div> <!-- .entry-container -->
		 <?php cryout_post_after_content_hook();  ?>
		

	</article><!-- #post-<?php the_ID(); ?> -->
	
	
<?php cryout_after_article_hook(); ?>