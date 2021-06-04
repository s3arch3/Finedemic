<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <!-- //* google icon fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- //* materialize css -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- //* let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- //* page title -->
    <title>Finedemic</title>
    <!-- //* favicon -->
    <link rel="icon" type="icons/png" sizes="32x32" href="img/icons/favicon.png" />
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> -->
</head>

<body>

    <!-- //* navbar -->
    <section id="home"></section>
    <nav class="orange z-depth-2">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#home" class="brand-logo"><img src="img/icons/finedemic-blk.png" height="63px"></a>
                <a href="#!" data-target="mobile-demo" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#about" class="black-text">About Us</a></li>
                    <li><a href="#menu" class="black-text">Menu</a></li>
                    <li><a href="#" class="black-text">Reservation</a></li>
                    <li><a href="#find" class="black-text">Find Us</a></li>
                    <li><a href="#modal-signup" class="black-text modal-trigger"><i class="material-icons left">person</i><b>Sign
                                Up</b></a></li>
                    <li><a href="#modal-login" class="black-text modal-trigger"><i class="material-icons left">person_add</i><b>Log
                                In</b></a></li>
                </ul>
                <!-- //* sidenav trigger -->
                <ul class="sidenav" id="mobile-demo">
                    <li><a href="#about" class="black-text">About Us</a></li>
                    <li><a href="#menu" class="black-text">Menu</a></li>
                    <li><a href="#" class="black-text">Reservation</a></li>
                    <li><a href="#find" class="black-text">Find Us</a></li>
                    <li><a href="#modal-signup" class="black-text modal-trigger"><i class="material-icons left">person</i><b>Sign
                                Up</b></a></li>
                    <li><a href="#modal-login" class="black-text modal-trigger"><i class="material-icons left">person_add</i><b>Log
                                In</b></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- //* the modal screen that appears when signin button is clicked -->
    <div class="container">
        <!-- //* the modal -->
        <div class="modal fade" id="modal-signup">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- //* modal header which contains "Login" and "x" button -->
                    <div class="modal-header">
                        <!-- //* register text -->
                        <h4 class="modal-title">Register</h4>
                    </div>
                    <!-- //* modal body -->
                    <div class="modal-body">
                        <!-- //* php code to show login screen and error handling of credentials -->
                        <!-- //* script for modal to appear when error -->
                        <?php
                        if (isset($_GET['error'])) {
                            echo '
                            <script type="text/javascript">
                            $(document).ready(function() {
                                $("#modal-signup").modal("show");
                            });
                            </script>
                            ';
                            //* error handling of log in
                            if ($_GET['error'] == "emptyfields") {
                                echo '<h5 class="bg-danger text-center">Fill all fields, Please try again!</h5>';
                            } else if ($_GET['error'] == "invalidemailusername") {
                                echo '<h5 class="bg-danger text-center">Username or Email are taken!</h5>';
                            } else if ($_GET['error'] == "invalidemail") {
                                echo '<h5 class="bg-danger text-center">Invalid Email, Please try again!</h5>';
                            } else if ($_GET['error'] == "usernameemailtaken") {
                                echo '<h5 class="bg-danger text-center">Username or email is taken, Please try again!</h5>';
                            } else if ($_GET['error'] == "invalidusername") {
                                echo '<h5 class="bg-danger text-center">Invalid Username, Please try again!</h5>';
                            } else if ($_GET['error'] == "invalidpassword") {
                                echo '<h5 class="bg-danger text-center">Invalid password, Please try again!</h5>';
                            } else if ($_GET['error'] == "passworddontmatch") {
                                echo '<h5 class="bg-danger text-center">Password must match, Please try again!</h5>';
                            } else if ($_GET['error'] == "error1") {
                                echo '<h5 class="bg-danger text-center">Error Occured, Try again!</h5>';
                            } else if ($_GET['error'] == "error2") {
                                echo '<h5 class="bg-danger text-center">Error Occured, Try again!</h5>';
                            }
                        }
                        //* script for modal to appear when success
                        if (isset($_GET['signup'])) {
                            echo '
                                <script type="text/javascript">
                                $(document).ready(function(){
                                $("#modal-signup").modal("show");
                                });
                                </script>
                            ';
                            //* success message
                            if ($_GET['signup'] == "success") {
                                echo '<h5 class="bg-success text-center">Sign up was successful! Please Log in!</h5>';
                            }
                        }
                        //* adds a line after that error message
                        echo '<br>';
                        ?>
                        <!-- //* this is for the signup form -->
                        <div class="signup-form">
                            <form action="includes/signup.inc.php" method="post">
                                <!-- //* welcoming message for create account -->
                                <p class="hint-text">Create your account. It's free and only takes a minute.</p>
                                <!-- //* username area -->
                                <div class="form-group">
                                    <input type="text" class="form-control" name="uid" placeholder="Username" required="required">
                                    <small class="form-text text-muted">Username must be 4-20 characters long</small>
                                </div>
                                <!-- //* email area -->
                                <div class="form-group">
                                    <input type="email" class="form-control" name="mail" placeholder="Email" required="required">
                                </div>
                                <!-- //* password area -->
                                <div class="form-group">
                                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
                                    <small class="form-text text-muted">Password must be 6-20 characters long</small>
                                </div>
                                <!-- //* password repeat area -->
                                <div class="form-group">
                                    <input type="password" class="form-control" name="pwd-repeat" placeholder="Confirm Password" required="required">
                                </div>
                                <!-- //* terms of use and privacy area -->
                                <div class="form-group">
                                    <label><input type="checkbox" required="required" /><span>I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</span></label>
                                </div>
                                <!-- //* click to submit/register -->
                                <div class="form-group">
                                    <button type="submit" name="signup-submit" class="btn btn-dark btn-lg btn-block">Register Now</button>
                                </div>
                            </form>
                            <!-- //* gets the user to sign in modal -->
                            <div class="text-center">Already have an account? <a href="#">Sign in</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>