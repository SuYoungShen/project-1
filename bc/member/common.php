<?php

  function memberUpdate(&$account, &$passowrd, &$email, &$name, &$datetime)
  {

    $memberup = "UPDATE member SET
                      account = '".$account."',
                      password = '".$passowrd."',
                      email = '".$email."',
                      name = '".$name."',
                      datetime = '".$datetime."'
                    WHERE
                      account = '".$account."'
                    ";

    return $memberup;
  }

  function memberSelect()
  {
    $memberse = "SELECT * From member";

    return $memberse;
  }

  function memberInsert($account ,$password ,$email ,$name ,$datetime)
  {

    $memberin ="INSERT INTO `member`
                            (
                              `account`,
                              `password`,
                              `email`,
                              `name`,
                              `datetime`
                            )
                            VALUES
                            (
                              '$account',
                              '$password',
                              '$email',
                              '$name',
                              '$datetime'
                            )";

    return $memberin;
  }

  function memberDelete($account){

    $memberDelete = "DELETE FROM `member`
                            WHERE
                            `account`= '$account'
                            ";

    return $memberDelete;
  }

 ?>
