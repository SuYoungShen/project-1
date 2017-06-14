<?php

  $dbname="project";
  include("mysql/connect.php");

  $placeSe =$db->query(Place());
  $display = $placeSe->fetchAll();

  foreach ($display as $key => $value) {
    $placeName = $value["place"];
    echo "<option value='$placeName'>$placeName</option>";
  }

  $db=null;
?>
