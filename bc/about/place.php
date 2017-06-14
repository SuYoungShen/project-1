<?php
  $dbname="project";
  include ("mysql/connect.php");

  $placeSe = $db->query(PlaceSe());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "about/place/images/";



    // if(isset($_POST["placeName"]) && isset($_POST["Introduction"])) {
  if (isset($_POST["update"])) {
    if (isset($_POST["placeName"]) && isset($_POST["Introduction"])) {

      $id = $_POST["id"];
      $place_Names = $_POST["placeName"];
      $Introductions = $_POST["Introduction"];

    if(isset($_FILES["picName"])){

      foreach($_FILES["picName"]["tmp_name"] as $key => $value){//檔案以陣列方式接收

        $error = $_FILES["picName"]["error"][$key];//取得錯誤碼

        if ($error == 4) {

          date_default_timezone_set('Asia/Taipei');//設定時間為台北
          $datetime = date("Y-m-d H:i:s");//時間

          $placeUp = PlaceUps($id,$place_Names,$Introductions ,$datetime);//更新檔名
          $true = $db->query($placeUp);//執行更新指令
          if ($true) {
            message("更新成功,但照片未更新",$Basename);
          }else {
            message("更新失敗s",$Basename);
          }
          // message("照片未更新",$Basename);

        }else if ($error == 0) {

          $pic_Name = $_FILES["picName"]["name"][$key];//檔案名稱
          $pic_tmp = $_FILES["picName"]["tmp_name"][$key];//抓取檔案
          $pic_size = $_FILES["picName"]["size"][$key];//抓取檔案大小
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
            $placeUp = PlaceUp($id, $place_Names, $Introductions , $pic_Name, $picDir, $datetime);//更新檔名
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
}


if (isset($_POST["insert"])) {

  if (isset($_POST["placeName"]) && isset($_POST["Introduction"])) {

    $place_Name = $_POST["placeName"];
    $Introduction = $_POST["Introduction"];

    if(isset($_FILES["picName"])){

      foreach($_FILES["picName"]["tmp_name"] as $key => $value){//檔案以陣列方式接收

        $error = $_FILES["picName"]["error"][$key];//取得錯誤碼

        if ($error == 4) {

          date_default_timezone_set('Asia/Taipei');//設定時間為台北
          $datetime = date("Y-m-d H:i:s");//時間

          $placeIn = PlaceIn($place_Name,$Introduction ,$pic_Name ,$picDir, $datetime);//檔名

          $true = $db->query($placeIn);//執行上傳指令
          message("照片還沒傳",$Basename);

        }else if ($error == 0) {

          $pic_Name = $_FILES["picName"]["name"][$key];//檔案名稱
          $pic_tmp = $_FILES["picName"]["tmp_name"][$key];//抓取檔案
          $pic_size = $_FILES["picName"]["size"][$key];//抓取檔案大小
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
          //
          // if(file_exists($picDir.$pic_Name)){//檢查是否有相同檔案
          //
          //   $picName = basename($pic_Name,"$pic_tmps");//去除副檔名,留檔名
          //   message("資料夾裡已有名稱".$picName."的檔案",$Basename);
          //
          // }else{


          move_uploaded_file($pic_tmp,$picDir.$pic_Name);//把檔案移到指定dir
          $placeIn = PlaceIn($place_Name,$Introduction ,$pic_Name ,$picDir, $datetime);//更新檔名
          $true = $db->query($placeIn);//執行更新指令
          if ($true) {
            message("新增成功",$Basename);
          }else {
            message("新增失敗",$Basename);
          }
          // }//else
        }//$error == 0
      }//foreach
    }//$_FILES["picName"]
  }//$_POST["insert"]
}//isset($_POST["placeName"])



  foreach ($display as $key => $value) {

    $id = $value["id"];
    $place_Name = $place_Names[$key]=$value["place"];
    $Introduction = $value["Introduction"];
    $pic_name = $value["name"];
    $picDir = $value["path"];
    $datetime = $value["datetime"];

    echo "
      <tr>
        <td class='center'>
          <label class='pos-rel'>
            <input type='checkbox' class='ace' value='".$place_Name."'/>
            <span class='lbl'></span>
          </label>
        </td>
        <td>
          $place_Name
        </td>
        <td>$Introduction</td>


        <td class='ace-thumbnails clearfix'>
          <a href='$picDir$pic_name' title='$place_Name'  data-rel='colorbox'>$pic_name</a>
        </td>
        <td>$datetime</td>


        <td>
          <div class='hidden-sm hidden-xs action-buttons'>
            <a class='green' href='#edit' data-toggle='modal' onclick='Edit(\"$id\",\"$place_Name\",\"$Introduction\",\"$picDir\",\"$pic_name\")'>
              <i class='ace-icon fa fa-pencil bigger-130'></i>
            </a>

            <a class='red' name='Delete' onclick='bootboxs(\"$place_Names[$key]\")'>
              <i class='ace-icon fa fa-trash-o bigger-130'></i>
              <input type='hidden' name='DePlace[]' value='$place_Names[$key]'>
            </a>
          </div>

          <div class='hidden-md hidden-lg'>
            <div class='inline pos-rel'>
              <button class='btn btn-minier btn-yellow dropdown-toggle' data-toggle='dropdown' data-position='auto'>
                <i class='ace-icon fa fa-caret-down icon-only bigger-120'></i>
              </button>

              <ul class='dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close'>

                <li>
                  <a href='#edit' data-toggle='modal' class='tooltip-success' data-rel='tooltip' title='Edit'  onclick='Edit(\"$id\",\"$place_Name\",\"$Introduction\",\"$picDir\",\"$pic_name\")'>
                    <span class='green'>
                      <i class='ace-icon fa fa-pencil-square-o bigger-120'></i>
                    </span>
                  </a>
                </li>

                <li>
                  <a href='#' name='Delete'  class='tooltip-error' data-rel='tooltip' title='Delete' onclick='bootboxs(\"$place_Names[$key]\")'>
                    <span class='red'>
                      <i class='ace-icon fa fa-trash-o bigger-120'></i>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </td>
      </tr>

    ";

  }


  $db=null;

 ?>
