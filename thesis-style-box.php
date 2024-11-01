<?php
/*
Plugin Name: Thesis Style Box
Plugin URI: http://www.technozeast.com/thesis-style-box
Description: Thesis Users Make nice notes, alerts with Style Box in your post and if you are not a Thesis User Checkout our Style Box Plugin for the same.
Version: 1.1
Author: Shivendu Madhava
Author URI: http://www.technozeast.com/
*/

function thesis_style_box(){
    $thesis_style_box = get_option('thesis_style_box');
    if($thesis_style_box=='1'){
        if ( !defined('WP_CONTENT_URL') ) define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
        $plugin_url = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__));
        echo '<link rel="stylesheet" href="'.$plugin_url.'/thesis-style-box.css"'.' type="text/css" media="screen" />';
    }
}

function active_thesis_style_box(){
        add_option('thesis_style_box','1','active the plugin');
}

function deactive_thesis_style_box(){
    delete_option('thesis_style_box');
}

add_action('wp_head', 'thesis_style_box');

register_activation_hook(__FILE__,'active_thesis_style_box');
register_deactivation_hook(__FILE__,'deactive_thesis_style_box');

?>