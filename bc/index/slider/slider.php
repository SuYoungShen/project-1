<?php
  $dbname="project";
  include ("mysql/connect.php");//連接資料庫
  include ("common.php");//常用語法

$sliderse = $db->query(sliderse());//查詢slider資料表
$display = $sliderse->fetchAll();
$sliderdir='index/slider/images/';//slider放毒片路徑

echo "<li data-target='#myCarousel' data-slide-to='0' class='active'></li>";

function counts($display){
  for ($i=1; $i < count($display); $i++) {
    echo "<li data-target='#myCarousel' data-slide-to='$i'></li>";
  }
}

function display($display, $sliderdir){

  foreach ($display as $key => $value) {

    $picName = $pic[$key] = $value["name"];
    $picDir = $value["path"];

  }
  if (!empty($pic['0'])) {
    $displayss = $sliderdir.$pic['0'];
  }else {
    $displayss = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
  }

  echo "
    <div class='active item'>
      <img src='$displayss' width='60%'  class='img-responsive' alt=''>
    </div>
  ";

  for ($i=1; $i < count($pic); $i++) {
    if (!empty($picName)) {
      $displays = $sliderdir.$pic[$i];
    }else {
      $displays = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
    }

    echo "

    <div class='item'>
      <img src='$displays' width='60%'  class='img-responsive' alt=''>
    </div>
    ";
  }


  // echo "
  //   <div class='sl-slide item$key' data-orientation='horizontal' data-slice1-rotation='-25' data-slice2-rotation='-25' data-slice1-scale='2' data-slice2-scale='2'>
  //     <div class='sl-slide-inner'>
  //       <div class='container' style='max-height:445px'>
  //         <img class='pull-right' width='950' src='$displays' alt=''/>
  //         <!-- <h3 class='gap'>Tincidunt condimentum eros</h3>
  //         <a class='btn btn-large btn-transparent' href='#'>Learn More</a> -->
  //       </div>
  //     </div>
  //   </div>
  // ";
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
