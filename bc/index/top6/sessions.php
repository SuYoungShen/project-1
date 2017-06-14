<?php


  if(isset($_POST["randd"]) && isset($_POST["randd"]) == 'Y')
  {

    isset($_SESSION['num']) or die ("no session");
    if ($_SESSION['num']==400){

      print '<a href="'. $_SERVER['PHP_SELF'] .'">Please try again</a>';

      $_SESSION['num']=500;
    } else {

      echo "However you have submitted";

    }
  }else {
      $_SESSION["num"] = 400;
  }

?>
