<?php
  include ("../bc/mysql/connect.php");
  $true = isset($_POST["account"]) &&
          !empty($_POST["account"]);
  // include 'common.php';

  if ($true) {

    $account = $_POST["account"];//帳號
    $placeName = $_POST["placeName"];//地點
    $picName = $_POST["picName"];//照片名
    $picDir = $_POST["picDir"];//照片位置
    // $WebSite = $_POST["WebSite"];//照片的網站

    date_default_timezone_set('Asia/Taipei');//設定時間為台北
    $datetime = date("Y-m-d H:i:s");//時間
    $SelectFa = SelectFa($db, $placeName, $account);//搜尋此登入帳號使否有加入我的最愛,語法在bc/mysql/connect.php

    if ($SelectFa == true) {//如果此帳號有有搜尋到此景點會顯示為true,表示使用者是有重複點擊加入我的最愛,點第二次就等於刪除
      FavDe($db, $account, $placeName);//刪除我的最愛
    }else if($SelectFa == false){
      Insert($db, $account, $placeName, $picName, $picDir, $datetime);//加入我的最愛
    }
  }
  function SelectFa($db, $placeName, $account){
    $SF = "SELECT distinct(place) FROM `favorite` WHERE place='".$placeName."' AND  Account='".$account."'";
    //distinct 跟Group By 是一樣的
    $FQ = $db->query($SF);
    $DiF = $FQ->fetchAll();
    if (!empty($DiF)) {
      // echo "string";
      // var_dump($DiF);
      return true;//不等於空表示有資料
    }else {
      return false;//等於空表示沒資料
    }
  }
  function Insert($db, $account, $placeName, $picName, $picDir, $datetime){

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
      $trues = $db->query($favorite);
      if ($trues) {
        echo "已加入最愛";
      }else {
        echo "加入失敗";
      }
    }

    function FavDe($db, $Account, $Place_Name){
      $FavDe = "DELETE FROM `favorite` WHERE
                                            `Account` = '".$Account."' AND
                                            `place` = '".$Place_Name."'
                                            ";
      $trues = $db->query($FavDe);
      if ($trues == true) {
        echo "已刪除";
      }else {
        echo "刪除失敗";
      }
    }


  $db=null;
 ?>
