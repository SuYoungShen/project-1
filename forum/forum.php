<?php

  if ($_SERVER['PHP_SELF'] == "/project-1/index.php") {
      $DisplayForumSes = ForumSe($db);//在首頁使用
  }else {
      $DisplayForumSes = ForumSes($db, $accounts);//在會員中心使用
  }
  ?>
<?php foreach ($DisplayForumSes as $key => $value) { ?>
<tr>
  <td><?php echo $value["theme"]; ?></td>
  <td><?php echo $value["posted"]; ?></td>
  <td><?php echo $value["email"]; ?></td>
  <td><?php echo $value["message"]; ?></td>
  <td><?php echo $value["reply"]; ?></td>
  <td><?php echo $value["datetime"] ?></td>
</tr>
<?php } ?>
