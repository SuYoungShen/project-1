<script type="text/javascript" src="../assets/js/alert.js"></script>

<?php

  $dbname="project";
  include ("../mysql/connect.php");
  include ("common.php");

  if (isset($_POST["About"])) {

    $about = $_POST["About"];

    if ($about == "") {

      echo "
      <script>
        alerts('請輸入資料','../about.php');
      </script>
      ";

    }else {

      date_default_timezone_set('Asia/Taipei');//設定時間為台北
      $datetime = date("Y-m-d H:i:s");//時間
      $true = $db->query(AboutIn($about,$datetime));

      if($true == true){
        echo "
        <script>
          alerts('新增成功','../about.php');
        </script>
        ";
      }else {
        echo "新增失敗";
      }
    }
  }




 // echo $b;
    // $db->query(AboutDe($b));

  // }

  // $c=$db->query(AboutSe());
  //
  // $test = $c->fetchAll();
  // foreach ($test as $key => $value) {
  //   echo $value[0]."<br>";
  // }
$db=null;
?>
