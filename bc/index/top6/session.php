<?php

  formResubmitPrint();
  
  //隨機產生亂碼
  function formResubmitGen(){
    $min = 10000;
    $_SESSION["r"] = rand($min, getrandmax());

  }

  function formResubmitPrint(){
    formResubmitGen();
  }

  function formResubmitCheck(){

    $r =  $_SESSION["r"]==$_POST["r"];
    $_SESSION["r"] = formResubmitGen();

    return $r;
  }

 ?>
