<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content front-page">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-page-image">
					<?php the_post_thumbnail(); ?>
				</div><!-- .entry-page-image -->
			<?php endif; ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
	<hr>
	<div id="subcontent" role="complementary">
		<div class="subcontent-item">
			<a href="/horarios">
				<h2>Jiu-Jitsu Infantil</h2>
				<img class="image-responsive" src="<?php bloginfo('template_directory'); ?>/img/home-pics/jj-infantil.jpg" alt="alt" />
			</a>
		</div>
		<div class="subcontent-item">
			<a href="/massoterapia">
				<h2>Massoterapia</h2>
				<img class="image-responsive" src="<?php bloginfo('template_directory'); ?>/img/home-pics/massoterapia.jpg" alt="alt" />
			</a>
		</div>
		<div class="subcontent-item">
			<a href="/horarios">
				<h2>Muay Thai</h2>
				<img class="image-responsive" src="<?php bloginfo('template_directory'); ?>/img/home-pics/muay-thai.jpg" alt="alt" />
			</a>
		</div>
	</div>
</div><!-- #primary -->

<?php get_footer();