<html>
<body> <?php session_start();
        if ($_SESSION['status'] == 'login') {
            echo '<h1> Selamat Datang ' . $_SESSION['username'] . ' </h1><br>';
            echo 'Anda bisa menuju halaman <a href="usertampil.html">List User </a><br>';
            echo 'Atau anda bisa melakukan<a href="sessionLogout.php">Logout</a>';
        }
        ?>
</body>

</html>