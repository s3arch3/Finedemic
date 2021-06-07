<?php
require "header.php";
?>

<!-- //* call to action start -->
<header class="header">
  <div class="row">
    <!-- //* welcoming finedemic logo -->
    <div class="col-md-12 text-center">
      <a class="logo headerA"><img src="img/logo1.png" alt="logo" style="opacity: 1;"></a>
    </div>

    <!-- //* welcoming reserve now button -->
    <div class="col-md-12 text-center">
      <!-- //* takes you to reservation.php -->
      <br>
      <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-success btn-lg" id="reserve-now">RESERVE NOW</button>
    </div>
  </div>
</header>
<!-- //* call to action end -->

<!-- //* about us section start -->
<section id="aboutus">
  <!-- //* container start -->
  <div class="container">
    <h3 class="text-center section-title"><br><br><br>About Finedemic<br></h3>
    <!-- //* row start -->
    <div class="row">
      <!-- //* col start -->
      <div class="col-sm"><br><br>
        <!-- //* carousel start -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>

          <!-- //* carousel gallery -->
          <div class="carousel-inner">
            <div class="carousel-item active" id="img-carousel">
              <img class="d-block w-100" src="img/menu/3.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/menu/4.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/menu/5.jpg" alt="Third slide">
            </div>
          </div>

          <!-- //* carousel prev button -->
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <!-- //* carousel next button -->
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- //* carousel end -->
      </div>
      <!-- //* col end -->

      <!-- //* description on the right -->
      <div class="col-sm">
        <div class="arranging">
          <br>
          <hr>
          <h4 class="text-center">Our Story</h4><br>
          <p style="text-align: justify;"><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Finedemic is an online restaurant first established in 2021, by our founders Barruela, Brigoli, Garcia, Vibiesca and Villanueva. <br><br> During the pandemic of the COVID-19 people within the Philippines has struggled to live in isolation, as it is a well needed precaution to fight against the pandemic, people could not be of close proximity of each other, go on to travel places they have not been, or even buy food for daily consumption. Hence, by our founders Finedemic is created, to help those who struggle during these trying times, providing immaculate service for our customers.
            <br><br><br>
          </p>
          <hr>
        </div>
      </div>
    </div>
    <!-- //* row end -->
  </div>
  <!-- //* container end -->
</section>
<!-- //* about us section end -->

<!-- //* parallax area start -->
<div class="header2">
</div>
<!-- //* parallax area end -->

<!-- //* gallery start -->
<div class id="gallery">
  <div class="container">
    <h3 class="text-center section-title"><br><br><br>Gallery<br><br><br></h3>
    <div class="d-flex flex-row flex-wrap justify-content-center">
      <!-- //* images -->
      <div class="d-flex flex-column">
        <img src="img/menu/0.jpg" class="menu-margin img-fluid">
        <img src="img/menu/2.jpg" class="menu-margin img-fluid">
      </div>

      <!-- //* images -->
      <div class="d-flex flex-column">
        <img src="img/menu/3.jpg" class="menu-margin img-fluid">
        <img src="img/menu/4.jpg" class="menu-margin img-fluid">
      </div>

      <!-- //* images -->
      <div class="d-flex flex-column">
        <img src="img/menu/5.jpg" class="menu-margin img-fluid">
        <img src="img/menu/6.jpg" class="menu-margin img-fluid">
      </div>

      <!-- //* images -->
      <div class="d-flex flex-column">
        <img src="img/menu/7.jpg" class="menu-margin img-fluid">
        <img src="img/menu/8.jpg" class="menu-margin img-fluid">
      </div>
    </div>
  </div>
</div>
<!-- //* gallery end -->

<br><br>

<!-- //* call to action again start -->
<div class="col-md-12 text-center" id="reservation">
  <!-- //* title -->
  <h3 class="text-center section-title"><br><br><br>Reservation<br><br></h3>

  <!-- //* bg image -->
  <img src="img/16.jpg" class="container">
  <br><br><br>
  <!-- //* make a reservation now! -->
  <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-lg" id="make-a-reservation">MAKE A RESERVATION</button>
</div>
<!-- //* call to action again end -->

<br><br>

<!-- //* parallax area start -->
<div class="header2">
</div>
<!-- //* parallax area end -->

<!-- //* main page map section start -->
<section class="map" id="footer">
  <!-- //* container start -->
  <div class="container">
    <!-- //* title -->
    <h3 class="text-center section-title"><br><br>Find us!</h3><br>
    <!-- //* google maps -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.2656526508868!2d121.03012032716661!3d14.754057761020642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b1cc9c9c83e9%3A0x303a03298da24ddb!2sUniversity%20of%20Caloocan%20City%20-%20Congressional%20Campus!5e0!3m2!1sen!2sph!4v1622742653026!5m2!1sen!2sph" style="width:100%;  height:250px; border:0;" allowfullscreen></iframe>
    <!-- //* row start -->
    <div class="row staff">
      <!-- //* col start -->
      <div class="col">
        <h4><strong>Opening Hours</strong></h4>

        <!-- //* form start -->
        <div class="signup-form">
          <form action="#footer" method="post">
            <!-- //* enter date -->
            <div class="form-group">
              <label>Enter Date</label>
              <input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>

            <!-- //* check open time -->
            <div class="form-group">
              <button type="submit" name="check_schedule" class="btn btn-dark btn-block" id="make-a-reservation">CHECK OPEN TIME</button>
            </div>
          </form>

          <!-- //* php code to check availability -->
          <?php
          if (isset($_POST['check_schedule'])) {
            require 'includes/dbh.inc.php';
            $date = $_POST['date'];
            $sql = "SELECT * FROM schedule WHERE date = '$date'";
            $result = $conn->query($sql);
            if ($result->num_rows == 1) {
              while ($row = $result->fetch_assoc()) {
                echo '
                <table class="table table-sm table-striped table-dark text-center">
                  <thead>
                    <tr>
                      <th scope="col">Date</th>
                      <th scope="col">Open Time</th>
                      <th scope="col">Close Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><em>' . $date . '</em></th>
                      <td>' . $row['open_time'] . '</td>
                      <td>' . $row['close_time'] . '</td>
                    </tr>
                  </tbody>
                </table>
                ';
              }
            } else {
              echo '
              <table class="table table-striped table-dark text-center">
                <thead>
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Open Time</th>
                    <th scope="col">Close Time</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><em>' . $date . '</em></th>
                    <td>12:00</td>
                    <td>00:00</td>
                  </tr>
                </tbody>
              </table>
              ';
            }

            //* close connection
            mysqli_close($conn);
          }
          ?>
        </div><br>
        <!-- //* form end -->
      </div>
      <!-- //* col end -->
      <div class="col">
        <h4 class="text-right"><strong>Visit Us</strong></h4>
        <p class="text-right">Finedemic<br><i class="fa fa-map-marker"></i>&nbsp; Congressional Road <br>UCC <br><br>Email: finedemic@mail.com<br>Phone: (02) 8896-9191</p>
      </div>
    </div>
    <!-- //* row end -->
  </div>
  <!-- //* container end -->
</section>
<!-- //* main page map section end -->

<?php
require "footer.php";
?>