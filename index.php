<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package libre
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="module-main">
				<img src="<?php bloginfo('template_directory'); ?>/img/image-home-unsplash.jpg" alt="Campo de cebada">
				<span class="titre-slider">Tomate tu libertad <br/>y escoge tu cerveza</span>
			</section>


			<section class="module-cervezas">
				<div class="module-cerveza">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo-pasion.svg" alt="cerveza Pasión">
					<div class="descripcion-cerveza pasion">
						<h4>Libre Pasión</h4>
						
						<h6>Estilo: </h6>
						<p>Fruit American Wheat Ale. Alc/Vol: 4.5% IBUs: 16 </p>
						<p>Esta cerveza de trigo ha sido madurada con pulpa pura de maracuyá. De intenso aroma, color dorado, agradable sabor cítrico y refrescante. Esta unión de cerveza y fruta brinda un encanto único lleno de pasión. Tiene cuerpo ligero y espuma alta. Tómala lo más fresca posible. </p>

						<h6>Maltas:</h6>
						<p>2 Row, White Wheat y Bonlander Munich <br>
						
						<h6>Lúpulos:</h6> 
						<p>Cascade </p>

						<h6>Maridaje:</h6> 
						<p>Ideal para disfrutar con entradas ligeras, carnes blancas, carnes frías poco maduradas y con picante suave, postres con frutas cítricas y quesos suaves.</p>
					</div>
				</div><!--
				--><div class="module-cerveza">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo-ipa.svg" alt="cerveza Ipà">
					<div class="descripcion-cerveza ipa">
						<h4>Libre IPA</h4>
						
						<h6>Estilo: </h6>
						<p>American India Pale Ale. Alc/Vol: 5.5% IBUs: 60 </p>

						<p>Esta cerveza está hecha con maltas acarameladas y una cantidad generosa de lúpulo que le da un agradable y especial amargor, con intenso aroma cítrico y floral. De color dorado oscuro, cuerpo medio y espuma gruesa. </p>

						<h6>Maltas:</h6>
						<p>2 Row, Bonlander Munich, Caramel y Carapils <br>
						
						<h6>Lúpulos:</h6>
						<p>Cascade, Columbus y Centennial </p>

						<h6>Maridaje:</h6>
						<p>Ideal para disfrutar platos con curry, platos condimentados, madurados y quesos fuertes tipo azul.</p>
					</div>
				</div><!--
				--><div class="module-cerveza">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo-avellana.svg" alt="cerveza Avellana">
					<div class="descripcion-cerveza avellana">
						<h4>Libre Avellana</h4>

						<h6>Estilo: </h6>
						<p>American Brown Ale. Alc/Vol: 5% IBUs: 30 </p>

						<p>Esta cerveza de estilo Brown Ale está hecha con una mezcla de maltas caramelo y extracto natural de avellana. Tiene agradable aroma a caramelo y nueces, un suave sabor tostado y su color es café rojizo. Tiene cuerpo y espuma media. Una cerveza rica en aromas y sabores.</p>

						<h6>Maltas:</h6>
						<p>2 Row, Bonlander Munich, Caramel y Chocolate Malt <br>
						<h6>Lúpulos:</h6> 
						<p>Perle </p>

						<h6>Maridaje:</h6> 
						<p>Ideal para disfrutar con carnes o peces ahumados, queso tipo holandés o gouda.</p>
					</div>
				</div>
			</section>
			<section class="module-motivacion">
								
				<h4>Acerca de nosotros:</h4>

				<div class="grid">
					<div class="module-motivacion-item">
						<img src="<?php bloginfo('template_directory'); ?>/img/lupulo-pasion.svg" alt="Icon lúpulo" class="icon-lupulo">
						<p>Cervecería Libre comienza haciendo cerveza en casa y disfrutándola con los amigos, mientras se pensaba en cuál nuevo estilo se iba a producir en la próxima elaboración. Esos días sentaron las bases de lo que sería la Cervecería.</p>
						<p>Años después 3 de estos amigos decidieron comprar equipos para producir mayores cantidades de las que se pueden hacer en casa y compartirla entre más amigos y familiares. La cervezas tuvieron una buena aceptación y junto con otro amigo se decidió formalizar la idea y fundar la nano cervecería y el tap room Cervecería Libre.</p>
					</div><!-- 
 
				--><div class="module-motivacion-item">
						<img src="<?php bloginfo('template_directory'); ?>/img/lupulo-ipa.svg" alt="Icon lúpulo" class="icon-lupulo">
						<p>En Cervecería Libre nos tomamos la libertad de elegir que cervezas producir, no basados en las tendencias masivas de consumo, sino creando cervezas inspiradas en otras de gran calidad y añadiéndole ingredientes locales o haciendo nuestras propias adaptaciones.</p>
						<p>Producimos pequeños lotes, por eso te podemos ofrecer una cerveza fresca, no sometida las condiciones adversas ambientales que muchas de la cervezas sufren y tienden a deteriorar la calidad.</p>
					</div><!--

				--><div class="module-motivacion-item">
						<img src="<?php bloginfo('template_directory'); ?>/img/lupulo-avellana.svg" alt="Icon lúpulo" class="icon-lupulo">
						<p>Cervecería Libre queremos que nuestros amigos y clientes tengan la libertad de elegir que cerveza tomarse, es por esto que en nuestro pub puedes encontrar nuestras cervezas frescas y una variedad de oferta de cervezas artesanales locales igualmente frescas, servidas de la forma correcta y en las mejores condiciones, en el vaso adecuado, limpio, en la temperatura indicada y con la espuma correcta.</p>
						<p>Queremos que disfrutes la cerveza que más te guste de la misma forma como nosotros quisiéramos disfrutarla.</p>
					</div>
				</div>

				<h4>Tómate la libertad de probarla. <br>Tómate  la libertad de elegir que tomarte.</h4>

			</section>
			<section class="module-map">
				<div id="map_canvas"></div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
