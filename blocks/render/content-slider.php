<?php

/**
 * Block Name: Content Slider
 * This is the template that displays the Content Slider block.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package dpiChild
 */

// create id attribute for specific styling
$id = 'content-slider-' . $block['id'];
?>

<div class="content-slider-block" id="<?php echo $id; ?>">
    <h3 class="content-slider-heading"><?php the_field("slider_heading"); ?></h3>
    <?php if (have_rows("slider_slides")) : ?>
    <div class="content-slider-slides">
        <?php while (have_rows("slider_slides")) : the_row() ?>
        <div class="content-slider-slide">
            <div class="content-slider-slide-content">
                <?php the_sub_field("slide_content"); ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</div>

<style type="text/css">
:root {
    --arrow-x: 33%;
    --content-padding: 2rem 1rem 1rem;
}

.content-slider-block {
    margin-top: 4rem;
    padding: var(--content-padding);
    border: 1px solid var(--clr-quaternary);
    box-shadow: 0 3px 6px #00000029;
    position: relative;
}

.content-slider-block .content-slider-slide {
    margin-bottom: 4rem;
}

.content-slider-block .content-slider-heading {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    margin: 0;
    padding-inline: 3rem;
}

.content-slider-block .content-slider-slide-content {
    margin-bottom: .75rem;
}

.content-slider-block .slick-arrow {
    bottom: 0;
    top: auto;
    z-index: 1;
}

.content-slider-block .slick-prev {
    left: var(--arrow-x);
}

.content-slider-block .slick-next {
    right: var(--arrow-x);
}

@media screen and (min-width: 768px) {
    :root {
        --arrow-x: 43%;
        --content-padding: 2rem 1.5rem 1rem;
    }
}

@media screen and (min-width: 1200px) {
    :root {
        --arrow-x: 46%;
        --content-padding: 2rem 3rem;
    }
}
</style>