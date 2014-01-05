<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package libre
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<h4>Estamos abiertos </h4>

		<div class="site-info">
			<p>Jueves 6pm-12am | Vie.-Sáb. 6pm-2am </p>
			<p>Tél: +57 314 6154688<br>
			Carrera 44 # 25-31<br>
			Medellín
			</p>
		</div>
		<div class="site-social site-social-footer">
			<a href="https://www.facebook.com/cervecerialibre" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-facebook.svg" alt="linkfacebookedin" class="" >
			</a>
			<a href="https://twitter.com/cervezalibre" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-twitter.svg" alt="twitter" class="" >
			</a>
			<a href="mailto:info@cervecerialibre.com">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-mail.svg" alt="mail libre : info@cervecerialibre.com" class="" >
			</a>
			<a href="tel:0057-4-4484412" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-phone.svg" alt="teléphono libre" class="" >
			</a>
		</div><!-- .site-social -->
		<div class="site-legal">
			"El exceso de alcohol es perjudicial para la salud "ley 30 de 1986" - "prohibase el expendio de bebidas embriagantes a menores de edad" ley 124 de 1994
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>