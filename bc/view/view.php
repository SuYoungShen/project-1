<?php

  $dbname="project";
  include ("mysql/connect.php");

  $viewse = $db->query(ViewSe());//查詢資料表
  $display = $viewse->fetchAll();

  $picDir = "view/view/images/";
  $Basename="view.php";
  $deletePage = "view/view/delete.php";

  $msg = "";

  foreach ($display as $key => $value) {
    $id = $value["id"];
    $vi=$viewpoint[$key]=$value["viewpoint"];
    $picpath=$path[$key] = $value["path"];
    $pic=$picnames[$key]=$value["picname"];
    $dat=$datetime[$key] = $value["datetime"];

    if (!empty($pic) && !empty($picpath)) {
      $displays = $picpath.$pic;
    }else {
      $displays = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
    }

    echo "
    <li>
      <a href='$displays' title='$vi' data-rel='colorbox'>
        <img width='150' height='150' alt='150x150' src='$displays' />
        <div class='text'>
          <div class='inner'>$vi</div>
        </div>
      </a>

      <div class='tools tools-top'>
      <!--
        <a href='#'>
          <i class='ace-icon fa fa-link'></i>
        </a>

        <a href='#'>
          <i class='ace-icon fa fa-paperclip'></i>
        </a>
        -->
        <a href='#edits' data-toggle='modal' onclick='Edits(\"$id\",\"$vi\",\"$picpath\",\"$pic\")'>
          <i class='ace-icon fa fa-pencil'></i>
        </a>

        <a href='#'  onclick='bootboxs(\"$id\",\"$deletePage\")'>
          <i class='ace-icon fa fa-times red'></i>
        </a>
      </div>
    </li>
    ";
  }

  if(isset($_POST["clear"])){

    $clear = $_POST["clear"];
    for ($i=0; $i < 9; $i++) {
      $clear = $db->query("UPDATE view SET
                              picname = ' ',
                              path='',
                              datetime = ' '
                      WHERE
                        '".$i."'
                      ");
    }

    $_SESSION["viewnum"] = 0;
    $_SESSION["viewnums"] = 1;
    message("",$Basename);
  }

  $db=null;
?>
