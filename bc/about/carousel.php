<?php

  $dbname="project";
  include ("mysql/connect.php");//連接資料庫
  include ("common.php");//常用語法

  $picDir='about/carousel/images/';

  $Basename = basename($_SERVER["PHP_SELF"]);//目前的檔案名稱

  $carouselSe = $db->query(CarouselSe());
  $display = $carouselSe->fetchAll();

if (!isset($_SESSION["carouselnum"]) && !isset($_SESSION["carouselnums"])) {
  $_SESSION["carouselnum"] = 0;
  $_SESSION["carouselnums"] = 1;
}

  if (isset($_POST["update"])) {

    $id = $_POST["id"];
    $place_Names = $_POST["placeNamess"];

    if(isset($_FILES["picNames"])){

      foreach($_FILES["picNames"]["tmp_name"] as $key => $value){//檔案以陣列方式接收

        $error = $_FILES["picNames"]["error"][$key];//取得錯誤碼

        if ($error == 4) {

          date_default_timezone_set('Asia/Taipei');//設定時間為台北
          $datetime = date("Y-m-d H:i:s");//時間

          $placeUp = CarouselUps($id, $place_Names, $datetime);//更新檔名
          $true = $db->query($placeUp);//執行更新指令

          if ($true) {
            message("更新成功,但照片未更新",$Basename);
          }else {
            message("更新失敗",$Basename);
          }
          // message("照片未更新",$Basename);

        }else if ($error == 0) {

          $pic_Name = $_FILES["picNames"]["name"][$key];//檔案名稱
          $pic_tmp = $_FILES["picNames"]["tmp_name"][$key];//抓取檔案
          $pic_size = $_FILES["picNames"]["size"][$key];//抓取檔案大小
          $pic_tmps = strrchr($pic_Name,".");//取得檔案的副檔名
          $pictmp = array('.jpg', '.JPG', '.png', '.PNG'
          , '.bmp', '.gif');//設定副檔名

          if (!in_array($pic_tmps,$pictmp)) {//檢查副檔名

            $pictmp = "不好意思,只接受".implode(" ",$pictmp)."的副檔名";
            message($pictmp,$Basename);
            break;

          }else if($pic_size > 2097152){//檢查檔案大小

            $picsize = basename($pic_Name,"$pic_tmps");
            message($picsize."檔案已超過2MB",$Basename);

            break;
          }//$pic_size

          date_default_timezone_set('Asia/Taipei');//設定時間為台北
          $datetime = date("Y-m-d H:i:s");//時間

          // if(file_exists($picDir.$pic_Name)){//檢查是否有相同檔案
          //
          //   $picName = basename($pic_Name,"$pic_tmps");//去除副檔名,留檔名
          //   // message("資料夾裡已有名稱".$picName."的檔案",$Basename);
          //   $placeUp = PlaceUp($place_Name,$Introduction ,$pic_Name ,$picDir, $datetime);//更新檔名
          //   $true = $db->query($placeUp);//執行更新指令
          //   if ($true) {
          //     message("更新成功",$Basename);
          //   }else {
          //     message("更新失敗",$Basename);
          //   }
          // }else{

          move_uploaded_file($pic_tmp,$picDir.$pic_Name);//把檔案移到指定dir
          $placeUp = CarouselUp($id, $place_Names, $pic_Name, $picDir, $datetime);//更新檔名
          $true = $db->query($placeUp);//執行更新指令

          if ($true) {
            message("更新成功",$Basename);
          }else {
            message("更新失敗",$Basename);
          }
          // }//else
        }//$error == 0
      }//foreach
    }//$_FILES["picName"]
  }



  if (isset($_POST["carouselIn"])) {

    if (isset($_FILES["carousel"])) {

      foreach($_FILES["carousel"]["tmp_name"] as $key => $carousel_tmp_name){//檔案以陣列方式接收

        $carousel_error = $_FILES["carousel"]["error"][$key];//取得錯誤值

        if ($carousel_error == 4 ) {//判斷是否有錯誤

          message("不小心按到送出了齁",$Basename);

        }else if($carousel_error == 0){

          $carousel_name = $_FILES["carousel"]["name"][$key];//抓取檔案名稱
          $carousel_tmp = $_FILES["carousel"]["tmp_name"][$key];//抓取檔案
          $carousel_size = $_FILES["carousel"]["size"][$key];//抓取檔案大小
          $carousel_tmps = strrchr($carousel_name,".");//取得檔案的副檔名
          $carouseltmp = array('.jpg', '.JPG', '.png', '.PNG'
          , '.bmp', '.gif');//設定副檔名

          if (!in_array($carousel_tmps,$carouseltmp)) {//檢查副檔名

            $carouseltmp = "不好意思,只接受".implode(" ",$carouseltmp)."的副檔名";
            message($carouseltmp,$Basename);
            break;

          }else if($carousel_size > 2097152){//檢查檔案大小

            $carouselsize = basename($carousel_name,"$carousel_tmps");
            message($carouselsize."檔案已超過2MB","$Basename");

            break;
          }

          date_default_timezone_set('Asia/Taipei');//設定時間為台北
          $datetime = date("Y-m-d H:i:s");//時間

          // if(file_exists($picDir.$carousel_name)){//檢查是否有相同檔案
          //
          //   $carouselName = basename($carousel_name,"$carousel_tmps");//去除副檔名,留檔名
          //   message("資料夾裡已有名稱".$carouselName."的檔案",$Basename);
          //
          // }else{

            move_uploaded_file($carousel_tmp,$picDir.$carousel_name);//把檔案移到指定dir

            foreach ($display as $keys => $value) {
              // echo "keys:".$keys;
              $carouselid[$keys] = $value["id"];//取id
              $carouseltimes[$keys] = $value["datetime"];//取時間
            }
            $rowsc = count($display);//計算總共有幾筆資料

            //時間比對
            if (isset($_SESSION["carouselnum"]) && isset($_SESSION["carouselnums"])) {

              $carouselnum = $_SESSION["carouselnum"];
              $carouselnums = $_SESSION["carouselnums"];

              if ($carouselnum > ($rowsc-1)) {

                $_SESSION["carouselnum"] = 0;
                $carouselnum = $_SESSION["carouselnum"];

              }

              if ($carouselnums > ($rowsc-1)) {
                $_SESSION["carouselnums"] = 0;
                $carouselnums = $_SESSION["carouselnums"];

              }
              //時間比對
              $null = "";
              $carouseltime = strtotime($carouseltimes["$carouselnum"]) < strtotime($carouseltimes["$carouselnums"]);
              $carouseltimess = strtotime($carouseltimes["$carouselnum"]) == strtotime($carouseltimes["$carouselnums"]);

              if($carouseltime || $carouseltimess){

                $carouselup = CarouselUp($carouselid["$carouselnum"], $null,$carousel_name, $picDir, $datetime);//更新檔名
                $db->query($carouselup);//執行更新指令
                message("新增成功",$Basename);
              }else {

                $carouselup = CarouselUp($carouselid["$carouselnums"], $null, $carousel_name, $picDir, $datetime);//更新檔名
                $db->query($carouselup);//執行更新指令
                message("新增成功",$Basename);
              }
              $_SESSION["carouselnum"]++;
              $_SESSION["carouselnums"]++;

            }//if(session["carouselnum"])

          // }//else
        }//$carousel_error
      }//foreach
    }//FILE["carousel"]
  }



  foreach ($display as $key => $value) {

    $id = $value["id"];
    $placeName = $value["place"];
    $picName = $value["name"];
    $picDir = $value["path"];

    if (!empty($picName) && !empty($picDir)) {
			$display = $picDir.$picName;
		}else {
			$display = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
		}

    echo "
    <li>
      <a href='$display' title='$placeName' data-rel='colorbox'>
        <img width='150' height='150' alt='150x150' src='$display'/>
        <div class='text'>
          <div class='inner'>$placeName</div>
        </div>
      </a>

      <div class='tools tools-top'>
        <a href='#edits' data-toggle='modal' onclick='Edits(\"$id\",\"$placeName\",\"$picDir\",\"$picName\")'>
          <i class='ace-icon fa fa-pencil'></i>
        </a>

        <a href='#' onclick='bootboxss(\"$id\")'>
          <i class='ace-icon fa fa-times red'></i>
        </a>
      </div>
    </li>
    ";
  }

    if(isset($_POST["clear"])){
      $clear = $_POST["clear"];
      for ($i=0; $i < 6; $i++) {
        $clear = $db->query("UPDATE carousel SET
                          place='',
                          name = ' ',
                          datetime = ' '
                        WHERE
                          '".$i."'
                        ");
      }

      $_SESSION["carouselnum"] = 0;
      $_SESSION["carouselnums"] = 1;
      message("重設成功",$Basename);

    }
$db = null;
?>
