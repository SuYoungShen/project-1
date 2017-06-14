<?php
  $dbname="project";
  include ("mysql/connect.php");//連接資料庫
  include ("common.php");//常用語法

$sliderse = $db->query(sliderse());//查詢slider資料表
$display = $sliderse->fetchAll();
$sliderdir='index/slider/images/';//slider放毒片路徑
$sliderbasename = basename($_SERVER["PHP_SELF"]);


if (!isset($_SESSION["slidernum"]) && !isset($_SESSION["slidernums"])) {
  $_SESSION["slidernum"] = 0;
  $_SESSION["slidernums"] = 1;
}

  $slidertime =  $display;

  if (isset($_FILES["slider"])) {

    foreach($_FILES["slider"]["tmp_name"] as $key => $value){//檔案以陣列方式接收
      // echo "key:".$key;
      $slider6_error = $_FILES["slider"]["error"][$key];//取得錯誤值

      if ($slider6_error == 4 ) {//判斷是否有錯誤

        echo "
        <script>
          var value = '不小心按到送出了齁~~~';
          var basename='$sliderbasename';
          alerts(value,basename);
        </script>";

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
		      var sliderbasename = '$sliderbasename';
          alerts(value,sliderbasename);
          </script>";
          break;

        }else if($slider6_size > 2097152){//檢查檔案大小

          $slidersize = $slider6_name."檔案已超過2MB";
          echo "
          <script>
            var value = '$slidersize';
			var sliderbasename = '$sliderbasename';
            alerts(value,sliderbasename);
          </script>";
          break;
        }

        date_default_timezone_set('Asia/Taipei');//設定時間為台北
        $date = date("Y-m-d H:i:s");//時間

        if(file_exists($sliderdir.$slider6_name)){//檢查是否有相同檔案

          $slidername = basename($slider6_name,"$slider6_tmps");//去除副檔名,留檔名
          echo "
          <script>
            var value = '資料夾裡已有名稱'+$slidername+'的檔案';
			      var sliderbasename = '$sliderbasename';
            alerts(value,sliderbasename);
          </script>
          ";

        }else {

          move_uploaded_file($slider6_tmp,$sliderdir.$slider6_name);//把檔案移到指定dir

          foreach ($display as $keys => $value) {
            // echo "keys:".$keys;
            $sliderid[$keys] = $value[0];//取id
            $slidertimes[$keys] = $value[3];//取時間
          }
          $slidertimec = count($display);//計算總共有幾筆資料
          //時間比對
          if (isset($_SESSION["slidernum"]) && isset($_SESSION["slidernums"])) {

            $slidernum = $_SESSION["slidernum"];
            $slidernums = $_SESSION["slidernums"];

            if ($slidernum > ($slidertimec-1)) {

              $_SESSION["slidernum"] = 0;
              $slidernum = $_SESSION["slidernum"];

            }

            if ($slidernums > ($slidertimec-1)) {
              $_SESSION["slidernums"] = 0;
              $slidernums = $_SESSION["slidernums"];

            }
            //時間比對
            $slidertime = strtotime($slidertimes["$slidernum"]) < strtotime($slidertimes["$slidernums"]);
            $slidertimess = strtotime($slidertimes["$slidernum"]) == strtotime($slidertimes["$slidernums"]);

            if($slidertime || $slidertimess){

              $sliderup = sliderup($slider6_name, $sliderdir, $date, $sliderid["$slidernum"]);//更新檔名
              $db->query($sliderup);//執行更新指令
              echo "
              <script>
                var value = '上傳成功';
    			      var sliderbasename = '$sliderbasename';
                alerts(value,sliderbasename);
              </script>
              ";

            }else {

              $sliderup = sliderup($slider6_name, $sliderdir, $date, $sliderid["$slidernums"]);//更新檔名
              $db->query($sliderup);//執行更新指令
              echo "
              <script>
                var value = '上傳成功';
    			      var sliderbasename = '$sliderbasename';
                alerts(value,sliderbasename);
              </script>
              ";
            }
            $_SESSION["slidernum"]++;
            $_SESSION["slidernums"]++;

          }//if(session["topnum"])
        }//else
      }//if($top6_error)
    }//foreach
  }//FILE["top6"]

  // echo "See=".$_SESSION["topnums"]."<br>";
  // echo "SESSION=".$_SESSION["topnum"]."<br>";



// while ($row = $sliderse->fetch()) {
//
//      echo   $row[1]."<br>"; //0資料表欄位
//
// }

foreach ($display as $key => $value) {
  $picName = $value[1];
  $picDir = $value[2];
  $picNames = basename($picName,".jpg");
  if (!empty($picName) && !empty($picDir)) {
    $display = $picDir.$picName;
  }else {
    $display = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
  }
  echo "
  <div class='sl-slide item$key' data-orientation='horizontal' data-slice1-rotation='-25' data-slice2-rotation='-25' data-slice1-scale='2' data-slice2-scale='2'>
    <div class='sl-slide-inner'>
      <div class='container'>
        <img class='pull-right' src='$display' alt='' height='520' width='950'/>
        <h2>$picNames</h2>
        <!-- <h3 class='gap'>Tincidunt condimentum eros</h3>
        <a class='btn btn-large btn-transparent' href='#'>Learn More</a> -->
      </div>
    </div>
  </div>
  ";
}



    // foreach ($rows as $key => $value) { //取得資料庫
    //   echo $key.$value[3]."<br>";//顯示id && 時間
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

?>
