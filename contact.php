<!DOCTYPE html>
<html lang="en">

<head>
    <title> La' Pasta </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- Header -->
    <div>
    <header>
      <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="home.php">Top Company</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
            </li>
            <li class="nav-item">              
            <?php session_start();
                if ($_SESSION['status'] == 'login') {
                      echo '<a class="nav-link" href="sessionLogout.php">Logout</a>';
                  }
                ?>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  </div>
    <section>
  <img src="image/tesla1.jpg" alt="Girl in a jacket" width="1600" height="500">
  </section>

    <div class="container">
        <br>
    <div><h1>Contact Us</h1></div>
    <br />
    <div class="row">
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32676281.26944536!2d68.00047599999999!3d1.2920715000000191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da199a4a4df71d%3A0xaea6c710c6aacb20!2sTesla%20Singapore!5e0!3m2!1sid!2sid!4v1662117097471!5m2!1sid!2sid" width="550" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <br />
        <div class="col-md-6">
            <form class="my-form">
                <div class="form-group">
                    <label for="form-name">Name</label>
                    <input type="email" class="form-control" id="form-name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="form-email">Email Address</label>
                    <input type="email" class="form-control" id="form-email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="form-subject">Telephone</label>
                    <input type="text" class="form-control" id="form-subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="form-message">Email your Message</label>
                    <textarea class="form-control" id="form-message" placeholder="Message"></textarea>
                </div>
                <button class="btn btn-default" type="submit">Contact Us</button>                               
            </form>
            <br>
        </div>
    </div>
</div>

<style>
    .my-form {
        color: #305896;
    }
    .my-form .btn-default {
        background-color: #305896;
        color: #fff;
        border-radius: 0;
    }
    .my-form .btn-default:hover {
        background-color: #4498C6;
        color: #fff;
    }
    .my-form .form-control {
        border-radius: 0;
    }
</style>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('googlemap'),
            {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
    });
</script>
    
    <footer class="bg-dark text-white pt-5 pb-4">

        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">La PAsta</h5>
                    <p>Restoran ini sudah dibangun sejak tahun 1998 oleh Nabil Dixiee'l Seoritaaa. Restoran ini sangat terkenal
                        dengan makanannya yaitu pasta karena pemiliknya memang dari Negara Italia.</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Service</h5>
                    <p>
                        <a href="" class="text-white" style="text-decoration: none;">Dine In</a>
                    </p>
                    <p>
                        <a href="" class="text-white" style="text-decoration: none;">Take Home</a>
                    </p>
                    <p>
                        <a href="" class="text-white" style="text-decoration: none;">Delivery</a>
                    </p>

                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Page</h5>
                    <p>
                        <a href="home.php" class="text-white" style="text-decoration: none;">Home</a>
                    </p>
                    <p>
                        <a href="about.php" class="text-white" style="text-decoration: none;">About</a>
                    </p>
                    <p>
                        <a href="order.php" class="text-white" style="text-decoration: none;">Order</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i>Malang, Jawa Timur
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>la'pasta.id@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>095400480804
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i>La' Pasta
                    </p>
                </div>

                <div class="row align-items-left">
                    <div class="col-md-7 col-lg-8">
                        <p>CopyRight 2020 Light Workshop by:
                            <a href="index.html" style="text-decoration: none;">
                                <strong class="text-warning">La Pasta</strong>
                            </a>
                        </p>
                    </div>

                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">

                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/thalita.putri.560/" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/thltsap" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/thltsap/" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/channel/UCpty54mUvzB5R_K_eR4MmSg" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

        </div>
    </footer>

</html>