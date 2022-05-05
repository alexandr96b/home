<?php include('parts/header.php'); ?>

<section class="b-promo d-flex justify-content-end">
	<div class="b-promo__img">
		<video class="promo-video" width="100%" height="auto" loop="loop" preload="auto" autoplay="autoplay" muted="muted">
			<source src="images/video.mp4" type="video/mp4">
		</video>
	</div>
	<div class="b-promo__content">
		<div class="container">
			<div class="b-promo__content-title">Ihr Makler für<br/> Wohn-Immobilien<br/> in Berlin </div>
		</div>
	</div>
</section>

<div class="b-blocks">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
				<div class="b-block">
					<div class="b-block__img">
						<img src="images/b1.svg" alt="">
					</div>
					<p>Über 12 Jahre Erfahrung<br/>
						als Makler für Wohn-Immobilien</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
				<div class="b-block">
					<div class="b-block__img">
						<img src="images/b2.svg" alt="">
					</div>
					<p>Kostenlose<br/>
						Immobilienbewertung</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
				<div class="b-block">
					<div class="b-block__img">
						<img src="images/b3.svg" alt="">
					</div>
					<p>Unter den TOP 10 der besten<br/>
						Maklerunternehmen in Berlin</p>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="b-about">
	<div class="container">
		<div class="b-about__img">
			<img src="images/img1.jpg" alt="">
		</div>
		<div class="b-about__text">
			<div class="b-title">Über Uns</div>
			<p>Die Firma HOMES & SERVICE ist ein im Jahr 2017 gegründetes Dienstleistungs- und Maklerunternehmen.</p>
			<p>Wohnimmobilien in Berlin zu verkaufen, sowie die Erst- und Nachmietersuche zu gestalten ist unsere Kernkompetenz.</p>
			<p>SERVICE wird bei uns groß geschrieben und umfasst insbesondere die Bereiche Unterlagen-Management, die Vermittlung und Koordination von Sanierungs- / Renovierungsarbeiten und die Gebäudereinigung.</p>
			<button class="b-btn ripple"><span>Mehr erfahren</span></button>
		</div>
	</div>
</section>


<section class="b-price">
	<div class="container">
		<div class="b-price__content">
			<div class="b-price__content-wrap">
				<div class="b-title b-title_white">Sie möchten den Wert Ihrer Immobilie wissen?</div>
				<button class="b-btn ripple b-btn_white"><span>JETZT BEWERTEN LASSEN</span></button>
			</div>
		</div>
	</div>
</section>


<section class="b-impression">
	<div class="b-title">Impressionen</div>
	<div class="b-impression__slider swiper-container">
		<div class="swiper-wrapper">
			<div class="b-impression__slider-col swiper-slide">
				<div class="b-impression__item">
					<img src="images/s1.jpg" alt="">
					<div class="b-impression__item-wrap">
						<div class="b-impression__item-name">Geräumiges Loft im Zentrum Berlins *ERSTBEZUG*</div>
						<a href="#" class="b-impression__item-btn">Zur Immobilie</a>
					</div>
				</div>
			</div>
			<div class="b-impression__slider-col swiper-slide">
				<div class="b-impression__item">
					<img src="images/s2.jpg" alt="">
					<div class="b-impression__item-wrap">
						<div class="b-impression__item-name">Geräumiges Loft im Zentrum Berlins *ERSTBEZUG*</div>
						<a href="#" class="b-impression__item-btn">Zur Immobilie</a>
					</div>
				</div>
			</div>
			<div class="b-impression__slider-col swiper-slide">
				<div class="b-impression__item">
					<img src="images/s3.jpg" alt="">
					<div class="b-impression__item-wrap">
						<div class="b-impression__item-name">Geräumiges Loft im Zentrum Berlins *ERSTBEZUG*</div>
						<a href="#" class="b-impression__item-btn">Zur Immobilie</a>
					</div>
				</div>
			</div>
			<div class="b-impression__slider-col swiper-slide">
				<div class="b-impression__item">
					<img src="images/s4.jpg" alt="">
					<div class="b-impression__item-wrap">
						<div class="b-impression__item-name">Geräumiges Loft im Zentrum Berlins *ERSTBEZUG*</div>
						<a href="#" class="b-impression__item-btn">Zur Immobilie</a>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-btn btn-next icon-i-chevron-right"></div>
		<div class="swiper-btn btn-prev icon-i-chevron-left"></div>
	</div>
</section>


<?php include('parts/reviews.php'); ?>

<?php include('parts/form.php'); ?>

<?php include('parts/footer.php'); ?>