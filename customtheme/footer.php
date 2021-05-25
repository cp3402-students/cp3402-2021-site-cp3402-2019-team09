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
            <?php printf('I think we should put social links here')?>

            <span class="sep"> | </span>
            <img class="alignright"
                 src=" <?php bloginfo('template_url');?>/images/joinNowButton.jpg" height="50" alt="JoinNowButton">'
				<?php
				/* translators: 1: Theme name, 2: Theme author. */

                ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
