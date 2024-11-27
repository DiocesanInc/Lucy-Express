<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evoli
 */

?>

<div class="footer-wrapper limit-width">
    <div class="wrapper">
        <?php get_template_part("template-parts/footers/footer", "address"); ?>
        <?php get_template_part("template-parts/footers/footer", "contact"); ?>
        <?php get_template_part("template-parts/footers/footer", "social-media"); ?>
    </div>
    <?php get_template_part("template-parts/footers/footer", "map"); ?>
</div>