<?php
  include ("common.php");//常用語法

  $top6dir='index/top6/images/';
  $topbasename = basename($_SERVER["PHP_SELF"]);

  $toptime = $db->query(topse());
  $display = $toptime->fetchAll();

if (!isset($_SESSION["topnum"]) && !isset($_SESSION["topnums"])) {
  $_SESSION["topnum"] = 0;
  $_SESSION["topnums"] = 1;
}


  if (isset($_POST["update"])) {

    $id = $_POST["id"];
    $place_Names = $_POST["placeName"];

    if(isset($_FILES["top6"])){

      foreach($_FILES["top6"]["tmp_name"] as $key => $value){//檔案以陣列方式接收

        $error = $_FILES["top6"]["error"][$key];//取得錯誤碼

        if ($error == 4) {

          date_default_timezone_set('Asia/Taipei');//設定時間為台北
          $datetime = date("Y-m-d H:i:s");//時間

          $placeUp = topups($id,$place_Names ,$datetime);//更新檔名
          $true = $db->query($placeUp);//執行更新指令

          if ($true) {
            message("更新成功,但照片未更新",$Basename);
          }else {
            message("更新失敗s",$Basename);
          }
          // message("照片未更新",$Basename);

        }else if ($error == 0) {

          $pic_Name = $_FILES["top6"]["name"][$key];//檔案名稱
          $pic_tmp = $_FILES["top6"]["tmp_name"][$key];//抓取檔案
          $pic_size = $_FILES["top6"]["size"][$key];//抓取檔案大小
          $pic_tmps = strrchr($pic_Name,".");//取得檔案的副檔名
          $pictmp = array('.jpg', '.JPG', '.png', '.PNG'
          , '.bmp', '.gif');//設定副檔名

          if (!in_array($pic_tmps,$pictmp)) {//檢查副檔名

            $pictmp = "不好意思,只接受".implode(" ",$pictmp)."的副檔名";
            message($pictmp,$Basename);
            break;

          }else if($pic_size > 2097152){//檢查檔案大小

            $picsize = basename("$pic_Name","$pic_tmps");
            message($picsize."檔案已超過2MB",$Basename);

            break;
          }//$pic_size

          date_default_timezone_set('Asia/Taipei');//設定時間為台北
          $datetime = date("Y-m-d H:i:s");//時間

          if(file_exists($top6dir.$pic_Name)){//檢查是否有相同檔案

            $picName = basename($pic_Name,"$pic_tmps");//去除副檔名,留檔名
            // $placeUp = PlaceUp($place_Name,$Introduction ,$pic_Name ,$picDir, $datetime);//更新檔名
            move_uploaded_file($pic_tmp,$top6dir.$pic_Name);//把檔案移到指定dir

            $placeUp = topup($id,$place_Names ,$pic_Name ,$top6dir, $datetime);//更新檔名
            $true = $db->query($placeUp);//執行更新指令
            if ($true) {
              message("更新成功,但資料夾裡已有名稱".$picName."的檔案",$Basename);
            }else {
              message("更新失敗",$Basename);
            }

          }else{

          move_uploaded_file($pic_tmp,$top6dir.$pic_Name);//把檔案移到指定dir
          $placeUp = topup($id,$place_Names ,$pic_Name ,$top6dir, $datetime);//更新檔名
          $true = $db->query($placeUp);//執行更新指令
          if ($true) {
            message("更新成功",$Basename);
          }else {
            message("更新失敗",$Basename);
          }
          }//else
        }//$error == 0
      }//foreach
    }//$_FILES["picName"]


  }

if (isset($_POST["insert"])) {

  if (isset($_FILES["top6"])) {

    foreach($_FILES["top6"]["tmp_name"] as $key => $top6_tmp_name){//檔案以陣列方式接收
      // echo "key:".$key;
      $top6_error = $_FILES["top6"]["error"][$key];//取得錯誤值

      if ($top6_error == 4 ) {//判斷是否有錯誤

        // message($pictmp,$Basename);

        echo "
        <script>
          var value = '不小心按到送出了齁~~~';
          var basename= '$topbasename';
          alerts(value,basename);
        </script>
        ";

      }else if($top6_error == 0){

        $top6_name = $_FILES["top6"]["name"][$key];//抓取檔案名稱
        $top6_tmp = $_FILES["top6"]["tmp_name"][$key];//抓取檔案
        $top6_size = $_FILES["top6"]["size"][$key];//抓取檔案大小
        $top6_tmps = strrchr($top6_name,".");//取得檔案的副檔名

        $toptmp = array('.jpg', '.JPG', '.png', '.PNG'
                        , '.bmp', '.gif');//設定副檔名

        if (!in_array($top6_tmps,$toptmp)) {//檢查副檔名

          $toptmp = "不好意思,只接受".implode(" ",$toptmp)."的副檔名";
          echo "
          <script>
          var value = '$toptmp';
          var basename= '$topbasename';
          alerts(value, basename);
          </script>";
          break;

        }else if($top6_size > 2097152){//檢查檔案大小

          $topsize = $top6_name."檔案已超過2MB";
          echo "
          <script>
          var value = '$topsize';
          var basename= '$topbasename';
          alerts(value, basename);
          </script>";
          break;
        }

        date_default_timezone_set('Asia/Taipei');//設定時間為台北
        $date = date("Y-m-d H:i:s");//時間

        // if(file_exists($top6dir.$top6_name)){//檢查是否有相同檔案
        //
        //   $topname = basename($top6_name,"$top6_tmps");//去除副檔名,留檔名
        //   $topup = topup($topid[$_SESSION["topnums"]],"",$top6_name, $top6dir, $date);//更新檔名
        //   $db->query($topup);//執行更新指令
        //
        //   $value = "更新成功,資料夾裡已有名稱{$topname}的檔案";
        //
        //   echo "
        //   <script>
        //   var value = '$value';
        //   var basename= '$topbasename';
        //
        //   alerts(value, basename);
        //   </script>
        //   ";
        //
        // }else {

          move_uploaded_file($top6_tmp,$top6dir.$top6_name);//把檔案移到指定dir

          foreach ($display as $keys => $value) {
            // echo "keys:".$keys;
            $topid[$keys] = $value['id'];//取id
            $toptimes[$keys] = $value['datetime'];//取時間
          }
          $displayc = count($display);//計算總共有幾筆資料
          //時間比對
          if (isset($_SESSION["topnum"]) && isset($_SESSION["topnums"])) {

            $topnum = $_SESSION["topnum"];
            $topnums = $_SESSION["topnums"];

            if ($topnum > ($displayc-1)) {

              $_SESSION["topnum"] = 0;
              $topnum = $_SESSION["topnum"];

            }

            if ($topnums > ($displayc-1)) {
              $_SESSION["topnums"] = 0;
              $topnums = $_SESSION["topnums"];
            }
            //時間比對
            $toptime = strtotime($toptimes["$topnum"]) < strtotime($toptimes["$topnums"]);
            $toptimess = strtotime($toptimes["$topnum"]) == strtotime($toptimes["$topnums"]);

            if($toptime || $toptimess){

              $topup = topup($topid["$topnum"],"",$top6_name, $top6dir, $date);//更新檔名
              $db->query($topup);//執行更新指令
              message("上傳成功",$topbasename);

            }else {

              $topup = topup($topid["$topnums"],"",$top6_name, $top6dir, $date);//更新檔名
              $db->query($topup);//執行更新指令
              message("上傳成功",$topbasename);
            }
            $_SESSION["topnum"]++;
            $_SESSION["topnums"]++;

          }//if(session["topnum"])
        // }//else
      }//if($top6_error)
    }//foreach
  }//FILE["top6"]
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
        <a href='#edit' data-toggle='modal' onclick='Edit(\"$id\",\"$placeName\",\"$picDir\",\"$picName\")'>
          <i class='ace-icon fa fa-pencil'></i>
        </a>

        <a href='#' onclick='bootboxs(\"$id\")'>
          <i class='ace-icon fa fa-times red'></i>
        </a>
      </div>
    </li>
    ";
  }


  // while ($row = $topse->fetch()) {
  //   $top6 = $row[1];
  //   echo "
  //   <li>
  //     <a href='index/top6/images/$top6' title='$top6' data-rel='colorbox'>
  //       <img width='150' height='150' alt='150x150' src='index/top6/images/$top6'/>
  //       <div class='text'>
  //         <div class='inner'>$top6</div>
  //       </div>
  //     </a>
  //
  //     <div class='tools tools-top'>
  //       <a href='#'>
  //         <i class='ace-icon fa fa-pencil'></i>
  //       </a>
  //
  //       <a href='#'>
  //         <i class='ace-icon fa fa-times red'></i>
  //       </a>
  //     </div>
  //   </li>
  //   ";
  // }

    if(isset($_POST["clear"])){
      $clear = $_POST["clear"];
      for ($i=0; $i < 6; $i++) {
        $clear = $db->query("UPDATE top SET
                          place='',
                          name = ' ',
                          datetime = ' '
                        WHERE
                          '".$i."'
                        ");
      }

      $_SESSION["topnum"] = 0;
      $_SESSION["topnums"] = 1;
      message("重設成功",$Basename);

    }
$db = null;
?>
