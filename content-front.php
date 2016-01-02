<?php
/**
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package Cryout Creations
 * @subpackage Mantra
 */

if ( have_posts()  ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>
				<div class="entry-thumbnail">
				<?php the_post_thumbnail('medium'); ?>
			</div>
					<div class="entry-summary">
						<?php mantra_set_featured_thumb(); ?>
						<?php the_excerpt(); ?>
						</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php if ( comments_open() ) { comments_template( '', true );} else { ?>
														<p class="nocomments2"><?php _e( 'Comments are closed.', 'mantra' ); ?></p>


<?php } endwhile; ?>
