<style type="text/css">
	marquee img
	{
		border-width: 0px; /* 避免img受到超連結影響出現border，所以border-width: 0px;*/
		width: 350px;
		height: 233px;
	}
</style>
<marquee scrollAmount="20" BEHAVIOR="scroll"  loop="0">
<?php

	$dbname="project";
	include("mysql/connect.php");//top資料表
	// include ("common.php");

	$topse = $db->query(topse());
	$row=$topse->fetchAll();
	foreach ($row as $key => $value) {
		$picName = $value["name"];
		$picDir = $value["path"];
		if (!empty($picName) && !empty($picDir)) {
			$display = $picDir.$picName;
		}else {
			$display = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
		}

		echo "
		<img src='$display' />
		";
	}

	$db=null;
	function topse()
  {
    $topse = "SELECT * From top";
    return $topse;
  }
?>
</marquee>

<!-- <img src="../images/marquee/white.gif" />
<img src="../images/marquee/black.gif" /> -->
