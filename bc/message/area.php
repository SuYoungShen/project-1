<?php
  // $dbname="project";
  include ("mysql/connect.php");
  include ("common.php");

  $AreaSe = $db->query(AreaSe());//搜尋
  $Display = $AreaSe->fetchAll();//顯示

  foreach ($Display as $key => $value) {

    $id = $value["id"];//id
    $placename = $placenames[$key] = $value["placename"];//地區名
    $viewpoint = $viewpoints[$key] = $value["viewpoint"];//景點名
    $posted = $posteds[$key] = $value["posted"];//發表人
    $message = $messages[$key] = $value["message"];//留言
    $reply = $replys[$key] = $value["reply"];//回覆
    $email = $emails[$key] = $value["email"];//email
    $site = $sites[$key] = $value["site"];//網址
    $datetime = $datetimes[$key] =
    (strtotime($value["datetimes"]) > strtotime($value["replydatetime"]))?$value["datetimes"]:$value["replydatetime"];//時間

    echo "
      <tr>
        <td class='center'>
          <label class='pos-rel'>
            <input type='checkbox' class='ace' value='".$id."'/>
            <span class='lbl'></span>
          </label>
        </td>

        <td>
          <a href='#'>$placename</a>
        </td>
        <td>$viewpoint</td>
        <td>$posted</td>
        <td>$message</td>
        <td>$reply</td>
        <td  class='hidden-480'>$email</td>
        <td>$site</td>
        <td>$datetime</td>

        <td>
          <div class='hidden-sm hidden-xs action-buttons'>

            <a class='green' href='#reply' data-toggle='modal'
              onclick='Edit(
                            \"$id\",
                            \"$placenames[$key]\",
                            \"$viewpoints[$key]\",
                            \"$posteds[$key]\",
                            \"$messages[$key]\",
                            \"$replys[$key]\",
                            \"$emails[$key]\",
                            \"$sites[$key]\",
                            \"$datetimes[$key]\"
                            )'>
              <i class='ace-icon fa fa-pencil bigger-130'></i>
            </a>

            <a class='red' onclick='bootboxs(\"$id\")'>
              <i class='ace-icon fa fa-trash-o bigger-130'></i>
            </a>
          </div>

          <div class='hidden-md hidden-lg'>
            <div class='inline pos-rel'>
              <button class='btn btn-minier btn-yellow dropdown-toggle' data-toggle='dropdown' data-position='auto'>
                <i class='ace-icon fa fa-caret-down icon-only bigger-120'></i>
              </button>

              <ul class='dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close'>

                <li>
                  <a href='#reply' class='tooltip-success' data-rel='tooltip' title='Edit' data-toggle='modal'>
                    <span class='green'>
                      <i class='ace-icon fa fa-pencil-square-o bigger-120' onclick='Edit(
                                                                                        \"$id\",
                                                                                        \"$placenames[$key]\",
                                                                                        \"$viewpoints[$key]\",
                                                                                        \"$posteds[$key]\",
                                                                                        \"$messages[$key]\",
                                                                                        \"$replys[$key]\",
                                                                                        \"$emails[$key]\",
                                                                                        \"$sites[$key]\",
                                                                                        \"$datetimes[$key]\"
                                                                                        )'></i>
                    </span>
                  </a>
                </li>

                <li>
                  <a href='#' class='tooltip-error' data-rel='tooltip' title='Delete'>
                    <span class='red'>
                      <i class='ace-icon fa fa-trash-o bigger-120' onclick='bootboxs(\"$id\")'></i>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </td>
      </tr>
    ";

  }

  $db=null;
 ?>
