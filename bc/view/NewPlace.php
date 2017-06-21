<?php
include("../mysql/connect.php");
$true = isset($_POST["placeNames"]) &&
        !empty($_POST["placeNames"]) &&
        isset($_POST["insert"]);

if ($true) {

  $placeName = $_POST["placeNames"];
  date_default_timezone_set('Asia/Taipei');//設定時間為台北
  $datetime = date("Y-m-d H:i:s");//時間
  $How = PlaceIn($db, $placeName, $datetime);

  if ($How) {
    echo "
    <script>
      var value = '送出成功';
      alert(value);
      document.location.href='../view.php';
    </script>
    ";
  }else {
    echo "
    <script>
      var value = '送出失敗';
      alert(value);
      document.location.href='../view.php';
    </script>
    ";
  }
}else {

  echo "
  <script>
  var value = '賣來亂';
  alert(value);
  document.location.href='../view.php';
  </script>";
}
function PlaceIn($db, $placeName, $datetime){
    $placeIn = "INSERT INTO `place`(`place`, `datetime`) VALUES ('".$placeName."','".$datetime."')";
    $placeQu = $db->query($placeIn);
    return $placeQu;
}
?>
