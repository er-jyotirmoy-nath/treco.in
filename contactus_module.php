<section id="contact">
    <div class="container" ng-controller="websitecontactCtrl">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    Contact Us
                </h2>
                <h3 class="section-subheading text-muted" ng-if="webcontactmsg">
                    <div class="alert alert-success alert-dismissable"> 
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
  <strong>Success!</strong> Someone from our team will get in touch with you.
</div>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input aria-invalid="false" class="form-control" data-validation-required-message="Please enter your name." ng-model="smotik.contactname" placeholder="Your Name *" required="required" type="text">
                                    <p class="help-block text-danger">
                                    </p>
                                </input>
                            </div>
                            <div class="form-group">
                                <input aria-invalid="false" class="form-control" data-validation-required-message="Please enter your email address." ng-model="smotik.contactemail" placeholder="Your Email *" required="" type="email">
                                    <p class="help-block text-danger">
                                    </p>
                                </input>
                            </div>
                            <div class="form-group">
                                <input aria-invalid="false" class="form-control" data-validation-required-message="Please enter your phone number." ng-model="smotik.contactphone" placeholder="Your Phone *" required="" type="tel">
                                    <p class="help-block text-danger">
                                    </p>
                                </input>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea aria-invalid="false" class="form-control" data-validation-required-message="Please enter a message." ng-model="smotik.message" placeholder="Your Message *" required="">
                                </textarea>
                                <p class="help-block text-danger">
                                </p>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="col-lg-12 text-center">
                            <div id="success">
                            </div>
                            <button class="btn btn-xl" ng-click="send_web_contact(smotik)" ng-disabled="disablebutton || sentMessage.$invalid" type="submit">
                                {{sendbutton}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
