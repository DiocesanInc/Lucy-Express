<?php

/**
 * Template part for displaying the stats on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */


$bannerType = "mass-times";
?>

<div class="banner-container <?php echo "$bannerType-container"; ?>"
    style="background: var(<?php echo get_field("banner_background_color"); ?>);">

    <div class="banner-content-wrapper <?php echo $bannerType; ?>">
        <?php if (get_field("banner_heading")) : ?>
        <h1 class="banner-heading"><?php the_field("banner_heading"); ?>
        </h1>
        <?php endif; ?>

        <?php get_template_part("template-parts/homepage/$bannerType"); ?>

    </div>
</div>