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

    if (is_404()) {
        $link_color_class = 'link--white';
    } elseif (is_single()) {
        $link_color_class = 'link--black';
    }

    wp_nav_menu(array(
        'theme_location' => 'header-menu-center',
        'menu_class' => 'topbar__links-list',
        'container' => false,
        'add_a_class' => 'link link--topbar ' . $link_color_class,
    ));
?>