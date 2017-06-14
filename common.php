<?php
$DisplaySlider = sliderse($db);
$CountSilder = count($DisplaySlider);
$sliderdir='bc/index/slider/images/';//slider放毒片路徑
$SliderPic0 = $sliderdir.$DisplaySlider[0][name];//第一張照片

function sliderse($db)
{
  $sliderse = "SELECT name FROM slider";
  $slideQuery = $db->query($sliderse);
  $display = $slideQuery->fetchAll();
  return $display;
}
$DisplayAbout = AboutSe($db);//查詢高雄簡介

function AboutSe($db)
{
  $about = "SELECT about From `about`";
  $AboutQuery = $db->query($about);
  $display = $AboutQuery->fetch();
  return $display;
}
$DisplayTop = TopSe($db);//查詢熱門景點
$TopDir='bc/index/top6/images/';//slider放毒片路徑

function TopSe($db)
  {
    $topse = "SELECT place, name From top";
    $TopQuery = $db->query($topse);
    $display = $TopQuery->fetchAll();
    return $display;
  }

?>
