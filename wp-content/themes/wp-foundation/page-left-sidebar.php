<?php
/*

  Template Name: Left Side Bar
 */
  ?><?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="twelve columns product-headline">
        <h1 class="xl"><?php the_field('page_heading'); ?></h1>

        <?php
        ob_start();
        the_content();
        $the_content = ob_get_contents();
        ob_end_clean();
        ?>

    </div>
</div>
<div class="row" id="main-content-row">
    <div class="four columns product-left">
        <?
                if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('full');
                }


                // Include the video menu if we're in that section
                if (strpos(strtolower($_SERVER['REDIRECT_URL']), 'videos') !== false) {
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
                        'parent' => 154,
                        'exclude_tree' => '',
                        'number' => '',
                        'offset' => 0,
                        'post_type' => 'page',
                        'post_status' => 'publish'
                        );
                    $pages = get_pages($args);
                    echo '<p>';
                    foreach (array_reverse($pages) as $page) {
                        echo "<a href=\"/resources/videos/$page->post_name/\" class=\"video-link\">$page->post_title</a><br />";
                    }

                    echo '</p>';
                } else if (strpos(strtolower($_SERVER['REDIRECT_URL']), 'legal-and-policies') !== false) {
                    ?>
                    <br />

                    <p>
                        <a href="/resources/legal-and-policies/" class="big-link">Legal Notice</a><br />
                        <a href="/resources/legal-and-policies/privacy-policy/" class="big-link">Privacy Policy</a>
                        <br /><br />
                        <a href="/wp-content/uploads/2014/03/terms_conditions_supplier.pdf">Terms and Conditions - Supplier</a><br />
                        <a href="/wp-content/uploads/2014/03/terms_conditions_customer.pdf">Terms and Conditions - Customer</a><br />

                    </p>



                    <?
                } else if (strpos($_SERVER['REDIRECT_URL'], '/contact/') !== false) {
                    echo '<h3>Hutchens Industries</h3>
                    215 North Patterson Avenue<br />
                    Springfield, MO 65802<br />
                    800.654.8824 or 417.862.5012<br />';
                    echo the_field('downloads');
                    get_sidebar('sales-reps');
                    
                } else {                    
                    echo the_field('downloads');
                }
                ?>
            </div>
            <div class="eight columns">
                <div class="product-right">
                    <? echo $the_content; ?>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>