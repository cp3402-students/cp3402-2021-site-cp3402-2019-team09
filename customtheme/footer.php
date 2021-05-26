<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package startertheme
 */

?>

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <!--            --><?php //printf('I think we should put social links here')?>

        <a href="http://3.24.124.61/?page_id=22">
        <img class="alignright"
             src="<?php bloginfo('template_url'); ?>/images/joinNowButton.jpg" height="50" alt="JoinNowButton">
        </a>
        <a href="https://www.facebook.com/tsvjazzclub/">
            <img class="alignleft" src="<?php bloginfo('template_url'); ?>/images/icon-fb.png" height="50"
                 alt="Facebook">
        </a>
        <a href="https://www.instagram.com/tsvjazzclub/?hl=en">
            <img class="alignleft" src="<?php bloginfo('template_url'); ?>/images/icon-ig.png" height="50"
                 alt="Instagram">
        </a>
        <a href="mailto:townsvillejazz@icloud.com">
            <img class="alignleft" src="<?php
            bloginfo('template_url'); ?>/images/icon-email.png" height="50" alt="Mail">
        </a>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */

        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
