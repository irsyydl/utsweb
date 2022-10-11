<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylesheets/logina.css">
  <title>Login</title>
</head>
<body>
  <?php
  require "check.php";
  if (isset($failed)) { echo "<div>INVALID USER/PASSWORD</div>";}
  ?>
  <center>
  <form method="post">
    <h1>Login</h1>
    <input type="text" name="user" required/> <br> <br>
    <input type="password" name="password" required/> <br> <br>
    <input type="submit" value="Login"/> <br>
  </form>
  <p>username : admin, pw : admin123</p>
  <p>username : user, pw : user123</p>
  </center>
</body>
</html>