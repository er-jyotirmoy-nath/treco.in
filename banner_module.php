<header id="myCarousel" class="carousel slide">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php $new_web_load->imageSlideCounter(); ?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<?php $new_web_load->imageSlider(); ?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev" ng-non-bindable><span
			class="icon-prev"></span></a> <a class="right carousel-control"
			href="#myCarousel" data-slide="next"><span class="icon-next" ng-non-bindable></span></a>
	</header>