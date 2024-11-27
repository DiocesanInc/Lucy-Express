<?php

/**
 * Partial for the page header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package celine
 */

if ($args["headerImg"]) {
    //Header Image is set in arguments
    $headerImg = $args["headerImg"];
} elseif (get_post_meta($post->ID, "_page_header_image_id")) {
    //Separate Header Image is set (Page Header Image)
    $headerImg = wp_get_attachment_image_url(get_post_meta($post->ID, "_page_header_image_id")[0], "large");
} elseif (has_post_thumbnail()) {
    //Post Thumbnail is set
    $headerImg = get_the_post_thumbnail_url(null, "large");
} else {
    //No Thumbnail is set -> Use Default Featured Image. If that isn't set use Fallback Featured Image
    $headerImg = getDefaultFeaturedImage(true) ? getDefaultFeaturedImage(true) : get_stylesheet_directory_uri() . "/assets/img/evoli_placeholder.png";
}

$headline = $args["headline"] ? "<h1 class='entry-title'>" . $args["headline"] . "</h1>" : "<h1 class='entry-title'>" . get_the_title() . "</h1>";
?>

<div class="entry-header page-header" style="background-image: url(<?php echo $headerImg; ?>)">
    <?php echo $headline; ?>
    <div class="overlay" style="opacity: <?php the_field("page_header_overlay", "options"); ?>"></div>
</div><!-- .entry-header -->
