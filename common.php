<?php
$DisplaySlider = sliderse($db);
$CountSilder = count($DisplaySlider);
$bc = 'bc/';
$SliderPic0 = $bc.$DisplaySlider["0"]["path"].$DisplaySlider["0"]["name"];//第一張照片

function sliderse($db)
{
  $sliderse = "SELECT name, path FROM slider";
  $slideQuery = $db->query($sliderse);
  $display = $slideQuery->fetchAll();
  return $display;
}
$DisplayAbout = AboutSe($db);//查詢高雄簡介

function AboutSe($db)
{
  $about = "SELECT about From `about`  GROUP BY datetime DESC";
  $AboutQuery = $db->query($about);
  $display = $AboutQuery->fetch();
  return $display;
}
$DisplayTop = TopSe($db);//查詢熱門景點

function TopSe($db)
{
  $topse = "SELECT place, name, path, datetime FROM top";
  $TopQuery = $db->query($topse);
  $display = $TopQuery->fetchAll();
  return $display;
}

$DisplayPlace = PlaceSe($db);//景點的地區
function PlaceSe($db){
  $placeSe = "SELECT place FROM `places` GROUP BY place";
  $PlaceQuery = $db->query($placeSe);
  $display = $PlaceQuery->fetchAll();
  return $display;
}

$DisplayPlaceSes = PlaceSes($db);//景點的所有地區

function PlaceSes($db){
  $placeSe = "SELECT place, viewpoint, attractions, arrival, name,path FROM `places`";
  $PlaceQuery = $db->query($placeSe);
  $display = $PlaceQuery->fetchAll();
  return $display;
}

$DisplayForumSe = ForumSe($db);//前台討論區
function ForumSe($db)
{
  $ForumSe = "SELECT theme, posted, email, message, reply, datetime From forum ORDER BY datetime DESC";
  $ForumQuery = $db->query($ForumSe);
  $display = $ForumQuery->fetchAll();
  return $display;
}

function ForumSes($db, $accounts)//會員中心使用
{
    $ForumSe = "SELECT theme, posted, email, message, reply, datetime From forum WHERE acccount='".$accounts."' ORDER BY datetime DESC";
  $ForumQuery = $db->query($ForumSe);
  $display = $ForumQuery->fetchAll();
  return $display;
}

function FavSe($db, $accounts){//會員中心使用到,帳號登入後,查詢帳號所有加入的我的最愛
  $FavSe = "SELECT * FROM `favorite` WHERE `Account` = '".$accounts."'";
  $FavQuery = $db->query($FavSe);
  $display = $FavQuery->fetchAll();
  return $display;
}

?>
