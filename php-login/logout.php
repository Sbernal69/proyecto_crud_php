<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /libro/php-login/login.php');
?>
