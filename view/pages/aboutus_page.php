<?php require_once 'model/aboutus_model.php'; ?>
<div class="container inner-height">

		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header hdg">About Us</h2>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="img/about.jpg" alt="">
			</div>
			<div class="col-md-6 abt-txt">
				<?php $new_aboutus->getAboutUs(); ?>
			</div>
		</div>

	</div>