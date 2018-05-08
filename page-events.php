<?php /* Template Name: Eventos */ ?>
 
<?php get_header(); ?>
 
<div id="primary">
    <main id="main"  role="main">

    	<div class="section three-sect clearfix" id="eventos">
			<img src="<?php bloginfo('template_directory'); ?>/images/bg-section-eventos.png" class="bkg-section" />
			<div class="content-sections">
       			<h2 class="big-title">Eventos y Seminarios</h2>
		       <div class="events-boxes row">

		        <?php

						$args = array( 'post_type' => 'eventos', 'posts_per_page' => 3, 'orderby' => 'menu_order', 'order'   => 'ASC' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();

						$key_date = get_post_custom_values($key = 'fecha');
						$key_Link = get_post_custom_values($key = 'link');
						$content = get_the_content();

							echo '<div class="event-box col-md-4">
									<div class="inner-event-box">
										<div class="pic-event">
										<img src="'; 
										
										bloginfo('template_directory');

							echo		'/images/circle-bkg-red.svg" class="bg-pic" />
										<div class="pic rounded-circle">';
											
											the_post_thumbnail();

							echo        '</div>
									</div>
									<div class="titleEvent"><h3>';
										
										the_title();

							echo	'</h3></div>
										<p class="date">';	
							echo 			$key_date[0];
										
							echo		'</p><p class="desc">';	
							echo           mb_strimwidth($content, 0, 100, '...');
							echo		'</p>
										<p class="link"><a href="';
							echo 			$key_Link[0];
							echo		'" target="_blank">Ver más ></a></p>
									</div>
								 </div>';

						
						endwhile;

				?>
				</div>
			</div>
		</div>		
 
    </main><!-- .site-main -->
 
    
 
</div><!-- .content-area -->
 
<?php get_footer(); ?>