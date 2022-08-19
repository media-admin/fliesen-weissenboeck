<?php
/*
Template Name: Seite Kontakt
*/

get_header(); ?>

<section class="content">

		<div class="main-message__container">
			<h1><?php the_title(); ?></h1>
			<h2 class="main-message"><?php the_field('subtitle'); ?></h2>
		</div>

			  	<div class="heading__container">
			  		<h2 class="heading__main"><?php the_field('heading_main_light'); ?> <strong><?php the_field('heading_main_strong'); ?></strong></h2>
			  		<hr class="heading__hr">
			  		<h3 class="sub-heading"><?php the_field('heading_sub'); ?></h3>
				</div>

				<div class="partner__introduction container--white container">

					<p class="content__text">
						Durch unsere Erfahrung und Know-How reicht meist ein Gespräch um die Eckpunkte Ihres Wunsch-Vorhabens wie Dauer und Preis-Spanne abstecken zu können. Melden Sie sich einfach und wir nehmen uns die Zeit, die eine optimale Lösung braucht.
					</p>

				</div>

		  		<div class="container kontakt__container container--white">

					<h3 class="kontakt__heading">Direkt anfragen</h3>
					<hr class="h3__heading">

					<div class="partner-phone">
						<p>Telefon<br/>
							<a href="tel:004369910629688" target="_blank">+43 699 106 29 688</a>
						</p>
					</div>

					<div class="partner-mail">
						<p>E-Mail<br/>
							<a href="mailto:christian.weissenboeck@tmo.at?subject=Website-Anfrage: " target="_blank">christian.weissenboeck@tmo.at</a>
						</p>
					</div>

				</div>

				<?php echo do_shortcode("[team]"); ?>

				<div class="container kontakt__container container--white">

					<h3 class="kontakt__heading">Unser Standort</h3>
					<hr class="h3__heading">

					<div class="showroom-partner__location">

						<p>Tannenweg 1<br/>
							2620 Ramplach
						</p>

						<div class="route__map-wrapper" style="background-image: url( '' );">

							<div class="route__map-trigger" data-source="!1m18!1m12!1m3!1d22550.780849488412!2d16.063376692936323!3d47.69719917264329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476dd1eccdefdf47%3A0x6aac0b095cb49c95!2sChristian%20Wei%C3%9Fenb%C3%B6ck%20-%20Fliesenverlegung!5e0!3m2!1sde!2sat!4v1601657589291!5m2!1sde!2sat" data-type="google-maps" loading="lazy"  width="100%" height="100%" allowfullscreen="" aria-hidden="false" tabindex="0">

								<p class="route__map-shariff-infotext container">
									Bitte klicken Sie, um die interaktive Google Map anzuzeigen. Dadurch stimmen Sie sowohl dem zugehörigen Datenaustausch mit Google als auch
									<a href="/datenschutz" target="_blank" rel="noopener noreferrer">
										den Datenschutzbestimmungen
									</a>
										zu.
								</p>

								<input type="button" class="button--load-more" value="Google Maps laden">
						</div>

						<div class="route__map-layer">
							<iframe src="" border="0" data-scaling="true" data-format="16:9" class="google-maps map-frame contact-map"></iframe>
						</div>

					</div>

				</div>

				<?php echo do_shortcode("[cta_contact]"); ?>

				<section>

			  		<?php echo do_shortcode("[galleries_overview]"); ?>

					<hr class="red">

				</section>


		  	</section>

<?php get_footer(); ?>