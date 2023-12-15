<?php
    $color = get_post_meta(get_the_ID(), 'color', true);

    $link_color_class = '';

    if ($color === 'blue') {
        $link_color_class = 'link--blue';
    } elseif ($color === 'black') {
        $link_color_class = 'link--black';
    } elseif ($color === 'grey') {
        $link_color_class = 'link--grey';
    } elseif ($color === 'gold') {
        $link_color_class = 'link--gold';
    } elseif ($color === 'red') {
        $link_color_class = 'link--red';
    }

    if ( is_page ( 'home' ) ) {
        $link_color_class = 'link--gold';
    } elseif (is_404()) {
        $link_color_class = 'link--white';
    } elseif (is_single()) {
        $link_color_class = 'link--black';
    }

    wp_nav_menu(array(
        'theme_location' => 'footer-menu-left',
        'menu_class' => 'footer__contact-list-socialmedia',
        'container' => false,
        'add_a_class' => 'link--red link--icon link ' . $link_color_class,
    ));


    wp_nav_menu(array(
        'theme_location' => 'footer-menu-right',
        'menu_class' => 'footer__contact-list-socialmedia',
        'container' => false,
        'add_a_class' => 'link--red link--icon link ' . $link_color_class,
    ));
?>