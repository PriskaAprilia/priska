
<?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];

    if ($a == "priska@gamail.com" && $b == "123456") {
        $_SESSION['login'] = $a;
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "Selamat datang ditoko  <a href='selamatdatang.php'> Klik</a> Supaya Bisa Masuk Home";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=login.php> Login </a>");
    }
} else {
    ?>
    <html>

    <head>
        <title>Selamat datang</title>
    </head>

    <body> 
        <nav>
        </nav>
        <form action="" method="post">
            <center><h2>Selamat datang</h2></center>
            <center>Username : <input type="text" name="user"><br></center>
            <center>Password : <input type="password" name="pass"><br></center>
            <center><input type="submit" name="Login" value="Log In"></center>
        </form>
    </body>

    </html>
<?php
}
?>
