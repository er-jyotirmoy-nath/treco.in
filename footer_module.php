<div ng-controller="footerCtrl">

    <div class="container-footer">

        <div class="container">

            <div class="row">

                <div class="col-sm-3">

                    <h2 class="fhdg"> Useful Links</h2>

                    <div class="fmenu">

                        <ul>

                            <li>

                                <a href="index.php"> Home</a>

                            </li>

                            <li>

                                <a href="about.php"> About US</a>

                            </li>



                            <li>

                                <a href="design-your-home.php"> Design Your Home</a>

                            </li>

                            <li>

                                <a href="http://treco.in/demo/index.php" target="_blank"> Digital Home Demo</a>

                            </li>

                            <li>

                                <a href="customer-service.php"> Customer Service</a>

                            </li>

                        </ul>

                    </div>

                </div>

                <div class="col-sm-3">

                    <h2 class="fhdg">

                        About Us

                    </h2>

                    <div class="divider">

                    </div>

                    <p ng-bind-html="about_message">



                    </p>

                </div>

                <div class="col-sm-3">

                    <h2 class="fhdg">

                        Get in touch

                    </h2>

                    <p>

                        <strong>

                            Address :

                        </strong>

                        {{conaddress}}

                    </p>

                    <p>

                        <strong>

                            Phone No. :

                        </strong>

                        {{comnumber}}

                    </p>

                    <p>

                        <strong>

                            Email ID :

                        </strong>

                        {{conemail}}

                    </p>

                    <p>

                        <strong>

                            Website :

                        </strong>

                        {{conwebsite}}

                    </p>

                </div>

                <div class="col-sm-3">
                <social-buttons confacebook="confacebook" contweeter="contweeter" congogleplus:"congogleplus" conlinkedin="conlinkedin"></social-buttons>

                </div>

            </div>

        </div>

    </div>

    <div class="container">

        <footer>

            <div class="col-md-6 text-left">

                Copyright © 2017 - Treco, Design & Developed by

                <strong>

                    Jyotirmoy Nath

                </strong>

            </div>

            <div class="col-md-6">

                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li>

                            <a href="#">

                                Home

                            </a>

                        </li>

                        <li>

                            <a href="#">

                                Career

                            </a>

                        </li>

                        <li>

                            <a class="last" href="http://treco.in/index.php#contact" blank="_target">

                                Contact

                            </a>

                        </li>

                    </ul>

                </div>

            </div>

        </footer>

    </div>

</div>

<script src="js/jquery.js">

</script>

<!-- Bootstrap Core JavaScript -->

<script src="js/bootstrap.min.js">

</script>

<script src="js/login.js">

</script>

<script src="js/angular.js">

</script>

<script src="js/angular-modal-service.min.js" type="text/javascript">

</script>

<script src="js/ui-bootstrap-tpls-2.5.0.min.js">

</script>

<script src="js/angular-sanitize.js">

</script>

<script src="app.js">

</script>
<script src="controller/prod_banner.js"></script>
<script type="text/javascript" src="controller/footer_js.js"></script>

<script type="text/javascript" src="controller/solution_module_js.js"></script>

<script type="text/javascript" src="controller/designhome_js.js"></script>
<script type="text/javascript" src="controller/websitecontact_js.js"></script>
<script type="text/javascript" src="controller/blogdetailsCtrl.js"></script>
<script type="text/javascript" src="directives/footerDirective.js"></script>