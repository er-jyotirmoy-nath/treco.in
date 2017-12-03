<div class="row">
	<div class="col-md-12">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">Add Testimonial</div>

				<div class="panel-options"></div>
			</div>
			<div class="panel-body">
				<div id="rootwizard">

					<form class="form-horizontal" role="form" name="testimonial_frm"
						id="testimonial_frm">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Person
								Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="pname" name="pname" ng-model="pname"
									placeholder="Name" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Designation</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="pdesignation" ng-model="pdesignation"
									name="pdesignation" placeholder="Designation" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Testimonial</label>
							<div class="col-sm-10">
								<textarea class="form-control" placeholder="Testimonial"
									rows="3" name="ptestimonial" id="ptestimonial" required ng-model="ptestimonial"></textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label> <input type="checkbox" name="tvisible"  ng-model="tvisible"
										ng-true-value="'1'" ng-false-value="'0'"> Visible
									</label>
								</div>

							</div>
						</div>
                                            <button type="submit" class="btn btn-primary" ng-disabled="btndis|| testimonial_frm.$invalid" ng-click="save_testimonial()">
							<i class="fa fa-save"></i> {{btntext}}
						</button>
						<br> 
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="content-box-large">
	<div class="panel-heading">
		<div class="panel-title">Testimonials</div>
	</div>
	<div class="panel-body">
	<div ui-grid="gridOptions" ui-grid-pagination="" class="myGrid"></div>
	<hr>
	<testimonial-details testimonialdetails="testimonialdetails" ng-show="testimonialdetails.id"></testimonial-details>
	</div>
</div>