<?php get_header(); the_post(); ?>

<?php
global $wp_query;
$postid = $wp_query->post->ID;
?>

    <header class="header header--shop color-border--<?php echo get_post_meta($postid, 'color', true); ?> color--<?php echo get_post_meta($postid, 'color', true); ?>">
        <div class="header__title">
            <h1><?php the_title(); ?></h1>
        </div>
    </header>
    
    <main>
        <section class="shop__collection color--<?php echo get_post_meta($postid, 'color', true); ?>">

            <?php 
                if ( is_page( array('collection-stay-shy-shine', 'collection-the-river-theyll-cry') ) ) {
                    echo '<div class="grid--columns-three">';
                    while ( have_rows( 'product' ) ) : the_row(); 
                        $productName = get_sub_field( 'product_name' );
                        $productPrice = get_sub_field( 'product_price' );
                        $productUrl = get_sub_field('product_url');
                        $postid = get_the_ID();
            ?>
                        <div class="shop__product column color-border--<?php echo get_post_meta($postid, 'color', true); ?>">
                            <div class="img img--product-large color-border--<?php echo get_post_meta($postid, 'color', true); ?>">
                                <a class="link--img img--zoom-in" href="<?php echo $productUrl?>">  
                                    <?php echo wp_get_attachment_image( get_sub_field( 'product_image' ), '', '', '' ); ?>
                                </a>
                            </div>
                            <div class="shop__product-info">
                                <div class="shop__product-name">
                                    <p class="h--m weight--300"><?php echo $productName; ?></p>
                                </div>
                                <div class="shop__product-price">
                                    <div class="shop__product-price--number">
                                        <p class="h--m weight--600"><?php echo $productPrice['price_number']; ?></p>
                                    </div>
                                    <div class="shop__product-price--symbol">
                                        <p class="h--m weight--600"><?php echo $productPrice['price_symbol']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <?php endwhile; ?>

                <?php } else {

                    the_content();
                }
            ?>
        </section>
    </main>


    
<?php get_footer(); ?>