<?php

/**
 * Template Name: Contact Us
 *
 * The template for displaying the Contact Us Template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package evoli
 */

get_header();
?>


<div class="content-area" id="primary">
    <main class="site-main" id="main">
        <?php get_template_part('template-parts/headers/page-header'); ?>
        <?php get_template_part('template-parts/content', 'contact'); ?>
    </main>
</div>

<?php get_footer();