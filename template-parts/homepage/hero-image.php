<?php

/**
 * Partial for the hero section: Image(s).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package celine
 */

$slideClasses = get_field("parallax_scrolling") ? "hero-slide parallax" : "hero-slide";

?>
<?php if (have_rows("slider")) : ?>
<div class="hero">
    <div class="hero-slider">
        <?php while (have_rows("slider")) : the_row();
                $bgImg = get_sub_field("image");
            ?>

        <div class="<?php echo $slideClasses; ?>"
            style="background-image: url(<?php echo $bgImg["url"] ?>)">

            <?php
                    $size = "thumbnail";
                    $previewImg = wp_get_attachment_image_src($bgImg["ID"], "full"); ?>


            <?php get_template_part("template-parts/homepage/hero", "overlay"); ?>
            <?php get_template_part("template-parts/homepage/hero", "info"); ?>


        </div>
        <?php endwhile; ?>
    </div>
    <?php get_template_part("template-parts/homepage/hero", "mass-times"); ?>
    
</div>
<?php endif;