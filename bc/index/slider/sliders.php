<?php

  $dbname="project";
  include ("mysql/connect.php");//連接資料庫
  include ("common.php");//常用語法

  $sliderdir='index/slider/images/';
  $sliderbasename = basename($_SERVER["PHP_SELF"]);

if (!isset($_SESSION["slidernum"]) && !isset($_SESSION["slidernums"])) {
  $_SESSION["slidernum"] = 0;
  $_SESSION["slidernums"] = 1;
}

  $slidertime = $db->query(sliderse());


  if (isset($_FILES["slider"])) {

    foreach($_FILES["slider"]["tmp_name"] as $key => $slider6_tmp_name){//檔案以陣列方式接收
      // echo "key:".$key;
      $slider6_error = $_FILES["slider"]["error"][$key];//取得錯誤值

      if ($slider6_error == 4 ) {//判斷是否有錯誤

        // message($pictmp,$Basename);

        echo "
        <script>
          var value = '不小心按到送出了齁~~~';
          var basename= '$sliderbasename';
          alerts(value,basename);
        </script>
        ";

      }else if($slider6_error == 0){

        $slider6_name = $_FILES["slider"]["name"][$key];//抓取檔案名稱
        $slider6_tmp = $_FILES["slider"]["tmp_name"][$key];//抓取檔案
        $slider6_size = $_FILES["slider"]["size"][$key];//抓取檔案大小
        $slider6_tmps = strrchr($slider6_name,".");//取得檔案的副檔名

        $slidertmp = array('.jpg', '.JPG', '.png', '.PNG'
                        , '.bmp', '.gif');//設定副檔名

        if (!in_array($slider6_tmps,$slidertmp)) {//檢查副檔名

          $slidertmp = "不好意思,只接受".implode(" ",$slidertmp)."的副檔名";
          echo "
          <script>
          var value = '$slidertmp';
          var basename= '$sliderbasename';
          alerts(value, basename);
          </script>";
          break;

        }else if($slider6_size > 2097152){//檢查檔案大小

          $slidersize = $slider6_name."檔案已超過2MB";
          echo "
          <script>
          var value = '$slidersize';
          var basename= '$sliderbasename';
          alerts(value, basename);
          </script>";
          break;
        }

        date_default_timezone_set('Asia/Taipei');//設定時間為台北
        $date = date("Y-m-d H:i:s");//時間

        // if(file_exists($slider6dir.$slider6_name)){//檢查是否有相同檔案
        //
        //   $slidername = basename($slider6_name,"$slider6_tmps");//去除副檔名,留檔名
        //   $value = "資料夾裡已有名稱{$slidername}的檔案";
        //
        //   echo "
        //   <script>
        //   var value = '$value';
        //   var basename= '$sliderbasename';
        //
        //   alerts(value, basename);
        //   </script>
        //   ";
        //
        // }else {

          move_uploaded_file($slider6_tmp,$slider6dir.$slider6_name);//把檔案移到指定dir

          foreach ($display as $keys => $value) {
            // echo "keys:".$keys;
            $sliderid[$keys] = $value['id'];//取id
            $slidertimes[$keys] = $value['datetime'];//取時間
          }
          $displayc = count($display);//計算總共有幾筆資料
          //時間比對
          if (isset($_SESSION["slidernum"]) && isset($_SESSION["slidernums"])) {

            $slidernum = $_SESSION["slidernum"];
            $slidernums = $_SESSION["slidernums"];

            if ($slidernum > ($displayc-1)) {

              $_SESSION["slidernum"] = 0;
              $slidernum = $_SESSION["slidernum"];

            }

            if ($slidernums > ($displayc-1)) {
              $_SESSION["slidernums"] = 0;
              $slidernums = $_SESSION["slidernums"];

            }
            //時間比對
            $slidertime = strtotime($slidertimes["$slidernum"]) < strtotime($slidertimes["$slidernums"]);
            $slidertimess = strtotime($slidertimes["$slidernum"]) == strtotime($slidertimes["$slidernums"]);

            if($slidertime || $slidertimess){

              $sliderup = sliderup($slider6_name, $slider6dir, $date, $sliderid["$slidernum"]);//更新檔名
              $db->query($sliderup);//執行更新指令
              message("上傳成功",$sliderbasename);
            }else {

              $sliderup = sliderup($slider6_name, $slider6dir, $date, $sliderid["$slidernums"]);//更新檔名
              $db->query($sliderup);//執行更新指令
              message("上傳成功",$sliderbasename);


            }
            $_SESSION["slidernum"]++;
            $_SESSION["slidernums"]++;

          }//if(session["slidernum"])
        // }//else
      }//if($top6_error)
    }//foreach
  }//FILE["top6"]



  echo "<ol class='carousel-indicators'>";
    while($display = $toptime->fetch()){
    $id = $display["id"];
    $picName = $display["name"];
    $picDir = $display["path"];
    $picNames = basename($picName,".jpg");
    if (!empty($picName) && !empty($picDir)) {
      $display = $picDir.$picName;
    }else {
      $display = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
    }
    echo "
      <li data-target='#carousel-example-generic' data-slide-to='$id' class='active'></li>
    ";
  }
  echo "</ol>";
  echo "
  <div class='carousel-inner' role='listbox'>
    <div class='item active'>";
  while($display = $toptime->fetch()){
  $id = $display["id"];
  $picName = $display["name"];
  $picDir = $display["path"];
  $picNames = basename($picName,".jpg");
  if (!empty($picName) && !empty($picDir)) {
    $display = $picDir.$picName;
  }else {
    $display = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
  }
echo "<img src='$display' alt=''>
</div>
<div class='item'>
  <img src='$display' alt=''>
</div>

</div>
";

}
  echo "


    <div class='item'>
      <img src='$display' alt=''>
    </div>

  </div>
  ";
  //
  // foreach ($display as $key => $value) {
  //   $picName = $value["name"];
  //   $picDir = $value["path"];
  //   $picNames = basename($picName,".jpg");
  //   if (!empty($picName) && !empty($picDir)) {
  //     $display = $picDir.$picName;
  //   }else {
  //     $display = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
  //   }
  //   echo "
  //
  //   <ol class='carousel-indicators'>
  //     <li data-target='#carousel-example-generic' data-slide-to='$key' class='active'></li>
  //   </ol>
  //
  //   <div class='carousel-inner' role='listbox'>
  //     <div class='item active'>
  //       <img src='$display' alt=''>
  //
  //     </div>
  //     <div class='item'>
  //       <img src='$display' alt='...'>
  //     </div>
  //
  //   </div>
  //   ";
  //
  // }



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
        $clear = $db->query("UPDATE slider SET
                          name = ' ',
                          datetime = ' '
                        WHERE
                          '".$i."'
                        ");
      }

      $_SESSION["slidernum"] = 0;
      $_SESSION["slidernums"] = 1;

    }
$db = null;
?>
