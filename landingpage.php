<?php
session_start();
if (isset($_SESSION['logout'])) {
    unset($_SESSION['user']);
}

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
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
    <title>Posttest3</title>
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
            <h1 id="teks">Cuma Jual Roti</h1>
            <p>Webnya masih kosong :)</p>
        </div>
    </div>
    <footer id="footer">
        Designed By
        M. Irsyadul A. H
    </footer>
    <script src="script.js"></script>
</body>
</html>
