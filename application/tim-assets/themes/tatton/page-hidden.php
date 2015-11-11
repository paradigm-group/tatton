<?php
/**
 * Template Name: Hidden Page
 * Displays Hidden Page
 *
 * @package WordPress
 * @subpackage Tatton
 */

$sector = getSector();

get_header();

if (is_user_logged_in()):
?>



<?php else: ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 content">
			<h2>Login</h2>
			<p>To view this content you must be logged in.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-5 mb-lg">
			<form action="">
				<div class="form-group">
					<label for="">Username:</label>
					<input class="form-control" type="text">
					<label for="">Password:</label>
					<input class="form-control" type="password">
				</div>
				<button type="submit" class="btn btn-default btn--financial">Login</button>
			</form>
		</div>
	</div>
</div>

<?php
endif;
/*
while(have_posts())
{
    the_post();

    $args = array(
	    'post_type' => 'page',
	    'post_parent' => $post->ID
	);

	$the_query = new WP_Query($args);

	// The Loop
	if ( $the_query->have_posts() ) {
		echo '<ul>';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			echo '<li>' . get_the_title() . '</li>';
		}
		echo '</ul>';
	} else {
		// no posts found
	}
	wp_reset_postdata();
}*/

get_footer();