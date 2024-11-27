<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evoli
 */

?>

<div class="footer-map">
    <iframe src="<?php the_field("google_maps", "options"); ?>">
</div>