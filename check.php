<?php
$users = [
    "user" => "user123",
];

$admin = [
    "admin" => "admin123"
];

session_start();

if (isset($_POST['user']) && !isset($_SESSION['user'])) {
    if ($users[$_POST['user']] == $_POST['password']) {
        $_SESSION['user'] = $_POST['user'];
        header("location: landingpage.php");
    } else if ($admin[$_POST['user']] == $_POST['password']) {
        $_SESSION['user'] = $_POST['user'];
        header("Location: admin.php");
    }
    if (!isset($_SESSION['user'])) { $failed = true; }
}

// if (isset($_SESSION['user'])) {

//     exit();
// }

?>