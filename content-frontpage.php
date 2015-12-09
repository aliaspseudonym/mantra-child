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
			<div class="entry-thumbnail">
				<?php the_post_thumbnail('medium'); ?>
			</div>
		<div class="entry-container">
	
		<header class="entry-header">	
				<hgroup>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'mantra' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</hgroup>
			<?php cryout_post_title_hook(); 
			?><?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php mantra_posted_on(); ?>
				<?php /* if ( comments_open() && ! post_password_required() ) :*/ ?>
			<div class="comments-link">
				<?php mantra_comments_on(); ?>
			</div>
			<?php /* endif; */ ?><?php 
			cryout_post_meta_hook();  ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>

		
		</header><!-- .entry-header -->
			<?php cryout_post_before_content_hook();  
			?>
						<div class="entry-thumbnail-mobile">
							<?php the_post_thumbnail('medium'); ?>
						</div>
						<div class="entry-summary">
						<?php the_excerpt(); ?>
						</div><!-- .entry-summary -->
		</div> <!-- .entry-container -->
		 <?php cryout_post_after_content_hook();  ?>
		<footer class="entry-meta2">
	<?php	$tag_list = get_the_tag_list( '', ', ' ); 
if ( $tag_list ) { ?>
	<span class="bl_tagg"><?php _e( 'Tagged','mantra'); print ' '.$tag_list; ?></span>
 				<?php } ?>
			<?php edit_post_link( __( 'Edit', 'mantra' ), '<span class="edit-link">', '</span>' ); ?><?php
			cryout_post_footer_hook();  ?>
		</footer><!-- #entry-meta -->

	</article><!-- #post-<?php the_ID(); ?> -->
	
	
<?php cryout_after_article_hook(); ?>