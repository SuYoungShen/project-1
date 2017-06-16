<?php foreach ($DisplayForumSe as $key => $value) { ?>
<tr>
  <td><?php echo $value["theme"]; ?></td>
  <td><?php echo $value["posted"]; ?></td>
  <td><?php echo $value["email"]; ?></td>
  <td><?php echo $value["message"]; ?></td>
  <td><?php echo $value["reply"]; ?></td>
  <td><?php echo $value["datetime"] ?></td>
</tr>
<?php } ?>
