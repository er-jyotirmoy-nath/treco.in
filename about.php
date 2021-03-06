
<!DOCTYPE html>
<html lang="en" ng-app="smotik_app">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TRECO Engineering & Innovation </title>
  <link href="img/favicon.png" type="image/x-icon" rel="icon" />

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
  <?php require_once 'view/pages/aboutus_page.php';?>

  <!-- Footer -->

  <?php require_once 'footer_module.php';?>

  <!-- BEGIN # MODAL LOGIN -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
</button>
        </div>

        <div>
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#customer" aria-controls="customer" role="tab" data-toggle="tab">Customer</a></li>
            <li role="presentation"><a href="#employee" aria-controls="employee" role="tab" data-toggle="tab">Employee</a></li>
          </ul>

          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="customer">

              <div id="div-forms">

                <form id="login-form">
                  <div class="modal-body">
                    <h3>Customer Login</h3>

                    <div id="div-login-msg">
                      <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                      <span id="text-login-msg">Type your username and password.</span>
                    </div>

                    <input id="login_email" class="form-control" type="text" placeholder="E-Mail" required>
                    <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                    <div class="checkbox"><label><input type="checkbox"> Remember me</label></div>
                  </div>

                  <div class="modal-footer">
                    <div><button type="submit" class="btn btn-primary btn-lg btn-block">Login</button></div>
                    <div>
                      <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                      <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                    </div>
                  </div>
                </form>

                <form id="lost-form" style="display:none;">
                  <div class="modal-body">
                    <div id="div-lost-msg">
                      <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                      <span id="text-lost-msg">Type your e-mail.</span>
                    </div>
                    <input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
                  </div>

                  <div class="modal-footer">
                    <div><button type="submit" class="btn btn-primary btn-lg btn-block">Send</button></div>
                    <div>
                      <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                      <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                    </div>
                  </div>
                </form>

                <form id="register-form" style="display:none;">
                  <div class="modal-body">
                    <div id="div-register-msg">
                      <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                      <span id="text-register-msg">Register an account.</span>
                    </div>
                    <input id="register_username" class="form-control" type="text" placeholder="Your Name" required>
                    <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                    <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                  </div>

                  <div class="modal-footer">
                    <div><button type="submit" class="btn btn-primary btn-lg btn-block">Register</button></div>
                    <div>
                      <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                      <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                    </div>
                  </div>
                </form>

              </div>

            </div>
            <div role="tabpanel" class="tab-pane" id="employee">

              <div id="employee-forms">

                <form id="login-employee">
                  <div class="modal-body">
                    <h3>Employee Login</h3>

                    <div id="employee-div-login-msg">
                      <div id="employee-icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                      <span id="employee-text-login-msg">Type your username and password.</span>
                    </div>

                    <input id="employee_login_email" class="form-control" type="text" placeholder="E-Mail" required>
                    <input id="employee_login_password" class="form-control" type="password" placeholder="Password" required>
                    <div class="checkbox"><label><input type="checkbox"> Remember me</label></div>
                  </div>

                  <div class="modal-footer">
                    <div><button type="submit" class="btn btn-primary btn-lg btn-block">Login</button></div>
                    <div>
                      <button id="employee_login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                      <button id="employee_login_register_btn" type="button" class="btn btn-link">Register</button>
                    </div>
                  </div>
                </form>

                <form id="employee-lost-form" style="display:none;">
                  <div class="modal-body">
                    <div id="employee-div-lost-msg">
                      <div id="employee-icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                      <span id="employee-text-lost-msg">Type your e-mail.</span>
                    </div>
                    <input id="employee_lost_email" class="form-control" type="text" placeholder="E-Mail" required>
                  </div>

                  <div class="modal-footer">
                    <div><button type="submit" class="btn btn-primary btn-lg btn-block">Send</button></div>
                    <div>
                      <button id="employee_lost_login_btn" type="button" class="btn btn-link">Log In</button>
                      <button id="employee_lost_register_btn" type="button" class="btn btn-link">Register</button>
                    </div>
                  </div>
                </form>

                <form id="employee-register-form" style="display:none;">
                  <div class="modal-body">
                    <div id="employee-div-register-msg">
                      <div id="employee-icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                      <span id="employee-text-register-msg">Register an account.</span>
                    </div>
                    <input id="employee_register_username" class="form-control" type="text" placeholder="Your Name" required>
                    <input id="employee_register_email" class="form-control" type="text" placeholder="E-Mail" required>
                    <input id="employee_register_password" class="form-control" type="password" placeholder="Password" required>
                  </div>

                  <div class="modal-footer">
                    <div><button type="submit" class="btn btn-primary btn-lg btn-block">Register</button></div>
                    <div>
                      <button id="employee_register_login_btn" type="button" class="btn btn-link">Log In</button>
                      <button id="employee_register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                    </div>
                  </div>
                </form>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

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
