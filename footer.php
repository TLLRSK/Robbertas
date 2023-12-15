<?php
global $wp_query;
$postid = $wp_query->post->ID;
$color = get_post_meta($postid, 'color', true);
if ( is_page ( 'home' ) ) {
    $color = 'gold';
} elseif ( is_404() ) {
    $color = 'white';
} elseif ( is_singular( 'product' ) ) {
    $color = 'black';
}


?>

    <footer class="footer color--<?php echo $color; ?> color-border--<?php echo $color; ?>">
            <div class="footer__header color-border--<?php echo $color; ?>">
            <p class="p--m">In an dark and quiet yet elegantly-designed somewhere hidden workshop, a group of people can’t wait to find new partners in crime.</p>
            </div>
            
            <div class="footer__field column color-border--<?php echo $color; ?>">
                <p class="p--m">Contact below</p>

                <div class="footer__contact-list">

                    <?php get_template_part( 'footer-menu' ); ?>

                </div>
            </div>

            <div class="footer__field color-border--<?php echo $color; ?>">
                <div class="footer__newsletter column color-border--<?php echo $color; ?>">
                    <p>Suscribe to our newsletter</p>

                    <form action="" class="footer__form--email row">
                        <input class="footer__input--newsletter color-border--<?php echo $color; ?> color--<?php if (is_404() ) { $color = 'red'; } echo $color; ?> color-newsletter--<?php echo $color; ?>" type="email" placeholder="E-mail">
                        <input class="footer__input--submit color--<?php if (is_404() ) { $color = 'red'; } echo $color; ?> flex p--s" type="submit" value="Submit">
                    </form>
                </div>
            </div>

            <div class="footer__dropdowns column">
                <div class="footer__dropdown column color-border--<?php if (is_404() ) { $color = 'white'; } echo $color; ?>">
                    <input type="checkbox" class="footer__dropdown-toggler" id="footer__dropdown-toggler--help">
                    <label for="footer__dropdown-toggler--help" class="footer__dropdown-title js-footer__dropdown-title row justify--between">
                        <p class="p--m">Help</p>
                        <div class="dropdown__toggler">
                            <span class="dropdown__line dropdown__line--horizontal color-bg--<?php if (is_404() ) { $color = 'white'; } echo $color; ?>"></span>
                            <span class="dropdown__line dropdown__line--vertical color-bg--<?php if (is_404() ) { $color = 'white'; } echo $color; ?>"></span>
                        </div>
                    </label>
                    <div class="footer__dropdown-content js-footer__dropdown-content">
                        <p class="p--s">Did you have any problem with our products, payment or shipping? Write us. Do you feel lost or purposeless? Write us. Do you think we should know about you? Write us.</p>
                    </div>
                </div>

                <div class="footer__dropdown column color-border--<?php echo $color; ?>">
                    <input type="checkbox" class="footer__dropdown-toggler" id="footer__dropdown-toggler--careers">
                    <label for="footer__dropdown-toggler--careers" class="footer__dropdown-title row justify--between">
                        <p class="p--m">Careers</p>
                        <div class="dropdown__toggler">
                            <span class="dropdown__line dropdown__line--horizontal color-bg--<?php if (is_404() ) { $color = 'white'; } echo $color; ?>"></span>
                            <span class="dropdown__line dropdown__line--vertical color-bg--<?php if (is_404() ) { $color = 'white'; } echo $color; ?>"></span>
                        </div>
                        
                    </label>
                    <div class="footer__dropdown-content">
                        <p class="p--s">Currently we don't have any open vacancies, but feel free to write us...</p>
                    </div>
                </div>
            </div>

            <div class="footer__copyright color--<?php echo $color; ?>">
                <p>Copyright robberta's 2023</p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>