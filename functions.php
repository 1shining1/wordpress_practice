<?php 

    function university_files() {
        // javascript 연결 // jquery, version, true(do you want to use this file first right before body tag)
        wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
        // jquery 연결안함
        //wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), NULL);
        wp_enqueue_style('custion-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'); 
        // fontawesome 연결
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
        // css in folder 'build' 연결
        wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
        wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
        // style.css 연결
        // wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts','university_files');

    // wp_enqueue_scripts -> name has to be accurate
    // get_stylesheet_uri -> link [style.css] 

    // Instructor didn't use php closing tag, Sal had an error when he didn't write closing tag

    