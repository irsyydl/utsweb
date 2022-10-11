<?php
$users = [
    "admin" => "admin123"
];

session_start();

if (isset($_POST['admin']) && !isset($_SESSION['admin'])) {
    if ($users[$_POST['admin']] == $_POST['password']) {
        $_SESSION['admin'] = $_POST['admin'];
    }
    if (!isset($_SESSION['admin'])) { $failed = true; }
}

if (isset($_SESSION['admin'])) {
    header("location: landingpage.php");
    exit();
}

?>