<?php

/**
 * The template for displaying content at the bottom of all pages
 *
 * @package WordPress
 * @subpackage Tatton
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
		<footer class="footer">

			<div class="bg-light-grey hidden-xs">
				<div class='container'>
					<div class='row'>
						<div class='col-xs-12'>
							<h3 class="mt-lg">Useful Information</h3>
							<hr class="mt-lg">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<ul class="social social--footer">
								<li><a href="tel:<?php the_field('contact_phone', 'option'); ?>" class="phone" title="Phone"><?php the_field('contact_phone', 'option'); ?></a></li>
								<li><a href="mailto:<?php the_field('contact_email', 'option'); ?>" class="email" title="Email"><?php the_field('contact_email', 'option'); ?></a></li>
								<li><a href="<?php the_field('social_twitter', 'option'); ?>" class="twitter" title="Twitter">go to Twitter</a></li>
			                    <li><a href="<?php the_field('social_linkedin', 'option'); ?>" class="linkedin" title="Linkedin">go to Linkedin</a></li>
			                    <li><a href="<?php the_field('social_youtube', 'option'); ?>" class="youtube" title="youtube">go to our Youtube channel</a></li>
							</ul>
						</div>
						<div class="col-sm-6 footer__address">
							<p><?php the_field('contact_address', 'option'); ?></p>
							<p><a class="" href="<?php the_field('google_maps', 'option'); ?>">View on map</a></p>
						</div>
					</div>
					<div class='row mb-lg'>
						<div class='col-xs-12'>
							<hr>
						</div>
					</div>
				</div>
			</div>

			<div class="bg-grey pd-md hidden-xs">
				<div class='container'>
					<div class='row'>
						<div class='col-xs-12 footer__legals'>
							<p><?php the_field('legal', 'option'); ?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="bg-grey-dark pd-md">
				<div class='container'>
					<div class='row'>
						<div class='col-xs-12'>
							<?php do_action('display_navigation', 'footer_menu', 'footer__navigation'); ?>
						</div>
					</div>
				</div>
			</div>

		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
