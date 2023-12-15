<?php /* Template name: Membership */ ?>

<?php get_header(); the_post(); ?>

<?php
global $wp_query;
$postid = $wp_query->post->ID;
$color = get_post_meta($postid, 'color', true);
?>

    <main class="subscription">
        <div class="subscription__card">
            <div class="section__header subscription__header column color-border--<?php echo $color; ?>">
                <div class="section__title subscription__header-title">
                    <h2>JOIN US</h2>
                </div>

                <div class="subscription__header-lineart">
                    <div class="lineart--ellipse membership__ellipse--left color-border--<?php echo $color; ?>"></div>
                    <div class="lineart--ellipse membership__ellipse--center color-border--<?php echo $color; ?>"></div>
                    <div class="lineart--ellipse membership__ellipse--right color-border--<?php echo $color; ?>"></div>
                </div>

            </div>

            <div class="subscription__card-content">
                <div class="subscription__info column">
                    <h3 class="h--s weight--300">Get access to events info, discounts, rumors, ID exchange and more...</h3>
                </div>
                    
                <?php the_content(); ?>
                
            </div>
        </div>
    </main>

<?php get_footer(); ?>