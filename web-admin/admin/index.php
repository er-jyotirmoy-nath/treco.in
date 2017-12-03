<!DOCTYPE html>
<html ng-app="smotikapp">
    <head>
        <title>SMOTIK Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/angular-bootstrap-lightbox.css">
        <link rel="stylesheet" href="http://ui-grid.info/release/ui-grid.css" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body ng-controller="trecoCtrl">
        <div class="header" >
            <div class="container">
                <div class="row" >
                    <div class="col-md-5">
                        <!-- Logo -->
                        <div class="logo">
                            <h1>
                                <a href="index.html">TRECO Admin Panel</a>
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav
                                class="collapse navbar-collapse bs-navbar-collapse navbar-right"
                                role="navigation">
                                <ul class="nav navbar-nav" ng-if="location.path() !== '/login'">
                                    <li class="dropdown"><a data-target="#" class="dropdown-toggle"
                                                            data-toggle="dropdown">My Account <b class="caret"></b></a>
                                        <ul class="dropdown-menu animated fadeInUp">

                                            <li><a href=""  ng-click="logout()" >Logout</a></li>
                                        </ul></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content" >
            <div class="row">
                <div class="col-md-2" ng-if="location.path() !== '/login'">
                    <navigation-bar></navigation-bar>
                </div>
                <div class="col-md-10">
                    <ui-view></ui-view>
                </div>
            </div>
        </div>


        <footer ng-if="location.path() !== '/login'">
            <div class="container">

                <div class="copy text-center">
                    Copyright 2017 <a href='#'>www.treco.co.in</a>
                </div>
            
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>
        <script src="js/angular.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-utils/0.1.1/angular-ui-utils.min.js"></script>
        <script src="js/angular/tinymce.js"></script>
        <script src="js/angular-ui-router.min.js"></script>
        <script src="js/ui-bootstrap-tpls-2.5.0.min.js"></script>
        <script src="js/angular-sanitize.js"></script>
        <script type="text/javascript" src="js/angular-bootstrap-lightbox.js"></script>
        <script src="http://ui-grid.info/release/ui-grid.js"></script>
        
        <script src="app.js"></script>
        <script type="text/javascript" src="controller/main.js"></script>
        <script src="controller/news.js"></script>
        <script src="controller/blogs.js"></script>
        <script src="controller/clients.js"></script>
        <script src="controller/community.js"></script>
        <script src="controller/testimonials.js"></script>
        <script src="controller/products.js"></script>
        <script src="controller/banners.js"></script>
        <script type="text/javascript" src="controller/contact.js"></script>
        <script src="controller/aboutus.js"></script>
        <script src="controller/solutions.js"></script>
      <!-- <script src="js/login_script.js"></script> -->
        <script src="directives/mainDirective.js"></script>
        <script src="directives/news_directive.js"></script>
        <script src="directives/clients_directive.js"></script>
        <script src="directives/testimonial_details.js"></script>
        <script src="services/logincheck.js"></script>
        <script src="js/custom.js"></script>
        <<script src="controller/login.js"></script>
    </body>
</html>
