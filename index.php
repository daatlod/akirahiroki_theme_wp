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

	<div id="home" class="section one-sect clearfix">
		<main id="main"  role="main">

			<?php if ( is_home() &&  is_front_page() ) : ?>			

				<!--home section-->
				<div class="bkg-section-container">
					<img src="<?php bloginfo('template_directory'); ?>/images/bg-section-home.png" class="bkg-section home-section" />
				</div>
				<div class="home-content">
					<div class="logo-home">
						<img src="<?php bloginfo('template_directory'); ?>/images/logo-home.png" alt="Akira Hiroki Dojo" />
					</div>

					

					<ul class="home-menu clearfix">
						<li>
							<a href="/" home-link>
								<span class="bkg-circle">
									<img src="<?php bloginfo('template_directory'); ?>/images/icon-home.svg" />
								</span>
								<span class="text">Inicio</span>
								</a>
						</li>
						<li>
							<a href="/el-dojo" class="dojo-link">
								<span class="bkg-circle">
									<img src="<?php bloginfo('template_directory'); ?>/images/icon-dojo.svg" />
								</span>
								<span class="text">El Dojo</span></a>
						</li>
						<li>
							<a href="/eventos" class="eventos-link">
								<span class="bkg-circle">
									<img src="<?php bloginfo('template_directory'); ?>/images/icon-eventos.svg" />
								</span>
								<span class="text">Eventos</span></a>
						</li>
					</ul>
				</div>

				<!--home section-->
			<?php endif; ?>

			

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
