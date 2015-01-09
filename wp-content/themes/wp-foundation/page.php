<?php
/*


 */
?><?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="twelve columns product-headline">
                <h1 class="xl"><?php the_field('page_heading'); ?></h1>
            </div>
        </div>
        <div class="row" id="main-content-row">
            <div class="nine columns">
                <?php
                if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('full');
                }
                ?>
                <?php the_content(); ?>
            </div>
            <div class="three columns"><br /></div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<? if (isset($_GET['ref'])): ?>

    <script src="<? echo get_template_directory_uri() ?>/javascripts/greensock/minified/plugins/CSSPlugin.min.js"></script>
    <script src="<? echo get_template_directory_uri() ?>/javascripts/greensock/minified/easing/EasePack.min.js"></script>
    <script src="<? echo get_template_directory_uri() ?>/javascripts/greensock/minified/TweenLite.min.js"></script>
    <script src="<? echo get_template_directory_uri() ?>/javascripts/greensock/minified/jquery.gsap.min.js"></script>

    <script>
        $(document).ready(function() {
            theRef = getParameterByName('ref');
            animTime = 2500;
            if (theRef !== false) {

                if (theRef == 'sl') {
                    $('h3').each(function(){
                        if ($(this).html().toLowerCase().indexOf('slider') >= 0) {
                            $(this).css('background-color', '#fdb813').animate({'background-color': '#fff'}, animTime, 'easeinout');
                        }
                    })
                } else if (theRef == 'sp') {
                    $('h3').each(function(){
                        if ($(this).html().toLowerCase().indexOf('suspension') >= 0) {
                            $(this).css('background-color', '#fdb813').animate({'background-color': '#fff'}, animTime, 'easeinout');
                        }
                    })
                }

            }
        });

        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
            return results == null ? false : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

    </script>

<? endif; ?>

<?php get_footer(); ?>