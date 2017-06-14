<?php
  session_start();

  $true = isset($_SESSION["admin_account"]) &&
          !empty($_SESSION["admin_account"]) &&
          isset($_SESSION["admin_password"]) &&
          !empty($_SESSION["admin_password"]);

  if ($true) {
    unset($_SESSION["admin_account"]);
    unset($_SESSION["admin_password"]);
    header("Location:../login.php");
  }

 ?>
