<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<div class="go_up">
    <img src="<?php bloginfo('template_url'); ?>/img/brackets.svg" alt="Go up">
</div>
    <footer>
        <div class="container">
            <div class="logo">
                <img src="<?php bloginfo('template_url'); ?>/img/logo_color.svg" alt="Ulumulu design">
                <a href="www.ulumulu.pl">www.ulumulu.pl</a>
            </div>

        </div>
    </footer>


<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/public/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/public/js/main.min.js" type="text/javascript"></script>

</body>
</html>
