<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DigitalKM
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>A joint project between the <a href="http://www.kingsmountainmuseum.org/">Kings Mountain Historical Museum</a> and <a href="http://mauneylibrary.org/">Mauney Memorial Library</a>.</p>
			<p>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'digitalkm' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'digitalkm' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'digitalkm' ), 'DigitalKM', '<a href="https://andrewrminion.com/">AndrewRMinion Design</a>' ); ?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
