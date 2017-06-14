<?php

  function sliderup(&$slider6name, &$slider6dir, &$date, &$key)
  {

    $sliderup = "UPDATE slider SET
                      name = '".$slider6name."',
                      path = '".$slider6dir."',
                      datetime = '".$date."'
                    WHERE
                      id = '".$key."'
                    ";
                    
    return $sliderup;
  }

  function sliderse()
  {
    $sliderse = "SELECT * From slider";
    return $sliderse;
  }

  function sliderin()
  {
    $sliderin ="INSERT INTO `slider`
                          (`id`)
                          VALUES
                          (
                            [value-1],[value-2],[value-3],[value-4]
                          )";
  }

 ?>
