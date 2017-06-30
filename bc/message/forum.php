<?php
  // $dbname="project";
  // include ("mysql/connect.php");
  include ("common.php");
  $ForumSe = $db->query(ForumSe());
  $display = $ForumSe->fetchAll();

  foreach ($display as $key => $value) {

    $id = $value["id"];//id
    $theme = $themes[$key] = $value["theme"];//地區名
    $posted = $posteds[$key] = $value["posted"];//發表人
    $email = $emails[$key] = $value["email"];//email
    $message = $messages[$key] = $value["message"];//留言
    $reply = $replys[$key] = $value["reply"];//回覆
    $datetime = $datetimes[$key] = $value["datetime"];//時間

    echo "
      <tr>
        <td class='center'>
          <label class='pos-rel'>
            <input type='checkbox' class='ace' value='".$id."'/>
            <span class='lbl'></span>
          </label>
        </td>

        <td>
          <a href='#'>$theme</a>
        </td>
        <td>$posted</td>
        <td class='hidden-480'>$email</td>
        <td>$message</td>
        <td>$reply</td>
        <td>$datetime</td>
        <td>
          <div class='hidden-sm hidden-xs action-buttons'>
            <a class='green' href='#discuss' data-toggle='modal'
              onclick='Edit(
                            \"$id\",
                            \"$themes[$key]\",
                            \"$posteds[$key]\",
                            \"$emails[$key]\",
                            \"$messages[$key]\",
                            \"$replys[$key]\",
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
                  <a href='#discuss' class='tooltip-success' data-toggle='modal' data-rel='tooltip' title='Edit'>
                    <span class='green'>
                      <i class='ace-icon fa fa-pencil-square-o bigger-120' onclick='Edit(
                                    \"$id\",
                                    \"$themes[$key]\",
                                    \"$posteds[$key]\",
                                    \"$emails[$key]\",
                                    \"$messages[$key]\",
                                    \"$replys[$key]\",
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
<!-- <tr>
  <td class="center">
    <label class="pos-rel">
      <input type="checkbox" class="ace" />
      <span class="lbl"></span>
    </label>
  </td>

  <td>
    <a href="#">base.com</a>
  </td>
  <td>$35</td>
  <td>$35</td>
  <td class="hidden-480">2,595</td>
  <td>Feb 18</td>
  <td></td>

  <td class="hidden-480">
    <span class="label label-sm label-success">Registered</span>
  </td>

  <td>
    <div class="hidden-sm hidden-xs action-buttons">
      <a class="blue" href="#">
        <i class="ace-icon fa fa-search-plus bigger-130"></i>
      </a>

      <a class="green" href="#">
        <i class="ace-icon fa fa-pencil bigger-130"></i>
      </a>

      <a class="red" href="#">
        <i class="ace-icon fa fa-trash-o bigger-130"></i>
      </a>
    </div>

    <div class="hidden-md hidden-lg">
      <div class="inline pos-rel">
        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
          <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
        </button>

        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
          <li>
            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
              <span class="blue">
                <i class="ace-icon fa fa-search-plus bigger-120"></i>
              </span>
            </a>
          </li>

          <li>
            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
              <span class="green">
                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
              </span>
            </a>
          </li>

          <li>
            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
              <span class="red">
                <i class="ace-icon fa fa-trash-o bigger-120"></i>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </td>
</tr>

<tr>
  <td class="center">
    <label class="pos-rel">
      <input type="checkbox" class="ace" />
      <span class="lbl"></span>
    </label>
  </td>

  <td>
    <a href="#">max.com</a>
  </td>
  <td>$60</td>
  <td>$60</td>
  <td class="hidden-480">4,400</td>
  <td>Mar 11</td>
<td></td>
  <td class="hidden-480">
    <span class="label label-sm label-warning">Expiring</span>
  </td>

  <td>
    <div class="hidden-sm hidden-xs action-buttons">
      <a class="blue" href="#">
        <i class="ace-icon fa fa-search-plus bigger-130"></i>
      </a>

      <a class="green" href="#">
        <i class="ace-icon fa fa-pencil bigger-130"></i>
      </a>

      <a class="red" href="#">
        <i class="ace-icon fa fa-trash-o bigger-130"></i>
      </a>
    </div>

    <div class="hidden-md hidden-lg">
      <div class="inline pos-rel">
        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
          <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
        </button>

        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
          <li>
            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
              <span class="blue">
                <i class="ace-icon fa fa-search-plus bigger-120"></i>
              </span>
            </a>
          </li>

          <li>
            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
              <span class="green">
                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
              </span>
            </a>
          </li>

          <li>
            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
              <span class="red">
                <i class="ace-icon fa fa-trash-o bigger-120"></i>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </td>
</tr> -->
