<!DOCTYPE html>
<html lang="en" ng-app="smotik_app">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>TRECO Engineering & Innovation </title>
        <link href="img/favicon.png" type="image/x-icon" rel="icon"/>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/agency.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <!-- Navigation -->
        <?php require_once 'includes/navigation_web.php'; ?>


        <!-- Page Content -->
       <?php require_once 'view/pages/smart-solutions.php'; ?>
        <!-- Footer -->
         <?php require_once 'solution_contactus_module.php'; ?>
        <?php require_once 'footer_module.php'; ?>


        <!-- BEGIN # MODAL LOGIN -->
        <?php include_once 'login_modal.html'; ?>



        <!-- /.container -->

        <!-- jQuery -->
       

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>

    </body>
</html>