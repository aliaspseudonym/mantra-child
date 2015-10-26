<?php
/**
 * Template Name: Custom Front Page
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package Cryout Creations
 * @subpackage mantra
 * @since mantra 0.5
 */

get_header(); ?>

		<section id="container" class="one-column">
			<div id="content" roles="main">
<span class="noshow">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title" id="noshow"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'mantra' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'mantra' ), '<span class="edit-link">', '</span>' ); ?>
	
					</div><!-- entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>
<?php endwhile; ?>
</span>
			
<section id="the-slideshow">
	<div id="cycler">
	<div class="cycle-slideshow" 
    data-cycle-fx=scrollHorz
	data-cycle-slides=">div"
    data-cycle-timeout=3000
    data-cycle-pager="#adv-custom-pager"
    data-cycle-pager-template=""
	data-cycle-pause-on-hover="true"
    >
	<div>
		<a class="link" href="<?php echo home_url('/'); ?>tom-jackson-interview/">
			<img src="<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/tomjacksonbanner.jpg"/>
		</a>
	</div>
	<div>
		<a class="link" href="<?php echo home_url('/'); ?>who-is-my-neighbour/">
			<img src="<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/whoismyneighborbanner.jpg"/>
		</a>
	</div>
	<div>
		<a class="link" href="<?php echo home_url('/'); ?>how-downs-syndrome-made-me-kind/">
			<img src="<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/downsyndromebanner.jpg"/>
		</a>
	</div>
	<div>
		<a class="link" href="<?php echo home_url('/'); ?>artful-activism-building-bridges-through-creativity/">
			<img src="<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/artfulactivismbanner.jpg"/>
		</a>
	</div>
		<div>
		<a class="link" href="<?php echo home_url('/'); ?>the-joy-of-spaces/">
			<img src="<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/joyofspacesbanner.jpg"/>
		</a>
	</div>
</div> <!-- cycle-slideshow -->
<ul>
	<div id=adv-custom-pager>
		<li><a href="#"><img src="<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/tomjacksonthumb.jpg"/></a></li>
		<li><a href="#"><img src="<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/whoismyneighborthumb.jpg"/></a></li>
		<li><a href="#"><img src="<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/downsyndromethumb.jpg"/></a></li>
		<li><a href="#"><img src='<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/artfulactivismthumb.jpg'/></a></li>
		<li><a href="#"><img src="<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/joyofspacesthumb.jpg"/></a></li>
	</div> <!-- adv-custom-pager -->
</ul>
</div> <!--cycler-->
</section> <!--the-slideshow-->


			</div><!-- #content -->
			

<!-- Begin MailChimp Signup Form -->

<div id="mc_embed_signup">
<form action="//kolbetimes.us12.list-manage.com/subscribe/post?u=18821a9059b1c479c0607e9b3&amp;id=e3bc9fa822" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>This is our last print issue!  Subscribe here to get future issues by email.</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_18821a9059b1c479c0607e9b3_e3bc9fa822" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
			
			
			<section id= "other-content">

<div id="grid" class="short-columns">
	<div class="row">
		<div>
			<div>
				<br class="no-mobile" />
				<h1>Book Reviews</h1>
				<a href="<?php echo home_url('/'); ?>Book-review/"><h2>Books that Changed My Life</h2></a>
				<p>Kolbe Times Editor Laura Locke shares a couple of books she found delightful and inspiring.</p>
				<p><a href="<?php echo home_url('/'); ?>category/written-word/book-reviews/">All Book Reviews</a></p>
			</div>
			<a href="<?php echo home_url('/'); ?>book-review/"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/books.jpg"/></a>
		</div>
		<div>
			<div>
				<br class="no-mobile" />
				<h1>Featured Artist</h1>
				<a href="<?php echo home_url('/'); ?>featured-artist-thomas-roach-stitched-textiles/"><h2>Thomas Roach</h2></a>
				<p>Meet Thomas Roach, who taught himself to sew at age six and has been creating beautiful things with cloth ever since.</p>
				<p><a href="<?php echo home_url('/'); ?>category/featured-artist/">All Featured Artists</a></p>
			</div>
			<a href="<?php echo home_url('/'); ?>featured-artist-thomas-roach-stitched-textiles/"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/05/featuredartistthumb.jpg"></a>
		</div>
		<div>
			<div>
				<br class="no-mobile" />
				<h1>Guest Columnists</h1>
				<a href="<?php echo home_url('/'); ?>jews-crucifixions-and-loving-the-difficult/"><h2>Loving the Difficult</h2></a>
				<p>Grad Student Amanda Achtman reflects on the difficulty of life and art.</p>
				<p><a href="<?php echo home_url('/'); ?>category/guest-columnists/">All Guest Columnists</a></p>
			</div>
			<a href="<?php echo home_url('/'); ?>djews-crucifixions-and-loving-the-difficult/"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/05/GuestColumnistThumb.jpg"/></a>
		</div>
	</div>
	<div class="row">
		<div>
			<div>
				<br class="no-mobile" />
				<h1>Poetry</h1>
				<a href="<?php echo home_url('/'); ?>poetry-there-should-be-a-word/"><h2>Valentine for Ernest Mann</h2></a>
				<p>A poem written by Susan Plett for Margaret Plett, who was the finest mother-in-law a person could ever ask for.</p>
				<p><a href="<?php echo home_url('/'); ?>category/written-word/poetry/">All Poetry</a></p>
			</div>
			<a href="<?php echo home_url('/'); ?>poetry-there-should-be-a-word/"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/05/poetry-thumb.jpg"/></a>
		</div>
		<div>
			<div>
				<br class="no-mobile" />
				<h1>Film Reviews</h1>
				<a href="<?php home_url('/'); ?>film-review-the-drop-box"><h2>The Drop Box</h2></a>
				<p>Bill Locke reviews a documentary about a pastor who goes to great lengths to take in orphans no-one else wants.</p>
				<p><a href="<?php echo home_url('/'); ?>category/film/film-reviews/">All Film Reviews</a></p>
			</div>
			<a href="<?php home_url('/'); ?>film-review-the-drop-box"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/05/FilmReviewsThumb.jpg"/></a>
		</div>
		<div>
			<div>
				<br class="no-mobile" />
				<h1>Editorials</h1>
				<a href="<?php echo home_url('/'); ?>musings-from-the-editors-desk-fall-2015"><h2>Musings from the Editor's Desk</h2></a>
				<p>This issue is all about connections, mysteries and hidden truths that lie underneath the literal level of meaning.</p>
				<p><a href="<?php echo home_url('/'); ?>category/editorials">All Editorials</a></p>
			</div>
			<a href="<?php echo home_url('/'); ?>musings-from-the-editors-desk-fall-2015"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/05/musing.jpg"/></a>
		</div>
	</div>
</div> <!-- grid -->

<div id="writers">
	<div class="writers-column-1">
		<div>
			<a href="<?php echo home_url('/'); ?>the-vikas-india-housing-project/"><h1>VIKAS Housing Project</h1>
			<img src="<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/vikasthumb.jpg" /></a>
			<p>Nearly 70% of India’s 1.1 billion–plus population still lives in villages in mud huts without electricity, clean water or sanitation. A Calgary couple decided to do change that reality for 12 families.</p>
		</div>
		<div>
			<a href="<?php echo home_url('/'); ?>photo-contest-results/"><h1>Photo Contest Results</h1>
			<img src="<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/contestthumb.jpg" /></a>
			<p>Take a look at the results of the photo contest from our 2015 Spring issue! </p>
		</div>
	</div> <!-- writers-column -->
	<div class="writers-column-2">
		<div>
			<a href="<?php echo home_url('/'); ?>poetry-autumn/"><h1>Poetry: Autumn</h1>
			<img src="<?php echo home_url('/'); ?>wp-content/themes/mantra-child/images/autumnthumb.jpg" /></a>
			<p>By Rainer Maria Rilke (1875-1926)  (translation by Robert Bly) </p>
		</div>
	</div> <!-- writers-column -->
</div> <!-- writers -->
		</section><!-- #container -->

<?php get_footer(); ?>
