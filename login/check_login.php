<?php
// session_start();
// include '../bc/mysql/connect.php';
// Login($db);


  function Member_Information(){

    if (isset($_SESSION["login_account"]) && !empty($_SESSION["login_account"])) {
      echo "
        <li><a href='login_center.php'>會員中心</a></li>
        <li><a href='?login_out=true'>登出</a></li>
      ";
    }else {
      echo "
        <li><a href='login.php'>會員登入</a></li>
      ";
    }
  }

  function Login_Out(){//登出

    if (isset($_GET["login_out"]) && ($_GET["login_out"]=="true")) {
      unset($_SESSION["login_account"]);
      unset($_SESSION["login_password"]);
      header("Location:index.php");
    }

  }

  function Login($db){//登入

    $true = isset($_POST["login_account"]) &&
            !empty($_POST["login_account"]) &&
            isset($_POST["login_password"]) &&
            !empty($_POST["login_password"]);

    if ($true) {

      $login_account = $_POST["login_account"];//輸入的帳號
      $login_password = $_POST["login_password"];//輸入的密碼

      $RecLogin = $db->query(MemberSe($login_account));

      $display = $RecLogin->fetch();

      $account = $display["account"];//取出從資料庫查詢出來的帳號
      $passwd = $display["password"];//取出從資料庫查詢出來的密碼

      $level = $display["level"];
      $_SESSION["account_level"] = $level;

      if (($login_account==$account) && ($login_password==$passwd)) {

        if ($level == "member") {

          $_SESSION["login_account"] = $login_account;
          $_SESSION["login_password"] = $login_password;

          // header("Location : index.php");
        }
      }else {
        echo "
        <script>alert('帳號或密碼有誤');document.location.href='login.php'</script>
        ";
      }
    }else {
      $login_account = "";
    }
  }

  function Login_Check(){//登入檢查

    if (!isset($_SESSION["login_account"]) || empty($_SESSION["login_account"])) {
      header("Location:login.php");
    }

  }

  function MemberSe($account){
    $MemberSe = "SELECT * FROM `member` WHERE `account`='".$account."'";
    return $MemberSe;
  }


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


 ?>
