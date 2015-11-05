<section>
	<div class='container'>
		<div class='row mt-lg'>
			<div class='col-sm-3'>
				
			</div>
			<div class='col-sm-9'>
				<?php 
					$cat_id = getCategory($sector);
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					$args = array(
					    'post_type' => 'post',
					    'cat' => $cat_id,
					    'post_status' => 'publish',
					    'posts_per_page' => 2,
					    'paged' => $paged
					);

					
					if (query_posts($args))
					{
						$output = '';

						if (have_posts())
						{
							while (have_posts())
							{
								the_post();

								$title = get_the_title();
								$excerpt = get_the_excerpt();
								$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
								$permalink = get_the_permalink();

								$output .= "
									<div class='news-snippet'>
										<img class='news-snippet__image hidden-xs mb-lg' src='{$image[0]}'>
										<div class='news-snippet__content'>
											<h5 class='news-snippet__title cl-{$sector}'>{$title}</h5>
											<p>{$excerpt}</p>
											<p><a class='more' href='{$permalink}'>Read More</a></p>
										</div>
										<hr class='cb mt-lg mb-lg'>
									</div>
								";

							}
						}

						wp_reset_postdata();

						echo $output;

					}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 text-center mb-lg">
				<?php 
					the_posts_pagination(array(
						'mid_size'  => 2,
						'prev_text' => __( '<', 'textdomain' ),
						'next_text' => __( '>', 'textdomain' ),
					));  
				?>
			</div>
		</div>
	</div>
</section>
<?php include('twitter.php'); ?>