<?php
require "header.php";
?>

<br><br>
<div class="container">
  <h3 class="text-center"><br>Edit Tables<br></h3>
  <div class="col-md-6 offset-md-3">
    <!-- //* checks if there is user_id in the session -->
    <?php if (isset($_SESSION['user_id'])) {

      //* checks if the user is an admin (role-id=2)
      if ($_SESSION['role'] == 2) {
        echo '<p class="text-white bg-dark text-center">Set the number of tables for a specific date</p><br>';

        //* checks for errors
        if (isset($_GET['error4'])) {
          if ($_GET['error4'] == "sqlerror1") {
            echo '<h5 class="bg-danger text-center">Error</h5>';
          }
          if ($_GET['error4'] == "emptyfields") {
            echo '<h5 class="bg-danger text-center">Error, Empty fields</h5>';
          }
        }

        //* if the table adding is successful
        if (isset($_GET['tables'])) {
          if ($_GET['tables'] == "success") {
            echo '<h5 class="bg-success text-center">Tables was successfully submitted.</h5>';
          }
        }

        //* creates table form markup
        echo '
      <div class="signup-form">
        <form action="includes/tables.inc.php" method="post">

          <div class="form-group">
            <label>Enter Date</label>
            <input type="date" class="form-control" name="date_tables" placeholder="Date">
          </div>

          <div class="form-group">
            <label>Number of Tables</label>
            <input type="number" class="form-control" min="1" name="num_tables" required="required">
          </div>

          <div class="form-group">
            <button type="submit" name="tables" class="btn btn-dark btn-lg btn-block">Submit Tables</button>
          </div>

        </form>
        <br><br>
      </div>
      ';
      }
    } else {
      //* no proper permission to visit this site
      echo '<p class="text-center"><br>You have no permission!<br><br></p>';
    }
    ?>
  </div>
</div>
<br><br>

<?php
require "footer.php";
?>