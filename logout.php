<!-- <?php

session_start();
  require_once('.\utils\utility.php');
    require_once('.\database\dbhelper.php');
$token = getCookie('token');
setcookie('token','',time() -100 , '/');

  header('Location: index.php');
unset($_SESSION['user']);


?> -->