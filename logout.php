<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /libro/login.php');
?>
