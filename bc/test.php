<?php
include ("mysql/connect.php");//連接資料庫
include ("index/top6/common.php");//常用語法
$test = $db->query(topse());

$t = "SELECT * From top WHERE id='0'";
$tt = $db->query($t);

  while ($ttt = $tt->fetch()) {
    echo $ttt[0];
    echo $ttt[2];
  }

 ?>
