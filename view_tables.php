<?php
require "header.php";
?>

<br><br>
<div class="container">
  <h3 class="text-center"><br>View Tables<br></h3>
  <?php
  //* checks if there is user_id in session
  if (isset($_SESSION['user_id'])) {
    if (isset($_GET['delete'])) {
      if ($_GET['delete'] == "error"){
        echo '<h5 class="bg-danger text-center">Error!</h5>';
      }
      if ($_GET['delete'] == "success"){
        echo '<h5 class="bg-success text-center">Delete was successful.</h5>';
      }
    }
    require 'includes/view.tables.inc.php';
  } else {
    echo '<p class="text-center"><br>You have no permission.<br><br></p>';
  }
  ?>
</div>
<br><br>

<?php
require "footer.php";
?>