<?php
/*

  Hutchens Industries
  -------------------------------------------
  Footer

 */
?>
<div id="root_footer"></div>
<div id="footer-wrapper">
    <footer id="footer" class="footer">

        <? /*
          <div class="row">

          <div class="twelve columns">

          <h2>Get to know Hutchens even better.</h2>
          <!-- Social Icons -->
          <div class="row">
          <div class="four columns">
          <div class="social-icons-wrapper">
          <ul class="social-icons">
          <li>
          <a class="social-facebook" href="https://www.facebook.com/genuinehutch">
          <img src="<?php echo get_bloginfo('template_directory') . '/images/hutchens/facebook_icon.png' ?>" alt="Facebook" />
          </a>
          </li>
          <li>
          <a class="social-youtube" href="http://www.youtube.com/channel/UCnsUcQFSwaXCIykEGMoTHSQ">
          <img src="<?php echo get_bloginfo('template_directory') . '/images/hutchens/youtube_icon.png' ?>" alt="YouTube" />
          </a>
          </li>
          <li>
          <a class="social-linkedin" href="http://www.linkedin.com/company/2338386">
          <img src="<?php echo get_bloginfo('template_directory') . '/images/hutchens/linkedin_icon.png' ?>" alt="LinkedIn" />
          </a>
          </li>
          </ul>
          </div>
          </div>
          <!-- // Social Icons // -->
          <div class="eight columns">
          <div class="social-text-wrapper">
          <h3>Our Social Hang Outs</h3>
          <p>
          If you want to connect with many of our staff here at Hutchens, see what we're doing here, read what we're thinking lately, and want to share your ideas and so on with us... then check us out on Facebook, YouTube and LinkedIn.
          You're also always welcome to give us a call, send an email, or visit with us at an upcoming tradeshow or conference. Get to know Hutchens.
          </p>
          </div>
          </div>
          </div>
          </div>

          </div> */
        ?>
        <div id="footer-bottom-wrapper">
            <div class="row">

                <div class="twelve columns">
                    <a name="footer-bottom-wrapper" class="a-no-bottom" href="#" id="top-link">Top</a>
                    <div id="footer-nav" class="a-no-bottom">
                        <div class="row">
                            <a id="footer-bottom" name="footer-bottom" class="a-no-bottom">&nbsp;</a>
                            <nav id="links-left" class="three columns">
                                <ul class="heading">
                                    <li><a href="/resources/">Resources</a></li>
                                    <li><a href="/genuine-hutch/">Genuine Hutch</a></li>
									<li><a href="/resources/price-lists/">Pricing</a></li>
                                    <li><a href="/about-us/">About Us</a></li>
                                    <li><a href="/contact/">Contact Us</a></li>
                                    <li><a href="/">Home</a></li>
                                </ul>
                            </nav>
                            <div id="links-right" class="nine columns">
                                <div class="row">
                                    <div class="twelve columns heading">
                                        <h3>Product Lines</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="six columns">

                                        <div class="link-heading">Spring Ride Sliders</div>
                                        <?
                                        $sub_menu_spring_ride = array(
                                            'theme_location' => '',
                                            'menu' => 'Spring Ride Sliders',
                                            'container' => '',
                                            'container_class' => '',
                                            'container_id' => '',
                                            'menu_class' => '',
                                            'menu_id' => '',
                                            'echo' => true,
                                            'fallback_cb' => '',
                                            'before' => '',
                                            'after' => '',
                                            'link_before' => '',
                                            'link_after' => '',
                                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth' => 0,
                                            'walker' => ''
                                        );

                                        wp_nav_menu($sub_menu_spring_ride);
                                        ?>

                                        <div class="link-heading">Sliders for Air Rides</div>
                                        <?
                                        $sub_menu_air_ride = array(
                                            'theme_location' => '',
                                            'menu' => 'Sliders for Air Rides',
                                            'container' => '',
                                            'container_class' => '',
                                            'container_id' => '',
                                            'menu_class' => '',
                                            'menu_id' => '',
                                            'echo' => true,
                                            'fallback_cb' => '',
                                            'before' => '',
                                            'after' => '',
                                            'link_before' => '',
                                            'link_after' => '',
                                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth' => 0,
                                            'walker' => ''
                                        );

                                        wp_nav_menu($sub_menu_air_ride);
                                        ?>

                                        <div class="link-heading">Pin Release Systems</div>
                                        <?
                                        $sub_menu_pin_release = array(
                                            'theme_location' => '',
                                            'menu' => 'Pin Release Systems',
                                            'container' => '',
                                            'container_class' => '',
                                            'container_id' => '',
                                            'menu_class' => '',
                                            'menu_id' => '',
                                            'echo' => true,
                                            'fallback_cb' => '',
                                            'before' => '',
                                            'after' => '',
                                            'link_before' => '',
                                            'link_after' => '',
                                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth' => 0,
                                            'walker' => ''
                                        );

                                        wp_nav_menu($sub_menu_pin_release);
                                        ?>

                                    </div>
                                    <!-- right col -->
                                    <div class="six columns">

                                        <div class="link-heading">2 &amp; 4 Spring Suspensions</div>
                                        <?
                                        $sub_menu_2_and_4 = array(
                                            'theme_location' => '',
                                            'menu' => '2 and 4 Spring Suspensions',
                                            'container' => '',
                                            'container_class' => '',
                                            'container_id' => '',
                                            'menu_class' => '',
                                            'menu_id' => '',
                                            'echo' => true,
                                            'fallback_cb' => '',
                                            'before' => '',
                                            'after' => '',
                                            'link_before' => '',
                                            'link_after' => '',
                                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth' => 0,
                                            'walker' => ''
                                        );

                                        wp_nav_menu($sub_menu_2_and_4);
                                        ?>

                                        <div class="link-heading">Single Point Suspensions</div>
                                        <?
                                        $sub_menu_single_point = array(
                                            'theme_location' => '',
                                            'menu' => 'Single Point Suspensions',
                                            'container' => '',
                                            'container_class' => '',
                                            'container_id' => '',
                                            'menu_class' => '',
                                            'menu_id' => '',
                                            'echo' => true,
                                            'fallback_cb' => '',
                                            'before' => '',
                                            'after' => '',
                                            'link_before' => '',
                                            'link_after' => '',
                                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth' => 0,
                                            'walker' => ''
                                        );

                                        wp_nav_menu($sub_menu_single_point);
                                        ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Footer Nav // -->


                    <div id="footer-copyright">
                        <div class="row">
                            <nav class="three columns clearfix">


                                <p>Last updated
                                    <?
                                    ob_start();
                                    //the_field('date_modified');

                                    the_modified_date();
                                    $the_date = ob_get_contents();
                                    ob_end_clean();
                                    $date = new DateTime($the_date);
                                    echo $date->format('F d, Y');
                                    ?>
                                </p>
                            </nav>

                            <div class="attribution nine columns">
                                <ul>
                                    <li>&copy; <?php echo date('Y'); ?> Hutchens Industries. All Rights Reserved </li>
                                    <li><a href="/wp-content/uploads/2014/03/Hutchens-ISO-Certificate-2012.pdf">ISO Certificate</a></li>
                                    <li><a href="/resources/legal-and-policies/">Legal and Policies</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- // Footer Copyright // -->

                </div>

            </div>
            <div style="min-height: 600px;" class="show-for-medium-down"></div>
        </div>
        <!-- // Footer Bottom Wrapper // -->
    </footer>
</div>

<!--<script src="<? echo get_template_directory_uri(); ?>/fbox/lib/jquery-1.9.0.min.js"></script>-->
<script src="<? echo get_template_directory_uri(); ?>/javascripts/foundation/foundation-lib-ck.js"></script>
<script src="<? echo get_template_directory_uri(); ?>/javascripts/foundation/app.js"></script>
<script src="<? echo get_template_directory_uri(); ?>/javascripts/my-scripts.js"></script>
<script src="/my-outside-wp/Mailer/js/send-it.js"></script>

<? if (strpos(strtolower($_SERVER['REDIRECT_URL']), 'about-us') !== false): ?>
    <!-- Add jQuery library
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    -->

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="<? echo get_template_directory_uri(); ?>/fbox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <script type="text/javascript" src="<? echo get_template_directory_uri(); ?>/fbox/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <script type="text/javascript" src="<? echo get_template_directory_uri(); ?>/fbox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<? echo get_template_directory_uri(); ?>/fbox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="<? echo get_template_directory_uri(); ?>/fbox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <script>
        $(document).ready(function() {
            $(".gallery-f").fancybox({
                autoSize: false,
                height: '400px',
                width: '600px'
            });
        });

    </script>
<? endif; ?>
</body>
</html>