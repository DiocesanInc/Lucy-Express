<?php

/**
 * Template part for displaying the news on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

$news = get_field("news_category");
$bgColor = get_field("news_background_color");

?>

<?php if ($news) : ?>
<div class="news-container" style="background: var(<?php echo $bgColor;?>)">
    <div class="news-slider slick-slider equal-height">
        <?php $posts = get_posts(array(
                "category" => $news,
                "numberposts" => 5
            ));

            foreach ($posts as $post) : 
                $img = has_post_thumbnail($post) ? get_the_post_thumbnail_url($post, "full") : getDefaultFeaturedImage(true);

            ?>

        <div class="post-wrapper">
            <img src="<?php echo $img; ?>" alt="<?php echo $post->post_title; ?>" />
            <div class="post-content-wrapper">
                <div class="post-content-top">
                    <h1 class="post-heading">
                        <?php echo $post->post_title; ?>
                    </h1>
        
                    <div class="post-excerpt">
                        <?php echo $post->post_excerpt !== "" ? $post->post_excerpt : wp_trim_words($post->post_content, 125); ?>
                    </div>
                </div>

                <a href="<?php echo get_the_permalink($post->ID);?>" class="the-button" title="View all Events">
                    Read More
                </a>
            </div>

        </div>
        <?php endforeach;
            wp_reset_postdata();
            ?>
    </div>
    <div class="button-wrapper">
        <a class="the-button" href="<?php echo esc_url(get_category_link($news));?>" title="All News">All News</a>
    </div>
</div>
<?php endif; ?>