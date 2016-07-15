<?php
/**
 * Created by PhpStorm.
 * User: Vitnere
 * Date: 15-Jul-16
 * Time: 2:06 PM
 */
?>

    <?php
    //Register Nav Walker class_alias

    require_once('wp_bootstrap_navwalker.php');

    //Theme Support
    function wpb_theme_setup()
    {
        add_theme_support('post-thumbnails');

        //nav Menus
        register_nav_menus(array(
            'primary'=> __('Primary Menu')
        ));
    }

    add_action('after_setup_theme','wpb_theme_setup');//to add something

    //Excerpt Length Control
    function set_excerpt_length()
    {
        return 40;//post length in words
    }

    add_filter('excerpt_length','set_excerpt_length');//to edit something



