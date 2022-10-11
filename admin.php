<?php
session_start();
if (isset($_SESSION['logout'])) {
    unset($_SESSION['user']);
}

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/style.css">
    <title>Judul</title>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <div class="logo">
                <img src="assets/logo-removebg-preview.png" alt="">
            </div>
            <ul>
                <li><a href="#section1">Home</a></li>
                <li><a href="about.html">About Me</a></li>
                <li><form method="post">
                    <input type="hidden" name="logout" value=="1"/>
                    <input type="submit" value="Logout"/>
                </form></li>
                <li><img src="assets/moon.png" id="icon"></li>
            </ul>
        </div>
        <div class="content">
            <h1 id="teks">Input Data Karyawan</h1>
            <input type="text" name="user" placeholder="Nama Karyawan"> <br> <br>
            <input type="text" name="user" placeholder="No Hp Karyawan"> <br> <br>
            <input type="text" name="user" placeholder="Alamat Karyawan"> <br> <br>
            <input type="text" name="user" placeholder="Gaji Karyawan"> <br> <br>
            <input type="text" name="user" placeholder="Jenis Kelamin Karyawan"> <br> <br>
            <input type="submit" value="Submit"> <br>
            </div>
        </div>
    <footer id="footer">
        Designed By
        M. Irsyadul A. H
    </footer>
    <script src="script.js"></script>
</body>
</html>
