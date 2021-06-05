<?php
require "header.php";
?>

<br><br>
<div class="container">
  <h3 class="text-center"><br>Edit Schedule<br></h3>
    <div class="col-md-6 offset-md-3">
      <?php
      //* checks if there's a user_id in the session
      if (isset($_SESSION['user_id'])) {

        //* if the role_id of the user is 2 (admin)
        if ($_SESSION['role'] == 2) {
          echo '<p class="text-white bg-dark text-center">Set the schedule for a specific date</p><br>';

          //* if an error occured
          if (isset($_GET['error5'])) {

            //* if the error is sqlerror1
            if ($_GET['error5'] == "sqlerror1") {
              echo '<h5 class="bg-danger text-center">Error on the database occurred.</h5>';
            }

            //* if the error is emptyfields
            if ($_GET['error5'] == "emptyfields") {
              echo '<h5 class="bg-danger text-center">Error, please fill empty fields.</h5>';
            }
          }

          //* if no error occurred
          if (isset($_GET['schedule'])) {
            if ($_GET['schedule'] == "success") {
            echo '<h5 class="bg-success text-center">Schedule was successfully submitted.</h5>';
            }
          }

        //* creates the schedule form
        echo '
        <div class="signup-form">
          <form action="includes/schedule.inc.php" method="post">

            <div class="form-group">
              <label>Enter Date</label>
              <input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>

            <div class="form-group">
              <label>Open Time</label>
              <input type="time" class="form-control" name="opentime" required="required">
            </div>

            <div class="form-group">
              <label>Close Time</label>
              <input type="time" class="form-control" name="closetime" required="required">
            </div>

            <div class="form-group">
              <button type="submit" name="schedule" class="btn btn-dark btn-lg btn-block">Submit Schedule</button>
            </div>

          </form>
          <br><br>
        </div>
        ';
        }
      } else {
        //* no proper privilege to be in the website/no user_id on the session
        echo '<p class="text-center"><br>You do not have proper privileges to be here.<br><br></p>';
      }
      ?>
    </div>
</div>
<br><br>

<?php
require "footer.php";
?>