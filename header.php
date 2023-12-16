<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Buy online exclusive balaclavas">
    <link rel="icon" type="image/x-icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon/favicon.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
    global $wp_query;
    $postid = $wp_query->post->ID;
    $color = $color = get_post_meta($postid, 'color', true);
    if ( is_404() ) {
        $color = 'white';
        $bgcolor = 'red';
    }
    if (is_single ()) {
        $color = 'black';
    }

    if (class_exists('WooCommerce')) {
        $cart = WC()->cart;

        // Obtén el número de elementos en el carrito
        $cart_contents_count = $cart->get_cart_contents_count();
    }
    // Showing cart total content
    $showCartTotalContent = '';
    if ($cart_contents_count > 0) {
        $showCartTotalContent = '<div class="btn--cart-content-count color-bg--'.esc_attr($color).' color-border--'.esc_attr($color).'">
            <span class="btn--cart-content-count-number color--white">'.$cart_contents_count.'</span>
        </div>';
    }
?>
    <nav class="nav">
        <div class="topbar js-topbar color--<?php echo $color; ?> color-border--<?php echo $color; ?> color-bg--<?php echo $bgcolor; ?>">
            <div class="topbar__menu-btn flex--1">
                <input type="checkbox" class="topbar__menu-toggler js-topbar__menu-toggler" id="topbar__menu-toggler">
                <label for="topbar__menu-toggler" class="btn--topbar-menu">
                  <span class="burger burger--top color-bg--<?php echo $color; ?>"></span>
                  <span class="burger burger--bottom color-bg--<?php echo $color; ?>"></span>
                </label>
            </div>
    
            <div class="topbar__link">
                <a href="<?php echo home_url(); ?>" class="link link--<?php echo $color; ?> link--home"><?php bloginfo(); ?></a>
            </div>
  
            <?php get_template_part( 'nav-links' ); ?>
    
            <div class="topbar__tools flex--1">
                <div class="topbar__tool-btn btn--tool btn--cart js-btn--cart">
                    <a href="<?php echo home_url('cart') ?>" target="_blank" class="topbar__link--cart">
                        <img class="img--icon color-icon--<?php echo $color; ?>" src="<?php bloginfo ( 'template_url' ); ?>/images/icons/bag.svg" alt="cart-icon">
                        <?php echo $showCartTotalContent; ?>
                    </a>
                </div>

        </div> 

        <div class="menu js-menu">
            <?php get_template_part( 'burger-menu' ); ?>
        </div>
    </nav>