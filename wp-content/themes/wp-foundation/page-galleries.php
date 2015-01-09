<?php
/*

  Template Name: Galleries

 */
?><?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="twelve columns product-headline">
                <h1 class="xl"><?php the_field('page_heading'); ?></h1>
            </div>
        </div>
        <div class="row" id="main-content-row">
            <div class="eight columns">
                <div class="gallery-container">

                    <?
                    if (strpos($_SERVER['REDIRECT_URL'], 'mansfield-photo-tour') !== false) {
                        get_sidebar('gallery-mansfield');
                    } else if (strpos($_SERVER['REDIRECT_URL'], 'seymour-photo-tour') !== false) {
                        get_sidebar('gallery-seymour');
                    }
                    ?>


                </div>
            </div>
            <div class="four columns border-left">
                <?
                echo get_field('downloads');



                if (strpos($_SERVER['REDIRECT_URL'], 'about-us') !== false) {
                    ?>
                    <h3>Photo Tours</h3>
                    <p>
                        <a title="Mansfield Photo Tour" href="/about-us/mansfield-photo-tour/">Mansfield Manufacturing Facility</a><br />
                        <a title="Seymour Photo Tour" href="/about-us/seymour-photo-tour/">Seymour Plant</a></p>
                    <h3>News</h3>
                    <?
                    $args = array(
                        'sort_order' => 'ASC',
                        'sort_column' => 'post_date',
                        'hierarchical' => 1,
                        'exclude' => '',
                        'include' => '',
                        'meta_key' => '',
                        'meta_value' => '',
                        'authors' => '',
                        'child_of' => 0,
                        'parent' => 440,
                        'exclude_tree' => '',
                        'number' => '',
                        'offset' => 0,
                        'post_type' => 'page',
                        'post_status' => 'publish'
                    );
                    $pages = get_pages($args);


                    //echo '<ul class="side-menu-list">';
                    foreach (array_reverse($pages) as $page) {
                        echo "<a href=\"/about-us/news/$page->post_name/\">$page->post_title</a><br />";
                    }

                    //echo '</ul>';
                }
                ?>


            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>
<div id="myModal" class="reveal-modal"><a class="close-reveal-modal">&#215;</a></div>
<?php get_footer(); ?>