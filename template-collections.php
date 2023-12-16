<?php /* Template name: Collections */ ?>

<?php get_header(); the_post(); ?>
    <?php global $wp_query;
        $postid = $wp_query->post->ID;
        $color = get_post_meta($postid, 'color', true)
    ?>

    <header class="header header--collections color--<?php echo $color; ?> color-border--<?php echo $color; ?>">
        <div class="header__title">
            <h1><?php the_title(); ?></h1>
        </div>
    </header>
    
    <main class="collections">

        <?php while ( have_rows ( 'collection' ) ) : the_row(); ?>

            <?php $title = get_sub_field ( 'collection_title' ); ?>
            <?php $url = get_sub_field ( 'collection_url' ); ?>
            <?php $color = get_sub_field( 'collection_color' ); ?>

            

        <article class="collections__item color-border--<?php echo $color; ?>">
            <div class="header--collections-item color--<?php  echo $color; ?> color-border--<?php echo $color; ?>">
                <h2><?php echo $title; ?></h2>
            </div>
            <div class="img img--large color-border--<?php  echo $color; ?>">
                <a href="<?php echo $url; ?>" class="link--img img--zoom-in">
                    <?php echo wp_get_attachment_image ( get_sub_field ( 'collection_image' ), '', '', array ( 'class' => 'img--collection' ) ); ?>
                </a>
            </div>
        </article>

        <?php endwhile; ?>

    </main>

<?php get_footer(); ?>