<?php
/*

  Template Name: Products
 */
?><?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="twelve columns product-headline">
                <h1 class="xl"><?php the_field('page_heading'); ?></h1>
            </div>
        </div>
        <div class="row" id="main-content-row">
            <div class="four columns product-left">
                <?
                if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('full');
                }

                // only show this heading for products pages. saves time by allowing the same heading for all product pages
                if (strpos($_SERVER['REDIRECT_URL'], 'genuine-hutch') === false) {
                    echo '<h3>Related Media</h3>';
                }
                echo get_field('downloads');
                ?>
            </div>
            <div class="eight columns">
                <div class="product-right">
                    <?php the_content(); ?>

                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>


<?
/*  pull in series 10 features for that page */

if (strpos($_SERVER['REDIRECT_URL'], '/series-10-slider/') !== false) {
    get_sidebar('series10');
};
?>
<?php get_footer(); ?>