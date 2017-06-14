<script type="text/javascript" src="../../assets/js/alert.js"></script>
 <?php
  $dbname="view";
  include ("../../mysql/connect.php");
  include ("../common.php");

  $picDir = "./images/";
  $picPath = "view/view/images/";
  $Basename = "../../view.php";
  $msg = "";

  $ViewSe = $db->query(ViewSe());//查詢資料表
  $display = $ViewSe->fetchAll();

  if (isset($_POST["update"])) {

    $id = $_POST["id"];
    $viewpoint = $_POST["viewpoint"];

    if (isset($_FILES["picName"])) {

      foreach ($_FILES["picName"]["tmp_name"] as $key => $value) {

        $pic_error = $_FILES["picName"]["error"][$key];//取得錯誤值

        if ($pic_error==4) {

          date_default_timezone_set('Asia/Taipei');//設定時間為台北
          $datetime = date("Y-m-d H:i:s");//時間
          $true = $db->query(ViewUps(
                                      $id,
                                      $viewpoint,
                                      $datetime
                                    ));//更新檔名

          if ($true) {
            message("更新成功,但照片未更新",$Basename);
          }else {
            message("更新失敗",$Basename);
          }

        }else if($pic_error == 0){

          $pic_name = $_FILES["picName"]["name"][$key];//抓取檔案名稱
          $pic_tmp = $_FILES["picName"]["tmp_name"][$key];//  抓取檔案
          $pic_size = $_FILES["picName"]["size"][$key];//抓取檔案大小
          $pic_tmps = strrchr($pic_name,".");//取得檔案的副檔名

          $pictmp = array('.jpg', '.JPG', '.png', '.PNG'
          , '.bmp', '.gif');//設定副檔名

          if (!in_array($pic_tmps,$pictmp)) {//檢查副檔名

            $pictmp = "不好意思,只接受".implode(" ",$pictmp)."的副檔名";
            message($pictmp,$Basename);

            break;

          }else if($pic_size > 2097152){//檢查檔案大小

            $picsize = $pic_name."檔案已超過2MB";

            message($picsize,$Basename);

            break;
          }

          date_default_timezone_set('Asia/Taipei');//設定時間為台北
          $datetime = date("Y-m-d H:i:s");//時間

          if(file_exists($picDir.$pic_name)){//檢查是否有相同檔案

            $picname = basename($pic_name,"$pic_tmps");//去除副檔名,留檔名
            $How = $db->query(ViewUp(
                                      $id,
                                      $viewpoint,
                                      $pic_name,
                                      $picPath,
                                      $datetime
                                    ));
            if ($How == true) {
              message("更新成功,資料夾裡已有名稱'+'$picname'+'的檔案",$Basename);
            }else{
              message("更新失敗s",$Basename);
            }

          }else {

            move_uploaded_file($pic_tmp,$picDir.$pic_name);//把檔案移到指定dir
            $How = $db->query(ViewUp(
                                      $id,
                                      $viewpoint,
                                      $pic_name,
                                      $picPath,
                                      $datetime
                                    ));
            if ($How == true) {
              message("更新成功",$Basename);
            }else{
              message("更新失敗",$Basename);
            }


            }//else
          }//if($pic_error)
        }//foreach
      }
    }
// }
  // if ($required) {
  //
  //   $picName = $_POST["picName"];//地區名
  //   $viewpoint = $_POST["viewpoint"];//景點名
  //   $attractions = $_POST["attractions"];//景點介紹
  //   $arrival = $_POST["arrival"];//如何到達
  //
  //   if (isset($_FILES["picName"])) {
  //
  //     foreach($_FILES["picName"]["tmp_name"] as $key => $pic_tmp_name){//檔案以陣列方式接收
  //       // echo "key:".$key;
  //       $pic_error = $_FILES["picName"]["error"][$key];//取得錯誤值
  //
  //       if ($pic_error == 4 ) {//判斷是否有錯誤
  //
  //         message("不小心按到送出了齁",$Basename);
  //
  //       }else if($pic_error == 0){
  //
  //         $pic_name = $_FILES["picName"]["name"][$key];//抓取檔案名稱
  //         $pic_tmp = $_FILES["picName"]["tmp_name"][$key];//  抓取檔案
  //         $pic_size = $_FILES["picName"]["size"][$key];//抓取檔案大小
  //         $pic_tmps = strrchr($pic_name,".");//取得檔案的副檔名
  //
  //         $pictmp = array('.jpg', '.JPG', '.png', '.PNG'
  //                         , '.bmp', '.gif');//設定副檔名
  //
  //         if (!in_array($pic_tmps,$pictmp)) {//檢查副檔名
  //
  //           $pictmp = "不好意思,只接受".implode(" ",$pictmp)."的副檔名";
  //           message($pictmp,$Basename);
  //
  //           break;
  //
  //         }else if($pic_size > 2097152){//檢查檔案大小
  //
  //           $picsize = $pic_name."檔案已超過2MB";
  //           echo "
  //           <script>
  //           var value = '$picsize';
  //           var basename= '$Basename';
  //           alerts(value, basename);
  //           </script>";
  //           break;
  //         }
  //
  //         date_default_timezone_set('Asia/Taipei');//設定時間為台北
  //         $datetime = date("Y-m-d H:i:s");//時間
  //
  //         if(file_exists($picDir.$pic_name)){//檢查是否有相同檔案
  //
  //           $picname = basename($pic_name,"$pic_tmps");//去除副檔名,留檔名
  //           $true = $db->query(PlaceIn(
  //                                       $placeName,
  //                                       $viewpoint,
  //                                       $attractions,
  //                                       $arrival,
  //                                       $pic_name,
  //                                       $picPath,
  //                                       $datetime
  //                                     ));
  //           if ($true) {
  //             message("新增成功,資料夾裡已有名稱'+'$picname'+'的檔案",$Basename);
  //
  //           }else {
  //             message("新增失敗",$Basename);
  //           }
  //
  //         }else {
  //
  //           move_uploaded_file($pic_tmp,$picDir.$pic_name);//把檔案移到指定dir
  //           $true = $db->query(PlaceIn(
  //                                       $placeName,
  //                                       $viewpoint,
  //                                       $attractions,
  //                                       $arrival,
  //                                       $pic_name,
  //                                       $picPath,
  //                                       $datetime
  //                                     ));
  //           if ($true) {
  //             message("新增成功",$Basename);
  //
  //           }else {
  //             message("新增失敗",$Basename);
  //           }
  //
  //         }//else
  //       }//if($pic_error)
  //     }//foreach
  //   }
  //
  //
  // }else {
  //   echo "失敗";
  // }
  // if (isset($_FILES)) {
  //
  //   foreach ($_FILES["picName"]["tmp_name"] as $key => $value) {
  //     $name = $_FILES["picName"]["name"][$key];
  //
  //
  //   }
  //
  // }



  if(isset($_POST["clear"])){
    $clear = $_POST["clear"];
    for ($i=0; $i < 9; $i++) {
      $clear = $db->query("UPDATE `view`
                          SET
                          `viewpoint`='',
                          `picname`='',
                          `path`='',
                          `datetime`=''
                          WHERE id='$i'");
    }

    $_SESSION["viewnum"] = 0;
    $_SESSION["viewnums"] = 1;

  }

  // $db=null;

 ?>
