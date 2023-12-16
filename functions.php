<?php

//  CARGAR JS Y CSS

    function my_scripts_and_css()
    {
        // REMOVE GUTENBERG CSS

        wp_dequeue_style ( 'wp-block-library' );
        wp_dequeue_style ( 'wp-block-library-theme' );
        wp_dequeue_style ( 'wc-blocks-style' );

        // MY STUFF

        if ( !is_admin() )
        {
            wp_enqueue_script ( 'js-main', get_stylesheet_directory_uri() . '/js/main.js', '', '', true );
            wp_enqueue_style ( 'css-main', get_stylesheet_uri(), '', filemtime ( get_template_directory() . '/style.css' ) );        
        }
    }

    add_action ( 'wp_enqueue_scripts', 'my_scripts_and_css', 100 );




//  ELIMINAR TAMAÑOS DE IMÁGENES QUE NO NECESITE MI SITIO WEB

    remove_image_size ( '1536x1536' );
    remove_image_size ( '2048x2048' );

    update_option ( 'medium_large_size_w', '0' ); // Esta y la siguiente línea sirven para eliminar el tamaño 'medium_large'
    update_option ( 'medium_large_size_h', '0' );



//  AÑADIR SOPORTE PARA...

    add_theme_support ( 'title-tag' );
    add_theme_support ( 'post-thumbnails' );

    // add_post_type_support ( 'page', 'excerpt' );

//  REGISTRO DE MENÚS

    register_nav_menu ( 'header-menu-center', 'Nav links' );
    register_nav_menu ( 'burger-menu', 'Burger menu links' );
    register_nav_menu ( 'header-menu-left', 'Nav tools' );
    register_nav_menu ( 'footer-menu-left', 'Footer contact links' );
    register_nav_menu ( 'footer-menu-right', 'Footer social media links' );

// AÑADIR CLASE A LINKS
    function add_additional_class_on_a($classes, $item, $args)
    {
        if (isset($args->add_a_class)) {
            $classes['class'] = $args->add_a_class;
        }
        return $classes;
    }

    add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

// CUSTOMIZING SINGLE PRODUCT PAGE
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    remove_action( 'woocommerce_after_single_product_summary' , 'woocommerce_output_product_data_tabs', 10 );
    remove_action( 'woocommerce_before_main_content' , 'woocommerce_breadcrumb', 20 );
    remove_action( 'woocommerce_after_single_product_summary' , 'woocommerce_output_related_products', 20 );
    add_action( 'woocommerce_after_main_content' , 'woocommerce_output_related_products', 10 );


    // REMOVING DEFAULT HTML ELEMENT MARGIN-TOP
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');

    /** CHANGE NUMBER OF RELATED PRODUCTS OUTPUT */ 
    function woo_related_products_limit() {
        global $product;
        $args['posts_per_page'] = 6;
        return $args;
    }
    add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
        function jk_related_products_args( $args ) {
        $args['posts_per_page'] = 5;
        $args['columns'] = 5;
        return $args;
    }
    // DISABLE WOOCOMMERCE STYLESHEET
    // add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' ); 
    
    // DEFERING DASHICONS
    function defer_dashicons() {
        if (!is_admin()) {
            wp_dequeue_style('dashicons');
            wp_deregister_style('dashicons');
            wp_register_style('dashicons', null);
            wp_enqueue_style('dashicons', includes_url('css/dashicons.min.css'), array(), null);
        }
    }
    add_action('wp_enqueue_scripts', 'defer_dashicons');
    // DEFERING ADMIN BAR
    function defer_admin_bar_styles() {
        if (!is_admin()) {
            // Desenfila el estilo de la barra de administración
            wp_dequeue_style('admin-bar');
            wp_deregister_style('admin-bar');
            
            // Registra el estilo de la barra de administración nuevamente sin encolar
            wp_register_style('admin-bar', null);
        }
    }
    add_action('wp_enqueue_scripts', 'defer_admin_bar_styles');

    
?>