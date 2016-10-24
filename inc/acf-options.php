<?php
if ( function_exists('acf_add_options_page') )
{
    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme_options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Homepage Options',
        'menu_title'    => 'Homepage Options',
        'menu_slug'     => 'homepage_options',
        'parent_slug'   => 'theme_options'
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Page Options',
        'menu_title'    => 'Page Options',
        'menu_slug'     => 'page',
        'parent_slug'   => 'theme_options'
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Sidebar Options',
        'menu_title'    => 'Sidebar Options',
        'menu_slug'     => 'sidebar',
        'parent_slug'   => 'theme_options'
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Options',
        'menu_title'    => 'Footer Options',
        'menu_slug'     => 'footer',
        'parent_slug'   => 'theme_options'
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Social Media',
        'menu_title'    => 'Social Media',
        'menu_slug'     => 'social',
        'parent_slug'   => 'theme_options'
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Shortcode',
        'menu_title'    => 'Theme Shortcode',
        'menu_slug'     => 'shortcode',
        'parent_slug'   => 'theme_options'
    ));

}
?>