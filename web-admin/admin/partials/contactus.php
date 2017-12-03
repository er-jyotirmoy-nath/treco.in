<div class="row">
	<div class="col-md-12">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">Add Contact Us Details</div>

				<div class="panel-options"></div>
			</div>
			<div class="panel-body">
				<div id="rootwizard">

					<form class="form-horizontal" role="form" name="contactus_frm"
						id="testimonial_frm">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Email Address</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="pname" ng-model="conemail"
									placeholder="Email Address" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Phone Number</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" ng-model="comnumber"
									name="comnumber" placeholder="Phone Number" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Website</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" ng-model="conwebsite"
									name="conwebsite" placeholder="Website" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Facebook Url</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" ng-model="confacebook"
									name="confacebook" placeholder="Facebook Url" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Linkedin Url</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" ng-model="conlinkedin"
									name="conlinkedin" placeholder="Linkedin Url" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Tweeter Url</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" ng-model="contweeter"
									name="contweeter" placeholder="Tweeter Url" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Google Plus Url</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" ng-model="congogleplus"
									name="congoogleplus" placeholder="Google Plus Url" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Address</label>
							<div class="col-sm-10">
								<textarea class="form-control" placeholder="Company Address"
									rows="3" name="conaddress"  required ng-model="conaddress"></textarea>
							</div>
						</div>
						<button type="submit" class="btn btn-primary" ng-disabled="contactus_frm.$invalid || btndis" 
						ng-click="save_contact_details()">
							<i class="fa fa-save"></i> {{btntext}}
						</button>
						<br> 
					</form>
				</div>
			</div>
		</div>
	</div>
</div>