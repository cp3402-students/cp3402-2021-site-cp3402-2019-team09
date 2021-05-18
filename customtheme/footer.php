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
            <?php printf('Here is some dummy text')?>

            <span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( 'Here is some more dummy text %1$s.'), '<img class="alignright" src="wp-content/themes/_s/images/joinNowButton.jpg" height="50" alt="JoinNowButton">' );
                ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
