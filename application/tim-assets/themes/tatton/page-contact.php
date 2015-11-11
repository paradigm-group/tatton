<?php

/**
 * The template for displaying default pages
 *
 * @package WordPress
 * @subpackage Tatton
 */

get_header();
?>
<section>
    <div class="hero">
        <div class="hero__overlay"></div>
        <div class="hero__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 hero__text pt-lg pb-lg">
                        <h1 class="hero__title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class='container mt-lg mb-lg'>
        <div class='row'>
            <div class='col-sm-6'>
                <p>We are always happy to help. Please feel free to get in touch if you have any questions about anything you have seen on our website.</p>
                <hr class="hr--emphasise">
                <ul class="social social--contact mt-lg ">
                    <li><a href="tel:<?php the_field('contact_phone', 'option'); ?>" class="phone" title="Phone"><?php the_field('contact_phone', 'option'); ?></a></li>
                    <li><a href="mailto:<?php the_field('contact_email', 'option'); ?>" class="email" title="Email"><?php the_field('contact_email', 'option'); ?></a></li>
                </ul>
                <hr class="hr--emphasise mt-lg">
                <h4 class='mt-lg'>Address</h4>
                <p class='mt-md'><?php the_field('contact_address', 'option'); ?></p>
            </div>
            <div class='col-sm-6'>
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();