<?php

  function message($value,$basename){
    echo "
      <script>
        var value = '$value';
        var basename = '$basename';
        alerts(value,basename);
      </script>
    ";
  }

  function AreaUp($id, $posted, $message, $reply, $email, $site, $datetime)
  {

      $AreaUp ="UPDATE `area` SET
                                `posted`='".$posted."',
                                `message`='".$message."',
                                `reply`='".$reply."',
                                `email`='".$email."',
                                `site`='".$site."',
                                `replydatetime`='".$datetime."'
                                WHERE `id`='".$id."'
                ";

    return $AreaUp;
  }

  function AreaDe($id)
  {

    $AreaDe = "DELETE FROM `area`
                            WHERE
                            `id`= '".$id."'
                            ";

    return $AreaDe;
  }

  function AreaIn(
                    $place_name, $viewpoint, $pic,$posted, $message,
                    $email, $site, $BackWeb, $datetime )
  {

      $AreaIn ="INSERT INTO `area`(
                                    `placename`,
                                    `viewpoint`,
                                    `posted`,
                                    `message`,
                                    `email`,
                                    `site`,
                                    `WebSite`,
                                    `datetimes`
                                  )VALUES (
                                  '".$place_name."',
                                  '".$viewpoint."',
                                  '".$pic."',
                                  '".$posted."',
                                  '".$message."',
                                  '".$email."',
                                  '".$site."',
                                  '".$BackWeb."',
                                  '".$datetime."'
                                  )";

    return $AreaIn;
  }

  function AreaSe()
  {
    $AreaSe = "SELECT * From area ORDER BY datetimes DESC";

    return $AreaSe;
  }

  function ForumSe()
  {
    $ForumSe = "SELECT * From forum ORDER BY datetime DESC";

    return $ForumSe;
  }

  // function ForumIn($themes, $posteds, $emails){
  //   $ForumIn = "INSERT INTO `forum`(
  //                                   `theme`,
  //                                   `posted`,
  //                                   `email`
  //                                 ) VALUES (
  //                                   '".$themes."',
  //                                   '".$posteds."',
  //                                   '".$emails."'
  //                                 )";
  //   return $ForumIn;
  // }
  function ForumIn($themes, $posteds, $emails, $messages, $datetimes){
    $ForumIn = "INSERT INTO `forum`(
                                    `theme`,
                                    `posted`,
                                    `email`,
                                    `message`,
                                    `datetime`
                                  ) VALUES (
                                    '".$themes."',
                                    '".$posteds."',
                                    '".$emails."',
                                    '".$messages."',
                                    '".$datetimes."'
                                  )";
    return $ForumIn;
  }

  function ForumUp($id, $themes, $posteds, $emails, $messages, $replys, $datetimes){

    $ForumUp = "
                UPDATE
                      `forum`
                 SET
                      `theme`='".$themes."',
                      `posted`='".$posteds."',
                      `email`='".$emails."',
                      `message`='".$messages."',
                      `reply`='".$replys."',
                      `datetime`='".$datetimes."'
                WHERE
                      `id`='".$id."'
                ";

    return $ForumUp;
  }

  function ForumDe($id){

    $ForumDe = "
                  DELETE
                    FROM
                      `forum`
                    WHERE
                          `id`='".$id."'
                ";

    return $ForumDe;
  }

 ?>
