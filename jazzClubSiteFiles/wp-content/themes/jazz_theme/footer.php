<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jazz_theme
 */

?>

<?php wp_footer(); 
    if (is_active_sidebar( 'footer-1' )) {
        dynamic_sidebar( 'footer-1' );
    }?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jazz_theme' ), 'jazz_theme', '<a href="https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-team15">Team 15</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

</body>
</html>
