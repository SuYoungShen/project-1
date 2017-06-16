<?php
  $dbname="project";
  include("../bc/mysql/connect.php");

  $true = isset($_POST["Account"]) &&
          !empty($_POST["Account"]) &&
          isset($_POST["Place_Name"]) &&
          !empty($_POST["Place_Name"]) &&
          isset($_POST["PicName"]) &&
          !empty($_POST["PicName"]) &&
          isset($_POST["PicPath"]) &&
          !empty($_POST["PicPath"]) &&
          isset($_POST["WebSite"]) &&
          !empty($_POST["WebSite"]) ;

  if ($true) {

    $Account = $_POST["Account"];
    $Place_Name = $_POST["Place_Name"];
    $PicName = $_POST["PicName"];
    $PicPath = $_POST["PicPath"];
    $WebSite = $_POST["WebSite"];

    $trues = $db->query(
                        FavDe(
                          $Account,
                          $Place_Name,
                          $PicName,
                          $PicPath,
                          $WebSite
                        )
                      );

    if ($trues == true) {
      echo "刪除成功";
    }else {
      echo "刪除失敗";
    }
  }else {
    echo "沒值~是要刪什麼~~~";
  }

  function FavDe($Account, $Place_Name, $PicName, $PicPath, $WebSite){
    $FavDe = "DELETE FROM `favorite` WHERE
                                          `Account` = '".$Account."' AND
                                          `place` = '".$Place_Name."' AND
                                          `PicName` = '".$PicName."' AND                                          
                                          `PicPath` = '".$PicPath."' AND
                                          `WebSite` = '".$WebSite."'
                                          ";
    return $FavDe;
  }
  $db=null;
 ?>
