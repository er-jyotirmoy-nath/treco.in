<div class="container-grey">
		<div class="container">
			<div class="row">
				<h2 class="hdg">Testimonials</h2>
				<p>&nbsp;</p>
				<div id="myCarousel1" class="carousel slide text-center"
					data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php $new_web_load->testimonialSliderCounter(); ?>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<?php $new_web_load->testimonialSliders(); ?>						
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel1" role="button"
						data-slide="prev"> <span
						class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a> <a class="right carousel-control" href="#myCarousel1"
						role="button" data-slide="next"> <span
						class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>
		</div>
	</div>