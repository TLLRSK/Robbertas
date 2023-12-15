<?php
    // Show Menu here
    wp_nav_menu(array(
        'theme_location' => 'burger-menu',
        'menu_class' => 'menu__links-list',
        'container' => false,
        'add_a_class' => 'link link--menu h2',
    ));
?>