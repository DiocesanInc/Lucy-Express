<?php

/**
 * Template part for displaying staff member archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */


$staffImage = has_post_thumbnail() ? get_the_post_thumbnail_url() : getField("default_featured_image", "options", true, get_template_directory_uri() . "/assets/img/evoli_placeholder.png");

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content staff-member">
        <img class="staff-member-image" src="<?php echo $staffImage; ?>;" />
        <div class="staff-member-info">
            <div class="staff-member-title-wrapper">
                <?php the_title("<h6 class='staff-member-title'>", "</h6>"); ?>

                <div class="staff-member-position">
                    <?php the_field("position"); ?>
                </div>
            </div>

            <div class="staff-member-contact-wrapper">
                <?php if (get_field("email")) : ?>
                <a href="mailto:<?php the_field("email"); ?>" class="staff-member-email">
                    Email Me
                </a>
                <?php endif; ?>

                <a href="<?php the_permalink(); ?>" class="staff-member-bio">
                    Biography
                </a>
            </div>

        </div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->