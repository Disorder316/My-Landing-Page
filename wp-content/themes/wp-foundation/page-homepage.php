<?php
/*

  Hutchens Industries
  -------------------------------------------
  Template Name: Home

 */
?>

<?php get_header(); ?>

<div id="home-intro-wrapper">
    <div class="row">
        <div id="home-intro-content">
            <div class="twelve columns">
                <div id="home-intro">
                    <h2>Your Source for Trailer Suspension Solutions.</h2>
                    <p>Trailer manufacturers and fleet owners who demand proven performance and long-term
                        value from their investment choose to put their trust in us. We are Hutchens. <strong>Generations of support.</strong></p>

                    <div class="row">
                        <div class="six columns">
                            <a href="/product-lines/?ref=sl" class="a-no-bottom">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/hutchens/series10_small.png" />
                                <h3>Slider Systems</h3>
                            </a>
                        </div>
                        <div class="six columns">
                            <a href="/product-lines/?ref=sp" class="a-no-bottom">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/hutchens/9700_small.png" style="height: 161px" />
                            <h3>Spring Suspensions</h3>
                            </a>
                        </div>
                    </div>

                </div><!-- // Home Intro // -->
            </div><!-- // Main // -->
        </div><!-- // Content // -->
    </div><!-- // Row // -->

</div><!-- // Content Wrapper // -->

<!-- Body -->
<?php get_sidebar('home-body'); ?>  <!-- // Body // -->

<!-- // Top Wrapper // -->

<?php get_footer(); ?>