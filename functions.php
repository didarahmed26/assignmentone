<?php

function assignmentone_bootstrapping() {
    load_theme_textdomain( "assignmentone" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
}

add_action( "after_setup_theme", "assignmentone_bootstrapping" );

function assignmentone_assets() {
    wp_enqueue_style( "bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" );
    wp_enqueue_style( "assignmentone", get_stylesheet_uri(), null);
}

add_action( "wp_enqueue_scripts", "assignmentone_assets" );

function assignmentone_the_excerpt( $excerpt ) {
    if ( ! post_password_required() ) {
        return $excerpt;
    } else {
        echo get_the_password_form();
    }
}

add_filter( "the_excerpt", "assignmentone_the_excerpt" );


function assignmentone_protected_title_change() {
    return "%s";
}

add_filter( "protected_title_format", "assignmentone_protected_title_change" );










