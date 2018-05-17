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
			<p>A joint project between the <a href="http://www.kingsmountainmuseum.org/">Kings Mountain Historical Museum</a> and <a href="http://mauneylibrary.org/">Mauney Memorial Library</a></p>
			<p>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'digitalkm' ) ); ?>">Proudly powered by WordPress</a>
				<span class="sep"> | </span>
				Custom development by <a href="https://andrewrminion.com/">AndrewRMinion Design</a>
			</p>
			<p>LSTA grant programs are made possible by grant funds from the Institute of Museum and Library Services under the provisions of the federal Library Services and Technology Act as administered by the State Library of North Carolina, a division of the Department of Cultural Resources.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
