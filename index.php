<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Akira hiroki (based:Twenty_Sixteen)
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			


		<?php

				$args = array( 'post_type' => 'eventos', 'posts_per_page' => 3, 'orderby' => 'menu_order', 'order'   => 'ASC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();

				$key_name = get_post_custom_values($key = 'fecha');

					echo '<div class="event-box col-4">
							<div class="inner-event-box">
								<div class="pic-event">
								<img src="'; 
								
								bloginfo('template_directory');

					echo		'/images/circle-bkg-red.svg" class="bg-pic" />
								<div class="pic rounded-circle">';
									
									the_post_thumbnail();

					echo        '</div>
							</div>
							<h3>';
								
								the_title();

					echo	'</h3>
								<p class="date">';	
					echo $key_name[0];
								
					echo		'</p><p class="desc">';
									
									the_content();

					echo		'</p>
								<p class="link">Ver más > ww</p>
							</div>
						 </div>';

				
				endwhile;

			?>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>


			

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>