<!-- //TODO: the ocd guide of perfect formatting -->
<!-- //? 1. trim and format the code -->
<!-- //? 2. all comments are lowercase and without a period -->
<!-- //? 3. lines should have a comment explaining its basic sense -->
<!-- //? 4. php codes and echo are not indented on the first level -->
<!-- //? 5. one newline in between elements -->
<!-- //? 6. for longer elements, you can add a end of element on the bottom div -->
<!-- //? 7. tab length = 2 spaces -->

<?php
session_start();
?>

<!-- //* html document start -->
<!DOCTYPE html>

  <html lang="en">

  <head>
    <!-- //* favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
    <!-- //* tab title -->
    <title>Finedemic</title>
    <!-- //* charset -->
    <meta charset="utf-8">
    <!-- //* viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- //* link to css -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- //* style.css document -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //* font-awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- //* bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- //* googleapis jquery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- //* font-awesome -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- //* bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- //* bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>

  <style>
    .flex-column {
      max-width: 260px;
    }

    .container {
      background: #f9f9f9;
    }

    .img {
      margin: 5px;
    }

    .logo img {
      width: 150px;
      height: 250px;
      margin-top: 90px;
      margin-bottom: 40px;
    }
  </style>

  <!-- //* body start -->
  <body>
    <!-- //* navbar start -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
      <div class="container">
        <!-- //* supposed to be finedemic logo -->
        <a class="navbar-brand" href="index.php">
          <strong><em>Finedemic</em></strong>
        </a>

        <!-- //* for hamburger menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navi">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- //* navbar contents and conditionals -->
        <div class="collapse navbar-collapse" id="navi">
          <ul class="navbar-nav mr-auto">
            <?php
            //* checks if there is user_id in session?
            if (isset($_SESSION['user_id'])) {
              //* set navigation bar when logged in
              echo '
              <li class="nav-item">
                <a class="nav-link" href="reservation.php">New Reservation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view_reservations.php">View Reservations</a>
              </li>
              ';

              //* set navigation bar when logged in and role of admin
              if ($_SESSION['role'] == 2) {
                echo '
                <li class="nav-item">
                  <a class="nav-link" href="schedule.php">Edit Schedule</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tables.php">Edit Tables</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="view_tables.php">View Tables</a>
                </li>
                ';
              }
            }

            //* main page not logged in navigation bar
            else {
              echo '
              <li class="nav-item">
              <a class="nav-link" href="#aboutus">About Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#reservation">Reservation</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#footer">Find Us</a>
              </li>
              ';
            }
            ?>
          </ul>

          <?php
          //* log out button when user is logged in
          if (isset($_SESSION['user_id'])) {
            echo '
            <form class="navbar-form navbar-right" action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit" class="btn btn-outline-dark">Logout</button>
            </form>
            ';
          } else {
            echo '
            <div>
              <ul class="navbar-nav ml-auto">
                <li><a class="nav-link fa fa-sign-in" data-toggle="modal" data-target="#myModal_reg">&nbsp;Sign Up</a></li>
                <li><a class="nav-link fa fa-user-plus" data-toggle="modal" data-target="#myModal_login">&nbsp;Log In</a></li>
              </ul>
            </div>
            ';
          }
          ?>
        </div>
      </div>
    </nav>
    <!-- //* navbar end -->

    <!-- //* login modal start -->
    <div class="container">
      <!-- //* id property is for the navbar link modal trigger -->
      <div class="modal fade" id="myModal_login">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- //* modal header -->
            <div class="modal-header">
              <h4 class="modal-title">Login</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- //* modal body -->
            <div class="modal-body">
              <!-- //* php code validating user input -->
              <?php
              if (isset($_GET['error1'])) {
                //* script for modal to appear when error plus the message below
                echo '
                <script>
                  $(document).ready(function(){
                  $("#myModal_login").modal("show");
                  });
                </script>
                ';

                //* error handling of log in
                if ($_GET['error1'] == "emptyfields") {
                  echo '<h5 class="text-danger text-center">Fill all fields, please try again!</h5>';
                } else if ($_GET['error1'] == "error") {
                  echo '<h5 class="text-danger text-center">Error occured, please try again!</h5>';
                } else if ($_GET['error1'] == "wrongpwd") {
                  echo '<h5 class="text-danger text-center">Wrong password, please try again!</h5>';
                } else if ($_GET['error1'] == "error2") {
                  echo '<h5 class="text-danger text-center">Error occurred, Please try again!</h5>';
                } else if ($_GET['error1'] == "nouser") {
                  echo '<h5 class="text-danger text-center">Username or email not found, please try again!</h5>';
                }
              }

              echo '<br>';
              ?>

              <!-- //* the actual login form -->
              <div class="signin-form">
                <form action="includes/login.inc.php" method="post">
                  <!-- //* message -->
                  <p class="hint-text">If you have already an account please log in.</p>

                  <!-- //* username/email -->
                  <div class="form-group">
                    <input type="text" class="form-control" name="mailuid" placeholder="Username Or Email" required="required">
                  </div>

                  <!-- //* password -->
                  <div class="form-group">
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
                  </div>

                  <!-- //* login button -->
                  <div class="form-group">
                    <button type="submit" name="login-submit" class="btn btn-dark btn-lg btn-block">Log In</button>
                  </div>
                </form>
              </div>
            </div>

            <!-- //* modal footer -->
            <div class="modal-footer">
              <!-- //* close button -->
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //* login modal end -->

    <!-- //* register modal start -->
    <div class="container">
      <!-- //* id property is for the navbar link modal trigger -->
      <div class="modal fade" id="myModal_reg">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- //* modal header -->
            <div class="modal-header">
              <h4 class="modal-title">Register</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- //* modal body -->
            <div class="modal-body">
              <?php
              if (isset($_GET['error'])) {
                //* script for modal to appear when error plus the message below
                echo '
                <script>
                  $(document).ready(function(){
                  $("#myModal_reg").modal("show");
                  });
                </script>
                ';

                //* error handling for errors and success on signup form
                if ($_GET['error'] == "emptyfields") {
                  echo '<h5 class="bg-danger text-center">Fill all fields, please try again!</h5>';
                } else if ($_GET['error'] == "invalidemailusername") {
                  echo '<h5 class="bg-danger text-center">Username or email are taken!</h5>';
                } else if ($_GET['error'] == "invalidemail") {
                  echo '<h5 class="bg-danger text-center">Invalid email, please try again!</h5>';
                } else if ($_GET['error'] == "usernameemailtaken") {
                  echo '<h5 class="bg-danger text-center">Username or email is taken, please try again!</h5>';
                } else if ($_GET['error'] == "invalidusername") {
                  echo '<h5 class="bg-danger text-center">Invalid username, please try again!</h5>';
                } else if ($_GET['error'] == "invalidpassword") {
                  echo '<h5 class="bg-danger text-center">Invalid password, please try again!</h5>';
                } else if ($_GET['error'] == "passworddontmatch") {
                  echo '<h5 class="bg-danger text-center">Password must match, please try again!</h5>';
                } else if ($_GET['error'] == "error1") {
                  echo '<h5 class="bg-danger text-center">Error occurred, try again!</h5>';
                } else if ($_GET['error'] == "error2") {
                  echo '<h5 class="bg-danger text-center">Error occurred, try again!</h5>';
                }
              }

              if (isset($_GET['signup'])) {
                //* script for modal to appear when error plus the message below
                echo '
                <script>
                  $(document).ready(function(){
                  $("#myModal_reg").modal("show");
                  });
                </script>
                ';

                //* if signup success, show message
                if ($_GET['signup'] == "success") {
                  echo '<h5 class="bg-success text-center">Signup successful! please log in!</h5>';
                }
              }

              echo '<br>';
              ?>

              <!-- //* actual sign up form -->
              <div class="signup-form">
                  <form action="includes/signup.inc.php" method="post">
                  <!-- //* message -->
                  <p class="hint-text">Create your account. It's free and only takes a minute.</p>

                  <!-- //* username -->
                  <div class="form-group">
                    <input type="text" class="form-control" name="uid" placeholder="Username" required="required">
                    <small class="form-text text-muted">Username must be 4-20 characters long.</small>
                  </div>

                  <!-- //* email -->
                  <div class="form-group">
                    <input type="email" class="form-control" name="mail" placeholder="Email" required="required">
                  </div>

                  <!-- //* password -->
                  <div class="form-group">
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
                    <small class="form-text text-muted">Password must be 6-20 characters long.</small>
                  </div>

                  <!-- //* password repeat -->
                  <div class="form-group">
                    <input type="password" class="form-control" name="pwd-repeat" placeholder="Confirm Password" required="required">
                  </div>

                  <!-- //* terms of use and privacy policy -->
                  <div class="form-group">
                    <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>.</label>
                  </div>

                  <!-- //* register button -->
                  <div class="form-group">
                    <button type="submit" name="signup-submit" class="btn btn-dark btn-lg btn-block">Register</button>
                  </div>
                </form>

                <!-- //* sign in if account already exists -->
                <div class="text-center">Already have an account? <a href="#">Sign in.</a></div>
              </div>
            </div>

            <!-- //* modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //* register modal end -->