<?php get_header(); ?>

<?php
global $wp_query;
$postid = $wp_query->post->ID;
?>

    <header id="home" class="header hero__header color--red">
        <h1 class="header__title hero__header-title js-hero__header-title h--xxl"><?php bloginfo(); ?></h1>

        <div class="hero__header-subtitle row">

            <?php 
                while ( have_rows ('header_description')): the_row();
                $textblock = get_sub_field ( 'text_block' );
            ?>
                <div class="header--home-text-block column flex--1">
                    <p class="header__subtitle-texblock"><?php echo $textblock; ?></p>
                </div>

            <?php endwhile; ?>

        </div>
    </header>

    <main class="main index">
        <section class="hero color--red" id="hero">

            <?php while ( have_rows ( 'new_collection' ) ) : the_row(); ?>

                <?php $title = get_sub_field ( 'collection_title' ); ?>
                <?php $subtitle = get_sub_field ( 'collection_subtitle' ); ?>
                <?php $image = get_sub_field ( 'collection_image' ); ?>
                <?php $url = get_sub_field ( 'collection_url' ); ?>
                <?php $buttontext = get_sub_field ( 'button_text' ); ?>

                <div class="hero__img img--large color-border--red column" style="background-image: url('<?php echo $image; ?>')">
                    <div class="section__header new-collection__header flex">
                        <div class="section__title">
                            <h2 class="h--xl"><?php echo $title; ?></h2>
                        </div>
                        <div class="section__subtitle">
                            <h3 class="h--s"><?php echo $subtitle; ?></h3>
                        </div>
                    </div>
                    <div class="new-collection__footer column">
                        <a href="<?php echo $url; ?>" class="btn btn--link link--action btn--action btn--red"><?php echo $buttontext; ?></a>
                    </div>
                </div>

            <?php endwhile; ?>

        </section>

        <section class="prev-collection flex color--blue">

            <?php while ( have_rows ( 'previous_collection' ) ) : the_row(); ?>

                <?php $title = get_sub_field( 'collection_title' ); ?>
                <?php $subtitle = get_sub_field( 'collection_subtitle' ); ?>
                <?php $url = get_sub_field('collection_url'); ?>
                <?php $buttontext = get_sub_field ( 'button_text' ); ?>

                <div class="header--section prev-collection__header color-border--blue">
                    <h3 class="h--s weight--300"><?php echo $subtitle; ?></h3>
                    <h2 class="section__title"><?php echo $title; ?></h2>
                </div>

                <div class="prev-collection__grid grid--columns-two">
                    
                    <?php while ( have_rows ( 'product' ) ) : the_row(); ?>
                        
                            <?php $productName = get_sub_field( 'product_name' ); ?>
                            <?php $productPrice = get_sub_field('product_price'); ?>
                            <?php $productUrl = get_sub_field('product_url'); ?>

                        <div class="grid-item">

                            <div class="img color-border--blue">
                                <a class="link--img img--zoom-in" href="<?php echo $productUrl?>" target="_blank">  
                                    <?php echo wp_get_attachment_image ( get_sub_field ( 'product_image' ), '', '', '' ); ?>
                                </a>
                            </div>

                            <div class="prev-collection__product-info flex">
                                <div class="prev-collection__product-name">
                                    <p class="p--s"><?php echo $productName; ?></p>
                                </div>
            
                                <div class="prev-collection__product-price">
                                    <p class="p--s weight--500"><?php echo $productPrice['price_number']; ?></p>
                                    <p class="p--s weight--500"><?php echo $productPrice['price_symbol']; ?></p>
                                </div>

                            </div>

                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="prev-collection__info">
                    <div class="prev-collection__title color-border--blue">
                        <h2 class="h--xxl section__title"><?php echo $title; ?></h2>
                        <h3 class="h--m weight--300"><?php echo $subtitle; ?></h3>
                    </div>
                </div>
            <?php endwhile; ?>
        </section>
         

        <a href="<?php echo $url; ?>" class="btn btn--action btn--blue"><?php echo $buttontext; ?></a>

        <?php while ( have_rows ( 'about_content' ) ) : the_row(); ?>

            <section class="about color--red" id="about">
                <?php $title = get_sub_field( 'about_title' ); ?>
                <?php $image = get_sub_field( 'about_image' ); ?>

                <div class="header--section color-border--red">
                        <div class="about__header-lineart lineart--header color-border--red">
                            <div class="lineart--ellipse about__ellipse--left color-border--red"></div>
                            <div class="lineart--ellipse about__ellipse--right color-border--red"></div>
                        </div>
                        <div class="about__header-title">
                            <h2 class="h--xxl"><?php echo $title['title']; ?></h2>
                        </div>
                        
                    </div>

                    <div class="relative img about__img img--large color-border--red" style="background-image: url('<?php echo ($image); ?>')">
                        <div class="img__text--top-left">
                            <p>4DA</p>
                        </div>
                        <div class="img__text--top-right">
                            <p>RBBRZ</p>
                        </div>
                        <div class="img__text--bottom-left">
                            <p>SINCE</p>
                        </div>
                        <div class="img__text--bottom-right">
                            <p>1884</p>
                        </div>
                    </div>

                    <div class="about__info column">
                        <div class="about__info-keywords row color-border--red">

                            <?php while ( have_rows ( 'about_keywords' ) ) : the_row(); ?>

                                <?php $keyword = get_sub_field( 'keyword' ); ?>
                                <?php $color = get_sub_field( 'color' ); ?>

                                <div class="about__keyword color--<?php echo $color; ?>">
                                    <h3 class="h--m weight--400"><?php echo $keyword; ?></h3>
                                </div>

                            <?php endwhile; ?>
                        </div>

                        <div class="about__info-list flex">


                            <?php while ( have_rows ('about_description') ) : the_row(); ?>

                                <?php $svg = get_sub_field( 'description_block_svg_image' ); ?>
                                <?php $description = get_sub_field( 'description_block_text' ); ?>


                                <div class="about__info-list-item color-border--red">
                                    <p class="p--s"><?php echo $description; ?></p>
                                    <img src="<?php echo $svg ?>" class="img--about-icon" alt="">
                                </div>

                            <?php endwhile; ?>
    
                        </div>
                    </div>

            </section>

            <?php while ( have_rows ('about_button') ) : the_row(); ?>

                <?php $text = get_sub_field( 'button_text' ); ?>
                <?php $url = get_sub_field( 'button_url' ); ?>
                <a href="<?php echo $url; ?>" class="btn btn--action btn--red"><?php echo $text; ?></a>

            <?php endwhile; ?>

        <?php endwhile; ?>

        <?php while ( have_rows ('subscription_content')) : the_row(); ?>

            <?php $title = get_sub_field( 'subscription_title' ); ?>
            <?php $image = get_sub_field ( 'subscription_image' ); ?>

            <section class="membership color--gold">
                <div class="membership__card column">
                    <div class="header--section membership__header column color-border--gold">
                        <div class="membership__header-lineart">
                            <div class="lineart--ellipse membership__ellipse--left color-border--gold"></div>
                            <div class="lineart--ellipse membership__ellipse--center color-border--gold"></div>
                            <div class="lineart--ellipse membership__ellipse--right color-border--gold"></div>
                        </div>

                        <div class="section__title">
                            <h2><?php echo $title; ?></h2>
                        </div>
                    </div>

                    <div class="membership__card-content">
                        <div class="membership__info column">
                            <h2 class="h--m font--mulish membership__info-item">DO YOU WANT ACCESS TO</h2>
                
                            <div class="membership__info-list row">
                                <?php while ( have_rows ('subscription_description')) : the_row(); ?>

                                    <?php $benefit = get_sub_field( 'description_benefit' ); ?>
                                    
                                    <h4 class="h--s membership__info-list-item">
                                        <?php echo $benefit; ?>
                                    </h4>

                                <?php endwhile; ?>
                            </div>
        
                            <div class="membership__footer">
                                <h4 class="weight--300">?</h4>
                            </div>
                        </div>
        
                        <div class="membership__img img--large color-border--gold" style="background-image: url('<?php echo $image; ?>')">
                            <?php 
                                while ( have_rows ('subscription_button')) : the_row();
                                $text = get_sub_field ( 'button_text' );
                            ?>
                            
                                <a href="<?php echo home_url ( 'membership' ); ?>" class="btn btn--link btn--gold membership__button-on-img btn--action color--gold"><?php echo $text; ?></a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                        
                    </div>
                </div>
            </section>

        <?php endwhile; ?>
    </main>

<?php get_footer(); ?>