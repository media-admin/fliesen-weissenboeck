<?php 
/*
Template Name: Seite Firmenchronik
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
		  	
	
	<div class="container-timeline container">

		<div class="timeline__block timeline__block--left">
	    	<div class="timeline__marker"></div>
			<div class="timeline__content">
	        	<h3>2020</h3>
				<p class="timeline__content-text">Wieder wuchs unser Team um einen neuen Facharbeiter an. Im September fällt ebenfalls der Startschuss für unseren neuen Lehrling<br/><br/>
					<span class="timeline__content-text--highlighted">Wir investieren für Sie in die Zukunft und freuen uns, diese mit Ihnen zu beschreiten</span>
				</p>			
	      	</div>
	   	</div>
				   
		<div class="timeline__block timeline__block--right">
		   	<div class="timeline__marker"></div>
			<div class="timeline__content">
		       	<h3>2019</h3>
				<p class="timeline__content-text">Inzwischen wurde ein erster Mitarbeiter in den wohlverdienten Ruhestand geschickt und gleichzeitig ein weiterer Mitarbeiter aufgenommen.<br/><br/>
				   Ebenfalls als Premiere hat ein erster Lehrling erfolgreich ausgelernt - dem nicht genug, räumte er sogar den Vizelandesmeister-Titel ab.<br/><br/>
				   Als Ausbildungsbetrieb stellten wir zwei weitere Lehrlinge ein und erweiterten den Fuhrpark erneut auf inzwischen  fünf Fahrzeuge.<br/><br/>
				   Ein weiterer Meilenstein stellte das Anmieten eines zweiten Lagers in Grafenbach dar, um Ihre Anliegen noch effizienter bearbeiten zu können.<br/><br/>
				   <span class="timeline__content-text--highlighted">Wir investieren für Sie in die Zukunft und freuen uns, diese mit Ihnen zu beschreiten.</span>
				</p>					
		 	</div>
		</div>
						
		<div class="timeline__block timeline__block--left">
		   	<div class="timeline__marker"></div>
			<div class="timeline__content">
		       	<h3>2017</h3>  
				<p class="timeline__content-text">Neben der Erweiterung unseres Fuhrparks, konnten wir auch zwei weitere Facharbeiter aufnehmen.<br/><br/>
					Um in Zukunft noch flexibler und unabhängiger zu sein, wurde außerdem ein Lager in Ramplach angemietet.<br/><br/>
					<span class="timeline__content-text--highlighted">Wir bereiten Ihr Heim fachgerecht für die Verlegung vor.</span>
				</p>					
		   	</div>
		</div>
				
		<div class="timeline__block timeline__block--right">
		    <div class="timeline__marker"></div>
		    <div class="timeline__content">
			    <h3>2016</h3>
				<p class="timeline__content-text">Nach inzwischen drei Jahren bekam unser Team weiteren Zuwachs – Herr Bauer konnte als Lehrling verpflichtet werden.<br/><br/>
					Als sehr qualitätsbezogener Mensch und Mitarbeiter investiere ich mit Blick auf die Zukunft in ihn, um eine unseren hohen Standard entsprechende Ausbildung zu sichern.<br/><br/>
					Außerdem ist es mir persönlich ein Anliegen, das benötigte Vertrauen zu schaffen und unsere Werte weiterzugeben.<br/><br/>
					<span class="timeline__content-text--highlighted">Wir investieren für Sie in die Zukunft und freuen uns, diese mit Ihnen zu beschreiten.</span>
				</p>         
			</div>
		</div>
				
		<div class="timeline__block timeline__block--left">
			<div class="timeline__marker"></div>
			<div class="timeline__content">
				<h3>2015</h3>
				<p class="timeline__content-text">Neben der Anschaffung eines zweiten Firmen-KFZs konnte ich mein Ziel, ihnen solide und stetig qualitativ hochwertige Arbeit zu „liefern“ über das ganze Jahr erfolgreich umsetzen.<br/><br/>
					<span class="timeline__content-text--highlighted">Ihre stets positiven Rückmeldungen sind der Motor, der uns zeigt, dass wir gute Arbeit leisten.</span>
				</p>						
	    	</div>
		</div>
				
		<div class="timeline__block timeline__block--right">
			<div class="timeline__marker"></div>
			<div class="timeline__content">
				<h3>2014</h3>
				<p class="timeline__content-text">Exakt ein Jahr nach Unternehmensgründung konnte ich mit Herrn Hamersak meinen ersten Mitarbeiter einstellen.<br/><br/>
					Gerade in der heutigen Zeit ist es sehr schwierig, hochqualifizierte Facharbeiter zu finden.<br/><br/>
					Mit Herrn Hamersak, der ebenfalls bereits 25 Jahre Berufserfahrung aufweist, sind wir bestens aufgestellt um Ihre Wünsche und Träume in die Tat umsetzen zu können.<br/><br/>
					<span class="timeline__content-text--highlighted">Unsere gemeinsame Erfahrung von 40 Jahren setzen wir für Sie und Ihren persönlichen Vorteil ein.</span>
				</p>			
			</div>
		</div>
				   
		<div class="timeline__block timeline__block--left">
			<div class="timeline__marker"></div>
			<div class="timeline__content">
				<h3>2013</h3>
				<p class="timeline__content-text">Nach 15 jähriger Tätigkeit als Fliesenleger, entschloss ich mich in Ramplach ein eigenes Unternehmen zu gründen.<br/><br/>
					Bereits die ersten Projekte und zufriedenen Kunden zeigten, dass die Entscheidung richtig war und meine Vision des Betriebs und deren Umsetzung voll und ganz die Bedürfnisse der Kunden zufriedenstellt.<br/><br/>
					<span class="timeline__content-text--highlighted">Ihre stets positiven Rückmeldungen sind der Motor, der uns zeigt, dass wir gute Arbeit leisten.</span>
				</p>
			</div>
		</div>
				   
	</div>
	
	</section>
	
	<?php echo do_shortcode("[cta_contact]"); ?>
	
	<?php echo do_shortcode("[contact_infos]"); ?>
			
</section>


			
<?php get_footer(); ?>