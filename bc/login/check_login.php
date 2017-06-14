<?php
  // session_start();
  // include("mysql/connect.php");

  //login_account 登入者帳號
  // if (isset($_SESSION["account_level"]) && !empty($_SESSION["account_level"])) {
  //   //登入者等級
  //    if ($_SESSION["account_level"]=="admin") {
  //      header("Location:index.php");
  //    }else {
  //      header("Location:login.php");
  //    }
  //
  // }else {
  //   header("Location:login.php");
  // }
  // if (isset($_POST["login_account"])) {
  //   $account = $_POST["login_account"];
  //   $_SESSION["login_account"] = $account;
  //   $query_RecLogin = "SELECT * FROM `member` WHERE `account`='".$account."'";
  //   $RecLogin = $db->query($query_RecLogin);
  //
  //   $display = $RecLogin->fetch();
  //   $level = $display["level"];
  //   $_SESSION["account_level"] = $level;
  //   if ($level=="admin") {
  //     header("Location:index.php");
  //   }
  // }
  function Login_Out(){//登出

    if (isset($_GET["login_out"]) && ($_GET["login_out"]=="true")) {
      unset($_SESSION["admin_account"]);
      unset($_SESSION["admin_password"]);
      header("Location:login.php");
    }

  }

  function Login($db){//登入


    $true = isset($_POST["login_account"]) &&
            !empty($_POST["login_account"]) &&
            isset($_POST["login_password"]) &&
            !empty($_POST["login_password"]);

    if ($true) {

      $login_account = $_POST["login_account"];//帳號
      $login_password = $_POST["login_password"];//密碼

      $RecLogin = $db->query(MemberSe($login_account));

      $display = $RecLogin->fetch();

      $account = $display["account"];
      $passwd = $display["password"];

      $level = $display["level"];
      $_SESSION["account_level"] = $level;

      if ($account=="admin" && ($login_password==$passwd)) {
        $_SESSION["admin_account"] = $login_account;
        $_SESSION["admin_password"] = $login_password;
          if ($level == "admin") {
            header("Location:index.php");
          }
      }
    }
}
  function Login_Check(){//登入檢查

    if (!isset($_SESSION["admin_account"]) || empty($_SESSION["admin_password"])) {
      header("Location:login.php");
    }

  }

  function MemberSe($account){
    $MemberSe = "SELECT * FROM `member` WHERE `account`='".$account."'";
    return $MemberSe;
  }

 ?>
