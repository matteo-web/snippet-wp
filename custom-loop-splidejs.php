<?php 
if (is_front_page()) { ?>

	<div style="" id="pr-slider-articles">
		
				
				<div class="splide" data-splide='{"type":"fade", "autoplay":"true"}'>
					<div class="splide__track">
						<ul class="splide__list">
            <?php
             $custom_post = new WP_Query( array(
                    'post_type'			=> 'post',
                    'post_status' => 'publish',
                    'posts_per_page'=> 3,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                ));
                    ?>
							
							<?php if ($custom_post->have_posts()) : while($custom_post->have_posts()) : $custom_post->the_post(); ?>
	
						<li class="splide__slide"><img src="<?php echo the_post_thumbnail_url(); ?>"></li>
                   			
							<?php endwhile; endif; ?>

						</ul>
					</div>
				</div>
		
    
		
     </div> <!-- End pr-slider-articles -->

<?php wp_reset_postdata(); ?>

<?php } ?> <!-- End frontpage -->
