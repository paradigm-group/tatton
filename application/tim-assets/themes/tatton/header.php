<?php

/**
 * The template for displaying content at the top of all pages
 *
 * @package WordPress
 * @subpackage Tatton
 */

if (! defined('ABSPATH')) exit; // Exit if accessed directly

$sector = getSector();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <link href='https://fonts.googleapis.com/css?family=Hind:400,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400italic' rel='stylesheet' type='text/css'>

    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title('&#124;', true, 'right'); bloginfo('name'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php bloginfo('pingback_url'); ?>" rel="pingback">
    
    <?php if ($sector == 'contact'): ?>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>
<body class="<?php echo $sector; ?>">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav class="navbar navbar-default navbar-nested navbar--primary navbar--fixed" id="top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#primary-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar__phone-mobile" href="tel: 020 7190 2959"><i class="fa fa-phone"></i></a>
                <a class="navbar-brand navbar--primary__brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo THEME_DIRECTORY; ?>/assets/img/logo.svg" alt="Tatton Investment Management" class="js-svg"></a>
            </div>

            <div class="collapse navbar-collapse" id="primary-nav">
                <ul class="nav navbar-nav navbar-right social social--navbar text-center hidden-xs">
                    <li><a href="#" class="twitter" title="Twitter"></a></li>
                    <li><a href="#" class="linkedin" title="Linkedin"></a></li>
                    <li><a href="#" class="youtube" title="youtube"></a></li>
                </ul>
                <p class="navbar-right navbar__phone hidden-xs"><a href="tel: 020 7190 2959"><span>t//</span>020 7190 2959</a></p>
                <?php if (is_front_page() || ($sector == 'contact')): ?>
                <ul class="nav navbar-nav navbar-right navbar--sections">
                    <li><a class='btn btn-default btn--investor' href="/investors">Investors</a></li>
                    <li><a class='btn btn-default btn--financial' href="/financial-advisors">Financial Advisors</a></li>
                </ul>
                <?php else: ?>
                    <?php if ($sector == 'financial-advisors'): ?>

                    <?php else: ?>
                    <?php do_action('display_navigation', 'investor_menu', 'nav navbar-nav navbar-right navbar--menu'); ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </nav>