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

while(have_posts())
{
    the_post();

    // check for acf flexible content
    if (have_rows('main_modules')) 
    {
        while(have_rows('main_modules'))
        {
            the_row();

            // test for layout types and include relevant template
            switch (get_row_layout())
            {
                case 'hero_large':
                    include('partials/hero-large.php');
                    break;

                case 'hero':
                    include('partials/hero.php');
                    break;

                case 'excerpt':
                    include('partials/excerpt.php');
                    break;

                case 'page_content':
                    include('partials/content.php');
                    break;

                case 'services':
                    include('partials/services.php');
                    break;

                case 'our_people':
                    include('partials/people.php');
                    break;

                case 'portfolios':
                    include('partials/portfolios.php');
                    break;

                case 'template':
                    $template = get_sub_field('template_block');
                    include("partials/{$template}.php");
                    break;
            }
        }
    }
} 

else: 
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 content mt-lg">
			<h2>Login</h2>
			<p>To view this content you must be logged in.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5 mb-lg">
			<?php do_action('custom_login'); ?>
		</div>
	</div>
</div>

<?php
endif;

get_footer();