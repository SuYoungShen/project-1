<?php
  $dbname="project";
  include("../../mysql/connect.php");
  include ("../common.php");

  if (isset($_POST["De"])) {

    $delete = $_POST["De"];

    if ($delete=="") {

    }else {

      foreach ($delete as $key => $de) {
        $true = $db->query(ForumDe($de));
      }
      if ($true == true) {
        echo "刪除成功";
      }else {
        echo "刪除失敗";
      }
    }
  }else {
    echo "沒值~是要刪什麼~~~";
  }
// if (isset($_GET["value"])) {
//
//   $de = $_GET["value"];
//   $true = $db->query(memberDelete($de));
//
//   if($true == true){
//     // echo "<script>alert('刪除成功');</script>";
//     $_SESSION["de"] = "刪除成功";
//     header("Location:../member.php");
//   }
// }
// if (isset($_POST["DeAccountss"])) {
//
//   $de = $_POST["DeAccountss"];
  // $true = $db->query(memberDelete($de));
// print_r($de);
  // if ($true == true) {
  //   echo "刪除成功";
  // }else {
  //   echo "刪除失敗";
  // }
// }
// if (isset($_POST["DeAccountss"])) {
//   $de = $_POST["DeAccountss"];
//   foreach ($de as $key => $value) {
//     $true = $db->query(memberDelete($value));
//   }
//   if ($true == true) {
//     echo "刪除成功";
//   }else {
//     echo "刪除失敗";
//   }
// }


 ?>
