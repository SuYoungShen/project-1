<script type="text/javascript" src="../../assets/js/alert.js"></script>

<?php
  $dbname = "project";
  include ("../../mysql/connect.php");
  include ("../common.php");
  $BackWeb="../../../forum.php";//回到哪個頁面

  $true = isset($_POST["theme"]) &&
          !empty($_POST["theme"]) &&
          isset($_POST["posted"]) &&
          !empty($_POST["posted"]) &&
          isset($_POST["email"]) &&
          !empty($_POST["email"]) &&
          isset($_POST["message"]) &&
          !empty($_POST["message"])
          ;

  if ($true) {

    $theme = trim($_POST["theme"]);//網址
    $posted = trim($_POST["posted"]);//發表人
    $email = trim($_POST["email"]);//email
    $message = trim($_POST["message"]);//留言
    // $datetime=$_COOKIE["datetime"];//時間
    date_default_timezone_set('Asia/Taipei');//設定時間為台北
    $datetime = date("Y-m-d H:i:s");//時間

    // $trues=$db->query(ForumIn($theme, $posted, $email));

      $trues=$db->query(
                        ForumIn(
                                $theme,
                                $posted,
                                $email,
                                $message,
                                $datetime
                              )
                        );

      if ($trues) {
        message("留言成功",$BackWeb);

      }else {
        message("留言失敗",$BackWeb);
      }
  }else {
    message("來亂的???",$BackWeb);
  }


  $db=null;
 ?>
