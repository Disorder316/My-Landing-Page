<?php

/* * ****************************************************************************
  Plugin Name: Miscellaneous Functions
  Description: Adds functions that would normally go on the functions.php page
  Author: Jeramie Hendricks
 * **************************************************************************** */

function menu_function($atts, $content = null) {
    extract(
            shortcode_atts(
                    array('name' => null,), $atts
            )
    );
    return wp_nav_menu(
                    array(
                        'menu' => $name,
                        'echo' => false
                    )
    );
}

add_shortcode('menu', 'menu_function');

/*
 * Creates the shortcode to add a form to any page
 *
 */

function insert_form($atts, $content) {

    extract(
            shortcode_atts(
                    array('type' => null, 'heading' => null), $atts
            )
    );

    ob_start();
    echo '<h3 class="red">' . $heading . '</h3>';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/my-outside-wp/Mailer/views/form-contact-us.php');
    $frm = ob_get_contents();
    ob_end_clean();

    return $frm;
}

add_shortcode('form_here', 'insert_form');


/*
 * Creates the shortcode to add a the rep list
 *
 */

function insert_rep_list($atts, $content) {

    extract(
            shortcode_atts(
                    array('type' => null, 'heading' => null), $atts
            )
    );

    ob_start();
    get_sidebar('sales-reps');
    $frm = ob_get_contents();
    ob_end_clean();

    return $frm;
}

add_shortcode('rep_list', 'insert_rep_list');

/*
 * Modify HTTP header to force IE to not use compatibility mode
 */
function add_header_xua($headers) {

    if (!is_admin()) {
        $headers['X-UA-Compatible'] = 'IE=edge,chrome=1';
    }

    return $headers;
}
add_filter('wp_headers', 'add_header_xua');

nocache_headers();


?>