<!DOCTYPE html>
<html lang="en">

<head>
    <title> Top Company </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            width: 70%;
            margin: auto;
        }
    </style>
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

    <!--About -->
    <section class="about">
        <div class="container">
            <br>
            <br>
            <h1 class="text-center">Tesla Company Profile</h1>
            <div class="menu1"></div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="image/mobiltesla1.jpg" alt="Model S">
                    </div>

                    <div class="item">
                        <img src="image/mobiltesla2.jpg" alt="Model Y">
                    </div>

                    <div class="item">
                        <img src="image/mobiltesla3.jpg" alt="Model X">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="detailMenu1">
                <br>

                <h4 class="text-center"> Tesla, Inc. adalah sebuah perusahaan otomotif dan penyimpanan energi asal Amerika Serikat yang didirikan 
                    oleh Elon Musk, Martin Eberhard, Marc Tarpenning, JB Straubel dan Ian Wright, serta berbasis di Palo Alto, California.
                    Seperti yang banyak diketahui, perusahaan ini memiliki spesialisasi di mobil listrik, komponen mesin,
                    dan juga memproduksi perangkat pengisi ulang baterai. Tesla Motors, Inc. memiliki kantor pusat yang berlokasi di San Carlos,
                    California, Amerika Serikat. Perusahaan ini sendiri awalnya didirikan dengan dimodali oleh pendiri PayPal sekaligus yang kita
                    kenal sebagai pendiri Tesla Motors saat ini, yaitu Elon Musk. Elon Musk mendanai sebesar USD 7,5 juta untuk mendirikan
                    perusahaan ini pada bulan April tahun 2004. Hal ini kemudian membuatnya ditunjuk sebagai Direktur Utama.</h4>
                <br>

                <h2> Product </h2>
                <div class="menu">
                    <img class="menuimg" src="image/mobiltesla1.jpg" alt="menu">
                    <div class="detailMenu">
                        <h4>Model S</h4>
                        <br>
                        <p> Model S is built for speed, endurance and range. Improved aerodynamics and a wider chassis offer more 
                            responsive performance so you can take corners quicker and with more confidence. 
                            Model S is built from the ground up as an electric vehicle, with a high-strength architecture and floor-mounted 
                            battery pack for incredible occupant protection and low rollover risk. Every new Model S includes Tesla’s latest active 
                            safety features, such as Automatic Emergency Braking, at no extra cost. </p>
                                        <br>
                    </div>
                </div>
                <div class="menu">
                    <img class="menuimg" src="image/mobiltesla2.jpg" alt="menu">
                    <div class="detailMenu">
                        <h4>Model X </h4>
                        <br>
                        <p> Model X Plaid is the highest performing SUV ever built. All Model X powertrains, with updated battery architecture, 
                            can deliver instant torque at any speed.
                            Model X is built from the ground up as an electric vehicle, with a high-strength architecture and floor-mounted battery 
                            pack for incredible occupant protection and low rollover risk. Every Model X includes Tesla’s latest active safety features, 
                            such as Automatic Emergency Braking, at no extra cost.</p>
                        <br>
                    </div>
                </div>
                <div class="menu">
                    <img class="menuimg" src="image/mobiltesla3.jpg" alt="menu">
                    <div class="detailMenu">
                        <h4>Model Y</h4>
                        <br>
                        <p> Model Y is a fully electric, mid-size SUV with unparalleled protection and versatile cargo space. The interior of Model Y 
                            is simple and clean, with a 15-inch touch screen, immersive sound system and an expansive all-glass roof that creates extra 
                            headroom and provides a seamless view of the sky.</p>
                                        <br>
                    </div>
                </div>
            </div>
    </section>

    <footer class="bg-dark text-white pt-5 pb-4">

        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Tesla Company</h5>
                    <p>Tesla, Inc. adalah sebuah perusahaan otomotif dan penyimpanan energi asal Amerika Serikat yang didirikan 
                    oleh Elon Musk, Martin Eberhard, Marc Tarpenning, JB Straubel dan Ian Wright, serta berbasis di Palo Alto, California.</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Model</h5>
                    <p>
                        <a href="" class="text-white" style="text-decoration: none;">Model S</a>
                    </p>
                    <p>
                        <a href="" class="text-white" style="text-decoration: none;">Model X</a>
                    </p>
                    <p>
                        <a href="" class="text-white" style="text-decoration: none;">Model Y</a>
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
                        <i class="fas fa-home mr-3"></i>Austin, Texas, United States
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>tesla.id@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>095400480804
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i>Tesla Company
                    </p>
                </div>

                <div class="row align-items-left">
                    <div class="col-md-7 col-lg-8">
                        <p>CopyRight 2020 Light Workshop by:
                            <a href="index.html" style="text-decoration: none;">
                                <strong class="text-warning">Tesla Company</strong>
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
</body>

</html>