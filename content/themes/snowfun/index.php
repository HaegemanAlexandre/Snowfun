<?php get_header(); ?>
<div class="wrapper-home">
	<section class="presentation" id="presentation">
    	<div class="presentation-pic"><img src="<?php echo get_theme_file_uri('public/images/Snow_Fun_Logo.svg'); ?>" class="homepic" alt="">
    	</div>
    	<div class="presentation-texte"> 
    		<h2 class="presentation-title">Snowfun</h2>   
			<?php if (get_theme_mod('home_text')): ?>
    		<p class=""><?= get_theme_mod('home_text'); ?></p>
			<?php endif; ?>
    	</div>
	</section>



	<section class="slider" id="slider" style="background-image: url('<?php echo get_theme_file_uri('public/images/Bande_bleu_av_montagne.svg'); ?>');">
		
		<div class="banner-slide">
    		<h2 class="gallerie">Galerie</h2>
		</div>

    	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    		<ol class="carousel-indicators">
    			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      		</ol>
      		<div class="carousel-inner">
      			<div class="carousel-item active">
        			<img src="<?php echo get_theme_file_uri('public/images/hors_pistes.jpg') ?>" class="d-block w-100" alt="...">
      			</div>
      			<div class="carousel-item">
        			<img src="<?php echo get_theme_file_uri('public/images/Visuel_01_960x540.jpg') ?>" class="d-block w-100" alt="...">
      			</div>
      			<div class="carousel-item">
        			<img src="<?php echo get_theme_file_uri('public/images/Val-dIsere.jpg') ?>" class="d-block w-100" alt="...">
      			</div>
    		</div>
    		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      			<span class="sr-only">Previous</span>
    		</a>
    		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      			<span class="carousel-control-next-icon" aria-hidden="true"></span>
      			<span class="sr-only">Next</span>
    		</a>
    	</div>
  	</section>


	<section class="box-home" id="box-home">


		<h2>Infos utiles</h2>

		<div class="boxs">
			<a href="http://www.valdisere.com/valdisere/fr/val_d_isere/webcams/webcams" target="_blank">
    			<div class="box" id="cam" style="background-image: url('<?php echo get_theme_file_uri('public/images/Webcam.svg'); ?>');">
					<p class="boxtitle">Webcam</p>
				</div>
			</a>

			<a href="http://france.lachainemeteo.com/meteo-france/ville/previsions-meteo-val-d-isere-5635-0.php" target="_blank">
    			<div class="box" id="meteo" style="background-image: url('<?php echo get_theme_file_uri('public/images/METEO.svg'); ?>');">
					<p class="boxtitle">Météo</p>
				</div>
			</a>


			<a href="http://www.valdisere.com/" target="_blank">
    			<div class="box" id="val" style="background-image: url('<?php echo get_theme_file_uri('public/images/Logo_val_disere.png'); ?>');">
					<p class="boxtitle">La station</p>
				</div>
			</a>

		</div>

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d179050.1107110243!2d6.975473539999691!3d45.476693269952094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47890bed4f3cb123%3A0x907ffeb4b0d3a7f3!2sSki%20Republic%20Portillo%20-%20Val%20d&#39;is%C3%A8re!5e0!3m2!1sfr!2sfr!4v1572693372497!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		
		<section class="offres" id="offre">
    		<h2 class="offres-title">Nos offres</h2>
    		<div class="offre">
      			<p class="price">250€</p>
      			<p class="price">310€</p>
      			<p class="price">400€</p>
    		</div>
    		<div class="corres">
      			<p class="price">Matinée 3h</p>
      			<p class="price">Matiné 4h</p>
     			<p class="price">Journée</p>
    		</div>
  		</section>


  	</section>

  	<section class="mono" id="mono" style="background-image: url('<?= get_theme_file_uri('public/images/Bande bleu.svg'); ?>');">
    	<h2>Nos moniteurs</h2>
    	<div class="mono-pics">
      		<img class="mono-pic"src="<?php echo get_theme_file_uri('public/images/tchenko.jpg'); ?>" alt="">
      		<img class="mono-pic"src="<?php echo get_theme_file_uri('public/images/remy3.jpg'); ?>" alt="">
      		<img class="mono-pic"src="<?php echo get_theme_file_uri('public/images/uffe 3.jpg'); ?>" alt="">
      		<img class="mono-pic"src="<?php echo get_theme_file_uri('public/images/aldo1.JPG'); ?>" alt="">
    	</div>
    	<div class="mono-descriptions">
      		<div class="mono-description"><p class="name">Tchenko</p><br><p class="text"></p></div>
      		<div class="mono-description"><p class="name">Remy</p><br><p class="text"></p></div>
      		<div class="mono-description"><p class="name">Uffe</p><br><p class="text"></p></div>
      		<div class="mono-description"><p class="name">Aldo</p><br><p class="text"></p></div>
    	</div>
  	</section>


	<section class="contact" id="contact">
  		<h3>Contactez-nous</h3>
  		<img class="contact-logo" src="<?= get_theme_file_uri('public/images/Snow_Fun_Logo.svg') ?>" alt="">
  		<p class="text-contact">Notre équipe SnowFun Val d'isère est à votre disposition pour répondre à toutes vos questions.</p>

<?php

$arg = [
    'pagename' => 'Contact'
];

$wp_query = new WP_Query($arg);

if ($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();

?>

<?php the_content();
endwhile; endif; ?>
		<div class="contact-info  mail">
			<img src="<?php echo get_theme_file_uri('public/images/Mail_picto.svg'); ?>" alt="" >
  			<div class="contact-pictotext">
    			<p class="contact-upper">Par mail</p>
    			<p class="contact-lower">info@snowfun.fr</p>
  			</div>
		</div>
		<div class="contact-info">
			<img src="<?php echo get_theme_file_uri('public/images/Phone_picto.svg'); ?>" alt="" >
			<div class="contact-pictotext">
    			<p class="contact-upper">Par téléphone</p>
    			<p class="contact-lower">+33 6 08 26 86 42</p>
  			</div>
		</div>
		<div class="contact-info">
			<img src="<?php echo get_theme_file_uri('public/images/Adresse_picto.svg'); ?>" alt="" >
  			<div class="contact-pictotext">
    			<p class="contact-upper">Adresse</p>
    			<p class="contact-lower">Le portillo 73150 Val d'isère</p>
  			</div>
		</div>
	</section>



	


<?php get_footer(); ?>



