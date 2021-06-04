<!-- //? php code to append header.php contents here -->
<?php require "pages/header.php"; ?>

<!-- //* login modal -->
<div id="modal-login" class="modal">
    <div class="modal-content">
        <h4>Login</h4>
        <hr>
        Log in to make your reservations track them realtime.
    </div>
    <!-- //* login modal content start -->
    <div class="modal-content">
        <div class="row">
            <form class="col s12">
                <!-- //* row 1 -->
                <div class="row">
                    <!-- //* username -->
                    <div class="input-field col s12">
                        <input place="I am not editable" id="username" type="text" class="validate">
                        <label for="username">Username</label>
                    </div>
                </div>
                <!-- //* row 2 -->
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- //* login modal content end -->
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn">Login</a>
    </div>
</div>

<!-- //* parallax main -->
<div id="index-banner" class="parallax-container section">
    <br><br><br><br>
    <div class="container">
        <img src="img/index/logo-finedemic.png" style="width: 100%" alt="Finedemic logo.">
    </div>
    <br><br><br><br>
    <div class="row center">
        <a href="#" class="btn-large black-text waves-effect waves-light orange hoverable orange"><b>Reserve
                Now!</b></a>
    </div>
    <div class="parallax" style="opacity: .7;">
        <img src="img/index/bg1.jpg" alt="Image of a fine dining.">
    </div>
</div>

<!-- //* about section -->
<section id="about"></section>
<div class="container section">
    <div class="row">
        <div class="col s12 m12 l12 center">
            <h2></h2>
            <h5><b><a href="#home" class="black-text">Finedemic Restaurant</a></b></h5>
            <h2></h2>
        </div>
        <div class="col s12 m12 l5">
            <div class="carousel carousel-slider">
                <a href="#one!" class="carousel-item">
                    <img src="img/index/menu-1.jpg" alt="" style="border-radius: 10px;" width="50%">
                </a>
                <a href="#two!" class="carousel-item">
                    <img src="img/index/menu-2.jpg" alt="" style="border-radius: 10px;" width="50%">
                </a>
                <a href="#three!" class="carousel-item">
                    <img src="img/index/menu-3.jpg" alt="" style="border-radius: 10px;" width="50%">
                </a>
            </div>
        </div>
        <div class="col s12 m12 l7">
            <hr>
            <h4 class="center">Our Story</h4>
            <p style="text-align: justify;">The Finedemic is an online restaurant first established in 2021, by our
                founders Barruela, Brigoli, Garcia, Vibiesca and Villanueva.<br>
                During the pandemic of the COVID-19 people within the Philippines has struggled to live in
                isolation, as it is a well needed precaution to fight against the pandemic, people could not be of
                close proximity of each other, go on to travel places they have not been, or even buy food for daily
                consumption. Hence, by our founders Finedemic is created, to help those who struggle during these
                trying times, providing immaculate service for our customers.<br></p>
            <hr>
        </div>
    </div>
</div>

<!-- //* parallax 2 -->
<div id="index-banner-2" class="parallax-container valign-wrapper section" style="height: 300px;">
    <div class="parallax" style="opacity: .7;">
        <img src="img/index/bg2.jpg" alt="Image of a restaurant." style="width: 100%;">
    </div>
</div>

<!-- //* product gallery -->
<section id="menu"></section>
<div class="container center section">
    <h2></h2>
    <h5><b><a href="#home" class="black-text">Product Gallery</a></b></h5>
    <h2></h2>
    <div class="row">
        <div class="col s12 m6 l6"><img class="materialboxed hoverable" src="img/gallery/1.jpeg" style="border-radius: 10px;" width="100%"></div>
        <div class="col s12 m6 l6"><img class="materialboxed hoverable" src="img/gallery/2.png" style="border-radius: 10px;" width="100%"></div>
    </div>
    <div class="row">
        <div class="col s12 m6 l3"><img class="materialboxed hoverable" src="img/gallery/4.jpeg" style="border-radius: 10px;" width="100%"></div>
        <div class="col s12 m6 l3"><img class="materialboxed hoverable" src="img/gallery/3.jpg" style="border-radius: 10px;" width="100%"></div>
        <div class="col s12 m6 l3"><img class="materialboxed hoverable" src="img/gallery/5.jpeg" style="border-radius: 10px;" width="100%"></div>
        <div class="col s12 m6 l3"><img class="materialboxed hoverable" src="img/gallery/6.jpeg" style="border-radius: 10px;" width="100%"></div>
    </div>
    <div class="row">
        <div class="col s12 m6 l6"><img class="materialboxed hoverable" src="img/gallery/7.jpeg" style="border-radius: 10px;" width="100%"></div>
        <div class="col s12 m6 l6"><img class="materialboxed hoverable" src="img/gallery/8.jpeg" style="border-radius: 10px;" width="100%"></div>
    </div>
</div>

<!-- //* parallax 3 -->
<div id="index-banner-3" class="parallax-container valign-wrapper section" style="height: 300px;">
    <div class="parallax" style="opacity: .7;">
        <img src="img/index/bg2.jpg" alt="Image of a restaurant." style="width: 100%;">
    </div>
</div>

<!-- //? php code to append footer.php contents here -->
<?php require "pages/footer.php"; ?>