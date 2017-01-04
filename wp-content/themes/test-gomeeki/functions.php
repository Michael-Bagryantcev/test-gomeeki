<?php
/**
 * Gomeeki functions and definitions
 *
 * @package Gomeeki
 * @subpackage Test Gomeeki
 * @since 1.0
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

register_nav_menu('primary', 'Main Menu');
add_theme_support('post-thumbnails'); 

function register_settings() {
	add_settings_field('twitter_url', 'Twitter Url', 'get_twitter_url', 'general'); 
	register_setting( 'general', 'twitter_url', 'string'); 
	add_settings_field('facebook_url', 'Facebook Url', 'get_facebook_url', 'general'); 
	register_setting( 'general', 'facebook_url', 'string'); 
	add_settings_field('github_url', 'Github Url', 'get_github_url', 'general'); 
	register_setting( 'general', 'github_url', 'string'); 
} 
add_action('admin_init', 'register_settings');

function get_twitter_url() {
    echo '<input id="twitter_url" type="text" class="regular-text" name="twitter_url" value="' . get_option('twitter_url') . '" />';
}

function get_facebook_url() {
    echo '<input id="facebook_url" type="text" class="regular-text" name="facebook_url" value="' . get_option('facebook_url') . '" />';
}

function get_github_url() {
    echo '<input id="github_url" type="text" class="regular-text" name="github_url" value="' . get_option('github_url') . '" />';
}
