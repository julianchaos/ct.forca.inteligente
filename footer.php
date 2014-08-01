<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<nav>
			<a href="http://gfteam.com.br/" target="_BLANK">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon/gfteam.png" alt="" />
			</a>
			<a href="/centro-de-treinamento/">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon/ct.forca.inteligente.png" alt="" />
			</a>
			<a href="/parioca/">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon/parioca.png" alt="" />
			</a>
		</nav>
		<div class="site-info">
			Centro de Treinamento Força Inteligente<br />
			<a href="/como-chegar/">R. 24 de Maio, 599. Riachuelo.</a> Tel.: (021) 3591-1995
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>