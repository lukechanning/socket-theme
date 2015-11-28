<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Socket_theme
 * @since 1.0.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
			if (! dynamic_sidebar('footer-left') ) :
	            dynamic_sidebar('footer-left');
	        endif;
	        if (! dynamic_sidebar('footer-right') ) :
	            dynamic_sidebar('footer-right');
	        endif;
        ?>
	</footer><!-- .site-footer -->

</div><!-- .site -->

<!-- Load a lil' bit o' jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
