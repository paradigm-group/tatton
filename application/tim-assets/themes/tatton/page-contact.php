<?php

/**
 * The template for displaying default pages
 *
 * @package WordPress
 * @subpackage Photolink
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
    <div class='container mt-lg'>
        <div class='row'>
            <div class='col-sm-6'>
                <p>We are always happy to help. Please feel free to get in touch if you have any questions about anything you have seen on our website.</p>
                <hr class="hr--emphasise">
            </div>
            <div class='col-xs-6'>
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();