<script type="text/javascript" src="../../assets/js/alert.js"></script>
<?php
  $dbname="project";
  include ("../../mysql/connect.php");
  include ("../common.php");
  $BackWeb="../../forum.php";//回到哪個頁面

  $true = isset($_POST["posted"]) &&
          !empty($_POST["posted"]) &&
          isset($_POST["posted"]) &&
          !empty($_POST["message"]) &&
          isset($_POST["replys"]) &&
          !empty($_POST["replys"])
          ;

  if ($true) {

    $id = $_POST["id"];
    $theme = trim($_POST["theme"]);//主題
    $posted = trim($_POST["posted"]);//發表人
    $email = trim($_POST["email"]);//email
    $message = trim($_POST["message"]);//訊息
    $reply = trim($_POST["replys"]);//回覆訊息

    date_default_timezone_set('Asia/Taipei');//設定時間為台北
    $datetime = date("Y-m-d H:i:s");//時間

     $trues = $db->query(
                          ForumUp(
                                  $id,
                                  $theme,
                                  $message,
                                  $email,
                                  $posted,
                                  $reply,
                                  $datetime
                                )
                        );

    if ($trues) {
      message("回覆成功",$BackWeb);
    }else {
      message("回覆失敗",$BackWeb);
    }
  }else {
    message("回覆失敗s",$BackWeb);

  }


  $db=null;
 ?>
