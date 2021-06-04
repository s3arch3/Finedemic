# Finedemic
A collaborative effort.

README? No, don't. :P
















header.php uglikodes

<!-- //* signup modal
<!-- //* adds action and method to include stuff -->
<div id="modal-signup" class="modal">
    <div class="modal-content">
        <h4>Register</h4>
        <hr>
        Create your account. It's free and only takes a minute.
    </div>
    <!-- //* signup modal content start -->
    <form class="modal-content" action="includes/signup.inc.php" method="post">

        <!-- //! php code start -->
        <?php
        if (isset($_GET['error'])) {
            //* script for modal to appear when error
            echo '
            <script>
            $(document).ready(function(){
            $("#myModal_reg").modal("show");
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
                <script>
                $(document).ready(function(){
                $("#myModal_reg").modal("show");
                });
                </script>
            ';
            //* success message
            if ($_GET['signup'] == "success") {
                echo '<h5 class="bg-success text-center">Sign up was successfull! Please Log in!</h5>';
            }
        }
        //* adds a line after that error message
        echo '<br>';
        ?>
        <!-- //! php code end -->

        <div class="row">
            <form class="col s12">
                <!-- //* row 1 -->
                <div class="row">
                    <!-- //* first name -->
                    <div class="input-field col s6">
                        <input placeholder="First Name" id="first_name" type="text" class="validate">
                        <!-- <label for="first_name">First Name</label> -->
                    </div>
                    <!-- //* last name -->
                    <div class="input-field col s6">
                        <input placeholder="Last Name" id="last_name" type="text" class="validate">
                        <!-- <label for="last_name">Last Name</label> -->
                    </div>
                </div>
                <!-- //* row 2 -->
                <div class="row">
                    <!-- //* username -->
                    <div class="input-field col s12">
                        <input place="I am not editable" id="username" type="text" class="validate">
                        <label for="username">Username</label>
                    </div>
                </div>
                <!-- //* row 3 -->
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <!-- //* row 4 -->
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <!-- //* row 5 -->
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password-repeat" type="password" class="validate">
                        <label for="password">Confirm Password</label>
                    </div>
                </div>
            </form>
        </div>
    </form>
    <!-- //* signup modal content end -->
    <!-- //* added "signup-submit" to connect to the validation of signup.inc.php -->
    <div class="modal-footer">
        <a href="#!" type="submit" name="signup-submit" class="modal-close waves-effect waves-green btn">Register</a>
    </div>
</div> -->
