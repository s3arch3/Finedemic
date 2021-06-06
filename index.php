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
      <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-success btn-lg"><em>Reserve Now!</em></button>
    </div>
  </div>
</header>
<!-- //* call to action end -->

<!-- //* about us section start -->
<section id="aboutus">
  <!-- //* container start -->
  <div class="container">
    <h3 class="text-center"><br>Finedemic</h3>
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
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/3.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/4.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/5.jpeg" alt="Third slide">
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
          <p><br>
            The Finedemic is an online restaurant first established in 2021, by our founders Barruela, Brigoli, Garcia, Vibiesca and Villanueva. During the pandemic of the COVID-19 people within the Philippines has struggled to live in isolation, as it is a well needed precaution to fight against the pandemic, people could not be of close proximity of each other, go on to travel places they have not been, or even buy food for daily consumption. Hence, by our founders Finedemic is created, to help those who struggle during these trying times, providing immaculate service for our customers.
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
<div class id="gallery"><br>
  <div class="container">
    <h3 class="text-center"><br>Gallery<br><br></h3>
    <div class="d-flex flex-row flex-wrap justify-content-center">
      <!-- //* images -->
      <div class="d-flex flex-column">
        <img src="img/1.jpg" class="img-fluid">
        <img src="img/2.png" class="img-fluid">
      </div>

      <!-- //* images -->
      <div class="d-flex flex-column">
        <img src="img/3.jpeg" class="img-fluid">
        <img src="img/4.jpeg" class="img-fluid">
      </div>

      <!-- //* images -->
      <div class="d-flex flex-column">
        <img src="img/5.jpeg" class="img-fluid">
        <img src="img/6.jpeg" class="img-fluid">
      </div>

      <!-- //* images -->
      <div class="d-flex flex-column">
        <img src="img/7.jpeg" class="img-fluid">
        <img src="img/8.jpeg" class="img-fluid">
      </div>
    </div>
  </div>
</div>
<!-- //* gallery end -->

<br><br>

<!-- //* call to action again start -->
<div class="container" id="reservation">
  <!-- //* title -->
  <h3 class="text-center"><br><br>Reservation<br><br></h3>

  <!-- //* bg image -->
  <img src="img/16.jpg" class="img-fluid rounded">

  <!-- //* make a reservation now! -->
  <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a Reservation Now!</button>
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
    <h3 class="text-center"><br><br>Find us!</h3><br>
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
              <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Check Open Time</button>
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
                      <td>' . $row['open_time'] . '/td>
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
        <p class="text-right">Finedemic<br><i class="fa fa-map-marker"></i>&nbsp; Leof. Posidonos 109, <br>Glyfada <br><br>email: info@domain.com<br>phone: +00 (123) 456 7890</p>
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