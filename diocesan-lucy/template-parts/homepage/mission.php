<?php

/**
 * Template part for displaying the mission on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

$backgroundImage = get_field("mission_background_image")["url"];
$position = "center";
$header = get_field("mission_header");
$content = get_field("mission_content");
$overlay_color = get_field("mission_overlay_color");
$overlay_opacity = get_field("mission_overlay_opacity");
?>


<div class="mission-container <?php echo "$overlay_color $overlay_opacity"; ?>"
    style="background-image: url(<?php echo $backgroundImage; ?>)">
    <div class="mission-content-wrapper <?php echo $position; ?>">
        <?php if ($header) : ?>
        <h3 class="mission-header">
            <?php echo $header; ?>
        </h3>
        <?php endif; ?>
        <?php if ($content) : ?>
        <div class="mission-content">
            <?php echo $content; ?>
        </div>
        <?php endif; ?>
    </div>
</div>