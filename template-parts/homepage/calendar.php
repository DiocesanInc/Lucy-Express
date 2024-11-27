<?php

/**
 * Template part for displaying the calendar on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

?>

<?php if (get_field("calendar")) : ?>
<div class="calendar-container limit-width">
    <?php if (get_field("calendar_heading")) : ?>
    <h3 class="calendar-heading">
        <?php the_field("calendar_heading"); ?>
    </h3>
    <?php endif; ?>
    <?php if (get_field("calendar_link")) : ?>
    <div class="view-all-link-wrapper">
        <a href="<?php echo get_field("calendar_link")["url"]; ?>">
            <?php echo get_field("calendar_link")["title"]; ?>
        </a>
    </div>
    <?php endif; ?>
    <div class="calendar-inner">
        <?php do_shortcode("calendar id='" . the_field("calendar") . "'"); ?>
    </div>
</div>
<?php endif; ?>