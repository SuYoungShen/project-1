<?php
  $dbname="project";
  include ("mysql/connect.php");
  include ("message/common.php");

  $AreaSe = $db->query(AreaSe());//搜尋
  $Display = $AreaSe->fetchAll();//顯示

  foreach ($Display as $key => $value) {

    $placename = $value[0];//地區名
    $viewpoint = $value[1];//景點名
    $posted = $value[2];//發表人
    $message = $value[3];//留言
    $reply = $value[4];//回覆
    $email = $value[5];//email
    $site = $value[6];//網址
    $datetime = $value[7];//時間

    echo "
      <tr>
        <td class='center'>
          <label class='pos-rel'>
            <input type='checkbox' class='ace' />
            <span class='lbl'></span>
          </label>
        </td>

        <td>
          <a href='#'>$placename</a>
        </td>
        <td>$viewpoint</td>
        <td class='hidden-480'>$posted</td>
        <td>$message</td>
        <td>$reply</td>
        <td>$email</td>
        <td>$site</td>
        <td class='hidden-480'>
          <span class='label label-sm label-success'>$datetime</span>
        </td>

        <td>
          <div class='hidden-sm hidden-xs action-buttons'>
            <a class='blue' href='#'>
              <i class='ace-icon fa fa-search-plus bigger-130'></i>
            </a>

            <a class='green' href='#'>
              <i class='ace-icon fa fa-pencil bigger-130'></i>
            </a>

            <a class='red' href='#'>
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
                  <a href='#' class='tooltip-info' data-rel='tooltip' title='View'>
                    <span class='blue'>
                      <i class='ace-icon fa fa-search-plus bigger-120'></i>
                    </span>
                  </a>
                </li>

                <li>
                  <a href='#' class='tooltip-success' data-rel='tooltip' title='Edit'>
                    <span class='green'>
                      <i class='ace-icon fa fa-pencil-square-o bigger-120'></i>
                    </span>
                  </a>
                </li>

                <li>
                  <a href='#' class='tooltip-error' data-rel='tooltip' title='Delete'>
                    <span class='red'>
                      <i class='ace-icon fa fa-trash-o bigger-120'></i>
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
<tr>
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
  <td class="hidden-480">2,595</td>
  <td>Feb 18</td>
  <td></td>
  <td></td>
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
  <td class="hidden-480">4,400</td>
  <td>Mar 11</td>
  <td></td>
  <td></td>
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
</tr>
