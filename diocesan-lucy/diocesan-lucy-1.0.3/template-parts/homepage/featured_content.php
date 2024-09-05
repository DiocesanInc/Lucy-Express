<?php

/**
 * Template part for displaying the featured content on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

?>

<?php if (have_rows("featured_content_items")) : ?>
<div class="featured-content-container">

    <?php while (have_rows("featured_content_items")) : the_row(); ?>

    <a href="<?php echo get_sub_field("link")["url"]; ?>" class="featured-content-item-wrapper">
    <div class="featured-content-icon"><?php the_sub_field("icon") ?></div>
        <div class="featured-content-heading-wrapper">
            <div class="featured-content-heading">
                <?php the_sub_field("item_name"); ?>
            </div>
            <div class="featured-content-text">
                <?php the_sub_field("content"); ?>
            </div>
        </div>
    </a>
    <?php endwhile; ?>

</div>
<?php endif; ?>