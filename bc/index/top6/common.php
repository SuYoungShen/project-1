<?php

  function topup($key, $placename, $top6name, $top6dir, $date)
  {

    $topup = "UPDATE top SET
                      place = '".$placename."',
                      name = '".$top6name."',
                      path = '".$top6dir."',
                      datetime = '".$date."'
                    WHERE
                      id = '".$key."'
                    ";
    return $topup;
  }

  function topups(&$key, &$placename, &$date)
  {

    $topup = "UPDATE top SET
                      place = '".$placename."',
                      datetime = '".$date."'
                    WHERE
                      id = '".$key."'
                    ";
    return $topup;
  }

  function topse()
  {
    $topse = "SELECT * From top";
    return $topse;
  }

  function topin()
  {
    $topin ="INSERT INTO `top`
                          (`id`)
                          VALUES
                          (
                            [value-1],[value-2],[value-3],[value-4]
                          )";
  }

  function topDe($de){
    $topDe= "DELETE FROM `top` WHERE ";
    return $topDe;
  }

  function message($value,$basename){
    echo "
      <script>
      var value = '$value';
      var basename= '$basename';

      alerts(value, basename);
      </script>
    ";
  }
 ?>
