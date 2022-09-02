<!DOCTYPE html>
<html lang="en">

<head>
  <div>
    <title> Tesla Company </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

  <!-- Header -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

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
  <!--About -->

  </style>
  <section class="about">
    <div class="container">
      <div class="detailMenu1">
        <br>
        <h4>Tesla Company</h4>
        <br>
        <p> Tesla, Inc. adalah sebuah perusahaan otomotif dan penyimpanan energi asal Amerika Serikat yang didirikan oleh Elon Musk, 
          Martin Eberhard, Marc Tarpenning, JB Straubel dan Ian Wright, serta berbasis di Palo Alto, California. 
          Seperti yang banyak diketahui, perusahaan ini memiliki spesialisasi di mobil listrik, komponen mesin, 
          dan juga memproduksi perangkat pengisi ulang baterai. Tesla Motors, Inc. memiliki kantor pusat yang berlokasi di San Carlos, 
          California, Amerika Serikat. Perusahaan ini sendiri awalnya didirikan dengan dimodali oleh pendiri PayPal sekaligus yang kita 
          kenal sebagai pendiri Tesla Motors saat ini, yaitu Elon Musk. Elon Musk mendanai sebesar USD 7,5 juta untuk mendirikan 
          perusahaan ini pada bulan April tahun 2004. Hal ini kemudian membuatnya ditunjuk sebagai Direktur Utama.
        </p>
        <br>


        <h2> Product </h2>

        <?php
        $nama_menu = [
          "Model S",
          "Model Y ",
          "Model X"
        ];        

        $deskripsi = [
          "Cheese Bulgogi La'boo Pasta makanan ini disajikan dengan keju dan daging sapi pilihan kita dengan
          kulitas yang tinggi dengan cita rasa gurih dan legit
          tambahan daging sapi untuk menambah rasa gurih dari rasa lemak sapi yang telah kita tumis dengan
          kematangan yang sempurna dan ketika seseorang memakannya akan mersa sangat nikmat.
          Pasta ini memiliki komposisi yang tidak membuat orang yang menyantapnya merasa kurang nikmat karena di
          dalam pasta ini, resto kita memberikan tambahan dengan bumbu rahasia kita yang
          telah diracik secara turun temurun. Ditambah lagi dengan menggunakan daging sapi pilihan dari pertenakan
          milik kita sendiri jadi lebih terpercaya dan aman. ",
          "Cheese Tomato Pasta makanan ini disajikan dengan keju dan tomat pilihan kita dengan kulitas yang tinggi
          dengan cita rasa gurih, legit, manis dan
          sedikit asam untuk menambah rasa segar ketika seseorang memakannya. Pasta ini memiliki komposisi yang
          tidak membuat orang yang menyantapnya merasa kurang nikmat karena
          di dalam pasta ini, resto kita memberikan tambahan dengan bumbu rahasia kita yang telah diracik secara
          turun temurun. Ditambah lagi dengan menggunakan tomat perkebunan milik kita
          jadi lebih higenis dan aman.",
          "mushrom pasta makanan ini disajikan dengan jamur pilihan kita dengan kulitas yang tinggi dengan cita
          rasa gurih dan legit.
          Pasta ini memiliki komposisi yang tidak membuat orang yang menyantapnya merasa kurang nikmat karena di
          dalam pasta ini, resto kita memberikan tambahan
          dengan bumbu rahasia kita yang telah diracik secara turun temurun. Ditambah lagi dengan menggunakan minyak
          mushrom yang mahal."
        ];


        ?>       
        <div class="menu">
          <img class="menuimg" src="image/mobiltesla1.jpg" alt="menu">
          <div class="detailMenu">
            <h4>Model S</h4>
            <br>
            <p>Cheese Bulgogi La'boo Pasta makanan ini disajikan dengan keju dan daging sapi pilihan kita dengan
          kulitas yang tinggi dengan cita rasa gurih dan legit
          tambahan daging sapi untuk menambah rasa gurih dari rasa lemak sapi yang telah kita tumis dengan
          kematangan yang sempurna dan ketika seseorang memakannya akan mersa sangat nikmat.
          Pasta ini memiliki komposisi yang tidak membuat orang yang menyantapnya merasa kurang nikmat karena di
          dalam pasta ini, resto kita memberikan tambahan dengan bumbu rahasia kita yang
          telah diracik secara turun temurun. Ditambah lagi dengan menggunakan daging sapi pilihan dari pertenakan
          milik kita sendiri jadi lebih terpercaya dan aman.</p>
            <br>            
          </div>
        </div>
        <div class="menu">
          <img class="menuimg" src="image/mobiltesla2.jpg" alt="menu">
          <div class="detailMenu">
            <h4>Model X</h4>
            <br>
            <p>Cheese Bulgogi La'boo Pasta makanan ini disajikan dengan keju dan daging sapi pilihan kita dengan
          kulitas yang tinggi dengan cita rasa gurih dan legit
          tambahan daging sapi untuk menambah rasa gurih dari rasa lemak sapi yang telah kita tumis dengan
          kematangan yang sempurna dan ketika seseorang memakannya akan mersa sangat nikmat.
          Pasta ini memiliki komposisi yang tidak membuat orang yang menyantapnya merasa kurang nikmat karena di
          dalam pasta ini, resto kita memberikan tambahan dengan bumbu rahasia kita yang
          telah diracik secara turun temurun. Ditambah lagi dengan menggunakan daging sapi pilihan dari pertenakan
          milik kita sendiri jadi lebih terpercaya dan aman.</p>
            <br>            
          </div>
        </div>
        <div class="menu">
          <img class="menuimg" src="image/mobiltesla3.jpg" alt="menu">
          <div class="detailMenu">
            <h4>Model Y</h4>
            <br>
            <p>Cheese Bulgogi La'boo Pasta makanan ini disajikan dengan keju dan daging sapi pilihan kita dengan
          kulitas yang tinggi dengan cita rasa gurih dan legit
          tambahan daging sapi untuk menambah rasa gurih dari rasa lemak sapi yang telah kita tumis dengan
          kematangan yang sempurna dan ketika seseorang memakannya akan mersa sangat nikmat.
          Pasta ini memiliki komposisi yang tidak membuat orang yang menyantapnya merasa kurang nikmat karena di
          dalam pasta ini, resto kita memberikan tambahan dengan bumbu rahasia kita yang
          telah diracik secara turun temurun. Ditambah lagi dengan menggunakan daging sapi pilihan dari pertenakan
          milik kita sendiri jadi lebih terpercaya dan aman.</p>
            <br>            
          </div>
        </div>
       
       
  </section>
  <footer class="bg-dark text-white pt-5 pb-4">

    <div class="container text-center text-md-left">
      <div class="row text-center text-md-left">

        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Tesla Company</h5>
          <p>Tesla was founded in 2003 by a group of engineers who wanted to prove that people didn’t need to compromise to drive electric – 
            that electric vehicles can be better, quicker and more fun to drive than gasoline cars.</p>
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
            <i class="fas fa-home mr-3"></i>Malang, Jawa Timur
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
            <p>CopyRight 2020 by:
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
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-whatsapp"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
              </li>
            </ul>

          </div>

        </div>
      </div>

    </div>
  </footer>
</body>

</html>