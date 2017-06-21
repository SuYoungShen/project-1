<?php
  include ("../bc/mysql/connect.php");
  $true = isset($_POST["account"]) &&
          !empty($_POST["account"]);

  if ($true) {

    $account = $_POST["account"];//帳號
    $placeName = $_POST["placeName"];//地點
    $picName = $_POST["picName"];//照片名
    $picDir = $_POST["picDir"];//照片位置
    // $WebSite = $_POST["WebSite"];//照片的網站

    date_default_timezone_set('Asia/Taipei');//設定時間為台北
    $datetime = date("Y-m-d H:i:s");//時間

    $trues = $db->query(
                        Insert(
                          $account,
                          $placeName,
                          $picName,
                          $picDir,
                          // $WebSite,
                          $datetime
                        )
                      );
    if ($trues) {
      echo "已加入最愛";
    }else {
      echo "加入失敗";
    }
  }

  function Insert($account, $placeName, $picName, $picDir, $datetime){

    $favorite = "INSERT INTO `favorite`(
                                        `Account`,
                                        `place`,
                                        `PicName`,
                                        `PicPath`,
                                        `Datetime`
                                      ) VALUES (
                                        '".$account."',
                                        '".$placeName."',
                                        '".$picName."',
                                        '".$picDir."',
                                        '".$datetime."'
                                      )";
    return $favorite;
  }
  /* INSERT INTO `favorite`(
                            `Account`,
                            `Place_Name`,
                            `PicName`,
                            `PicPath`,
                            `WebSite`,
                            `Datetime`
                            ) VALUES (
                              [value-1],
                              [value-2],
                              [value-3],
                              [value-4],
                              [value-5],
                              [value-6]
                              )*/
  $db=null;
 ?>
