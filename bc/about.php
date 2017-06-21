
<!DOCTYPE html>
<html lang="zh-Hant">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>認識高雄</title>

		<meta name="description" content="Common form elements and layouts" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/datepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/colorpicker.min.css" />
		<link rel="stylesheet" href="assets/css/colorbox.min.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />
		<script src="assets/js/jquery.2.1.1.min.js"></script>

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<script type="text/javascript" src="assets/js/alert.js"></script>
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<!-- 表單驗證 -->
		<!-- <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script> -->
		<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
		<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
		<script type="text/javascript" src="about/place/js/fun.js"></script>
		<!-- 刪除 -->
    <script type="text/javascript" src="about/place/js/delete.js"></script>
    <!-- 刪除 -->

		<!-- 表單驗證 -->
		<script type="text/javascript" src="about/js/fun.js"></script>


		<!-- 登出時間 -->
		<script type="text/javascript" src="login/js/login_out_time.js"></script>
		<!-- 登出時間 -->

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<?php
			session_start();
			include("mysql/connect.php");
			include("login/check_login.php");
			Login_Check();
			Login_Out();
		 ?>
		<style>
		  .error{
		    color:red;
		  }
		</style>
	</head>

	<body class="no-skin">
		<?php
			include("header.php");
		?>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive">
				<script type="text/javascript">
				try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">


					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="index.php">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text">首頁 </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="active">
						<a href="about.php">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text">
								認識高雄
							</span>
						</a>
						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="view.php" >
							<i class="menu-icon fa fa-tree"></i>
							<span class="menu-text"> 景點</span>
						</a>

						<b class="arrow"></b>

					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bell icon-animated-bell"></i>
							<span class="menu-text"> 留言 </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="forum.php">
									<i class="menu-icon fa fa-caret-right"></i>
									討論區
								</a>

								<b class="arrow"></b>
							</li>

							<!-- <li class="">
								<a href="area-forum.php">
									<i class="menu-icon fa fa-caret-right"></i>
									景點留言
								</a>

								<b class="arrow"></b>
							</li> -->
						</ul>
					</li>

					<!--會員-->
					<li class="">
						<a href="member.php">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text"> 會員管理 </span>
						</a>

						<b class="arrow"></b>

					</li>
					<!--會員-->
				</ul><!-- /.nav-list -->


				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php">首頁</a>
							</li>
							<li>
								<a href="#">認識高雄</a>
							</li>
						</ul><!-- /.breadcrumb -->
						<!-- /.nav-search -->
<!--
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div> -->
						<!-- /.nav-search -->
					</div>
					<div class="hr hr-18 dotted hr-double"></div>

					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<div class="widget-box">
									<div class="widget-header">
										<h4 class="widget-title">高雄地區介紹</h4>
										<div class="widget-toolbar">

											<a href="#" data-action="collapse">
												<i class="ace-icon fa fa-chevron-up"></i>
											</a>

											<a href="#" data-action="close">
												<i class="ace-icon fa fa-times"></i>
											</a>
										</div>
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<div>
												<label for="form-field-8">簡介</label>
												<form action="about/about.php" method="post">
													<textarea class="form-control" name="About" id="form-field-8" placeholder="簡介(最多1000字)"></textarea>
													<br>
													<button class="btn btn-info" type="submit" name="AboutSubmit" >
														<i class="ace-icon fa fa-check bigger-110"></i>
														送出
													</button>
													<button class="btn btn-info" type="reset">
														<i class="ace-icon fa fa-check bigger-110"></i>
														重填
													</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div><!-- /.col -->
						</div>

						<div class="hr hr-18 dotted hr-double"></div>

						<!-- <div class="row"> -->
							<!--輪放-->
							<!-- <div class="page-header">
								<h1>輪放</h1>
							</div> -->

							<!--輪放-->
							<!-- <div class="col-sm-4">
								<div class="widget-box">
									<div class="widget-header">
										<h4 class="widget-title">上傳輪放照片</h4>

										<div class="widget-toolbar">
											<a href="#" data-action="collapse">
												<i class="ace-icon fa fa-chevron-up"></i>
											</a>

											<a href="#" data-action="close">
												<i class="ace-icon fa fa-times"></i>
											</a>
										</div>
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<form class="form-horizontal"  role="form" method="post"
											enctype="multipart/form-data">
											<div class="form-group">
												<div class="col-xs-12">
													<input name="carousel[]" type="file"
													id="id-input-file-3" multiple="multiple" />
												</div>
											</div>

											<label>
												<br/>
												<button class="btn btn-info" name="carouselIn" type="submit">
													<i class="ace-icon fa fa-check bigger-110"></i>
													送出
												</button>

												&nbsp; &nbsp; &nbsp;

											</label>
											<label>
												<br/>
												<button class="btn btn-info" type="submit" name = "clear">
													<i class="ace-icon fa fa-check bigger-110"></i>
													清除name
												</button>
												&nbsp; &nbsp; &nbsp;
											</label>
										</form>
									</div>
								</div>
							</div>
						</div> -->

						<!-- <div class="col-sm-8">
							<div class="widget-box">
								<div class="widget-header">
									<h4 class="widget-title">輪放</h4>

									<span class="widget-toolbar">
										<a href="#" data-action="settings">
											<i class="ace-icon fa fa-cog"></i>
										</a>

										<a href="#" data-action="reload">
											<i class="ace-icon fa fa-refresh"></i>
										</a>

										<a href="#" data-action="collapse">
											<i class="ace-icon fa fa-chevron-up"></i>
										</a>

										<a href="#" data-action="close">
											<i class="ace-icon fa fa-times"></i>
										</a>
									</span>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<ul class="ace-thumbnails clearfix">
											<?php
											//include("about/carousel.php");
											?>
										</ul>
									</div>
								</div>
							</div>
						</div> -->
						<!--輪放-->
					<!-- </div> -->


					<!-- <div class="hr hr-18 dotted hr-double"></div> -->

					<!--地區-->
					<!-- <div class="row">
						<div class="col-sm-12">
							<div class="table-header">
								高雄地區
								<a href="#place" class="btn btn-app btn-green btn-xs" role="button" class="green" data-toggle="modal">
									<i class="ace-icon glyphicon-plus bigger-150"></i>
								</a>
								<a href="#" name="Delete" class="btn btn-app btn-danger btn-xs" role="button" class="green" data-toggle="modal">
									<i class="ace-icon fa fa-trash-o bigger-150"></i>
								</a>
							</div>

							<!-- 地區 -->
							 <!-- <div class="table-responsive">
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
												<label class="pos-rel">
													<input type="checkbox" class="ace" />
													<span class="lbl"></span>
												</label>
											</th>
											<th>地區名</th>
											<th>地區介紹</th>
											<th>照片</th>
											<th>時間</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php
										//include("about/place.php");
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>  -->
					<!--地區-->

					<!-- <div class="hr hr-18 dotted hr-double"></div> -->

					<!--跑馬燈-->
					<!-- <div class="row">
						<div class="col-sm-12">
							<div class="widget-box">
								<div class="widget-header">
									<h4 class="widget-title">TOP6</h4>
									<span class="widget-toolbar">
										<a href="#" data-action="settings">
											<i class="ace-icon fa fa-cog"></i>
										</a>

										<a href="#" data-action="reload">
											<i class="ace-icon fa fa-refresh"></i>
										</a>

										<a href="#" data-action="collapse">
											<i class="ace-icon fa fa-chevron-up"></i>
										</a>

										<a href="#" data-action="close">
											<i class="ace-icon fa fa-times"></i>
										</a>

									</span>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<?php
										//include("about/marquee.php");
										?>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<!--跑馬燈-->

				</div><!--container-fluid-->

					<!--place-->
					<div id="place" class="modal fade " tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header no-padding">
									<div class="table-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
											<span class="white">&times;</span>
										</button>
										新增地點
									</div>
								</div>

								<div class="row">
									<div class="col-xs-12">
										<!-- PAGE CONTENT BEGINS -->
										<form class="form-horizontal" name="place"  role="form" method="post"
														enctype="multipart/form-data">
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 地區名	 </label>

												<div class="col-sm-9">
													<input type="text" id="form-field-1" name="placeName" placeholder="地區名" class="col-xs-10 col-sm-5" required="required"/>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> 地區介紹 </label>

												<div class="col-sm-9">
													<textarea type="text" id="form-field-1-1" name="Introduction" placeholder="地區介紹" class="col-xs-10 col-sm-5" required="required"/></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> 上傳圖檔 </label>
												<div class="col-sm-8">
													<input multiple="multiple" name="picName[]" type="file" id="id-input-file-4" />
												</div>
											</div>

											<div class="space-4"></div>

											<div class="clearfix form-actions">
												<div class="col-md-offset-3 col-md-9">
													<button class="btn btn-info" name="insert" type="submit">
														<i class="ace-icon fa fa-check bigger-110"></i>
														送出
													</button>

													&nbsp; &nbsp; &nbsp;
													<button class="btn" type="reset">
														<i class="ace-icon fa fa-undo bigger-110"></i>
														重填
													</button>

												</div>
											</div>
										</form>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- place ENDS -->


					<!--place-->
					<div id="edit" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header no-padding">
									<div class="table-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
											<span class="white">&times;</span>
										</button>
										更新地點
									</div>
								</div>

								<div class="row">
									<div class="col-xs-12">
										<!-- PAGE CONTENT BEGINS -->
										<form class="form-horizontal" name="place"  role="form" method="post"
														enctype="multipart/form-data">
											<div class="form-group">

												<label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> 地區名	 </label>

												<div class="col-sm-9">
													<input type="hidden" id="id" name="id"/>

													<input type="text" id="placeName" name="placeName" placeholder="地點名" class="col-xs-10 col-sm-5" required="required"/>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> 地區介紹 </label>

												<div class="col-sm-9">
													<textarea type="text" id="Introduction" name="Introduction" placeholder="景點介紹" class="col-xs-10 col-sm-5" required="required"/></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> 上傳圖檔 </label>

												<div class="col-sm-8">
													<input multiple="multiple" name="picName[]" type="file" id="id-input-file-5" />
													<!-- <input type="text" name="name" id="pic" value=""> -->
													<span id="pic"></span>
												</div>

											</div>

											<div class="space-4"></div>

											<div class="clearfix form-actions">
												<div class="col-md-offset-3 col-md-9">
													<button class="btn btn-info" name="update" type="submit">
														<i class="ace-icon fa fa-check bigger-110"></i>
														更新
													</button>

													&nbsp; &nbsp; &nbsp;
													<button class="btn" type="reset">
														<i class="ace-icon fa fa-undo bigger-110"></i>
														重填
													</button>
												</div>
											</div>
										</form>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- place ENDS -->

					<!--place-->
					<div id="edits" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header no-padding">
									<div class="table-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
											<span class="white">&times;</span>
										</button>
										更新地點
									</div>
								</div>

								<div class="row">
									<div class="col-xs-12">
										<!-- PAGE CONTENT BEGINS -->
										<form class="form-horizontal" name="place"  role="form" method="post"
														enctype="multipart/form-data">
											<div class="form-group">

												<label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> 地區名	 </label>

												<div class="col-sm-9">
													<input type="hidden" id="ids" name="id"/>
													<input type="text" id="placeNames" name="placeNamess" placeholder="地點名" class="col-xs-10 col-sm-5" required="required"/>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> 上傳圖檔 </label>

												<div class="col-sm-8">
													<input multiple="multiple" name="picNames[]" type="file" id="id-input-file-6" />
													<!-- <input type="text" name="name" id="pic" value=""> -->
													<span id="pics"></span>
												</div>

											</div>

											<div class="space-4"></div>

											<div class="clearfix form-actions">
												<div class="col-md-offset-3 col-md-9">
													<button class="btn btn-info" name="update" type="submit">
														<i class="ace-icon fa fa-check bigger-110"></i>
														更新
													</button>

													&nbsp; &nbsp; &nbsp;
													<button class="btn" type="reset">
														<i class="ace-icon fa fa-undo bigger-110"></i>
														重填
													</button>
												</div>
											</div>
										</form>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- place ENDS -->

				</div><!-- /.main-content-inner -->
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">By:</span>

						</span>

						&nbsp; &nbsp;

					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->
		<!-- 彈跳視窗 -->
		<script src="assets/js/bootbox.min.js"></script>
		<!-- 彈跳視窗 -->
		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/fuelux.spinner.min.js"></script>
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/daterangepicker.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="assets/js/jquery.knob.min.js"></script>
		<script src="assets/js/jquery.autosize.min.js"></script>
		<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>
    <!-- 彈跳視窗 -->
    <script src="assets/js/bootbox.min.js"></script>
    <!-- 彈跳視窗 -->

		<script src="../js/checkFile.js"></script><!--檢查檔案-->

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script src="assets/js/jquery.colorbox.min.js"></script>

		<!-- inline scripts related to this page -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.tableTools.min.js"></script>
		<script src="assets/js/dataTables.colVis.min.js"></script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var oTable1 =
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.dataTable( {
					responsive: true,
					bAutoWidth: true,
					"aoColumns": [
						{ "bSortable": true },
						null, null,null, null,
						{ "bSortable": true }
					],
					"aaSorting": [],

					//,
					//"sScrollY": "200px",
					//"bPaginate": false,

					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element

					"iDisplayLength": 50
					} );
				//oTable1.fnAdjustColumnSizing();


				//TableTools settings
				TableTools.classes.container = "btn-group btn-overlap";
				TableTools.classes.print = {
					"body": "DTTT_Print",
					"info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
					"message": "tableTools-print-navbar"
				}

				//initiate TableTools extension
				var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
					"sSwfPath": "assets/swf/copy_csv_xls_pdf.swf",

					"sRowSelector": "td:not(:last-child)",
					"sRowSelect": "multi",
					"fnRowSelected": function(row) {
						//check checkbox when row is selected
						try { $(row).find('input[type=checkbox]').get(0).checked = true }
						catch(e) {}
					},
					"fnRowDeselected": function(row) {
						//uncheck checkbox
						try { $(row).find('input[type=checkbox]').get(0).checked = false }
						catch(e) {}
					},

					"sSelectedClass": "success",
							"aButtons": [
						{
							"sExtends": "copy",
							"sToolTip": "Copy to clipboard",
							"sButtonClass": "btn btn-white btn-primary btn-bold",
							"sButtonText": "<i class='fa fa-copy bigger-110 pink'></i>",
							"fnComplete": function() {
								this.fnInfo( '<h3 class="no-margin-top smaller">Table copied</h3>\
									<p>Copied '+(oTable1.fnSettings().fnRecordsTotal())+' row(s) to the clipboard.</p>',
									1500
								);
							}
						},

						{
							"sExtends": "csv",
							"sToolTip": "Export to CSV",
							"sButtonClass": "btn btn-white btn-primary  btn-bold",
							"sButtonText": "<i class='fa fa-file-excel-o bigger-110 green'></i>"
						},

						{
							"sExtends": "pdf",
							"sToolTip": "Export to PDF",
							"sButtonClass": "btn btn-white btn-primary  btn-bold",
							"sButtonText": "<i class='fa fa-file-pdf-o bigger-110 red'></i>"
						},

						{
							"sExtends": "print",
							"sToolTip": "Print view",
							"sButtonClass": "btn btn-white btn-primary  btn-bold",
							"sButtonText": "<i class='fa fa-print bigger-110 grey'></i>",

							"sMessage": "<div class='navbar navbar-default'><div class='navbar-header pull-left'><a class='navbar-brand' href='#'><small>Optional Navbar &amp; Text</small></a></div></div>",

							"sInfo": "<h3 class='no-margin-top'>Print view</h3>\
										<p>Please use your browser's print function to\
										print this table.\
										<br />Press <b>escape</b> when finished.</p>",
						}
							]
					} );
				//we put a container before our table and append TableTools element to it
					$(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));

				//also add tooltips to table tools buttons
				//addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
				//so we add tooltips to the "DIV" child after it becomes inserted
				//flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
				setTimeout(function() {
					$(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
						var div = $(this).find('> div');
						if(div.length > 0) div.tooltip({container: 'body'});
						else $(this).tooltip({container: 'body'});
					});
				}, 200);



				//ColVis extension
				var colvis = new $.fn.dataTable.ColVis( oTable1, {
					"buttonText": "<i class='fa fa-search'></i>",
					"aiExclude": [0, 6],
					"bShowAll": true,
					//"bRestore": true,
					"sAlign": "right",
					"fnLabel": function(i, title, th) {
						return $(th).text();//remove icons, etc
					}

				});

				//style it
				$(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')

				//and append it to our table tools btn-group, also add tooltip
				$(colvis.button())
				.prependTo('.tableTools-container .btn-group')
				.attr('title', 'Show/hide columns').tooltip({container: 'body'});

				//and make the list, buttons and checkboxed Ace-like
				$(colvis.dom.collection)
				.addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
				.find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
				.find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');

        //全選
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				var DeAll=[];

				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header



					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;

  					if(th_checked) {

							$("input[name='DePlace[]'").each(function() {
								DeAll.push($(this).val());
							});

							Deletess(DeAll);
              tableTools_obj.fnSelect(row);

            }else{

							var Des=[];

							$("input[name='DePlace[]'").each(function() {//取未選值
								Des.push($(this).val());
							});

							DeAll = $.grep(DeAll, function(value) {

								return value == Des;
							});

							Deletess(DeAll);

              tableTools_obj.fnDeselect(row);
            }
					});
				});

        //單選
				var OnlyDelete = [];
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){

					var row = $(this).closest('tr').get(0);
					var Delete = $(this).val();//選擇的值

					$(this).each(function() {
						OnlyDelete.push(Delete);//新值放到陣列後面
					});

					if(!this.checked){

						Deletess(OnlyDelete);//刪除
            tableTools_obj.fnSelect(row);

          }else {


						OnlyDelete = $.grep(OnlyDelete, function(value) {
							return value != Delete;
						});
						Deletess(OnlyDelete);//單選刪除
						tableTools_obj.fnDeselect($(this).closest('tr').get(0));

				  }
				});

					$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});


				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header

					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});

				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});



				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}

			})
		</script>
		<!-- inline scripts related to this page -->




		<script type="text/javascript">
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});


				if(!ace.vars['touch']) {
					$('.chosen-select').chosen({allow_single_deselect:true});
					//resize the chosen on window resize

					$(window)
					.off('resize.chosen')
					.on('resize.chosen', function() {
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					}).trigger('resize.chosen');
					//resize chosen on sidebar collapse/expand
					$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
						if(event_name != 'sidebar_collapsed') return;
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					});


					$('#chosen-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
						 else $('#form-field-select-4').removeClass('tag-input-style');
					});
				}


				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});

				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});

				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});



				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});

				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});



				//"jQuery UI Slider"
				//range slider tooltip example
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";

						if( !ui.handle.firstChild ) {
							$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('span.ui-slider-handle').on('blur', function(){
					$(this.firstChild).hide();
				});


				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});

				$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true

					});
				});

				$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item


				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				// $('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])


				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}

				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});


				//$('#id-input-file-3')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);

				$('#id-input-file-4').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}

				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});

				$('#id-input-file-5').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}

				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});

				$('#id-input-file-6').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}

				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});

				//dynamically change allowed formats by changing allowExt && allowMime function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var whitelist_ext, whitelist_mime;
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "ace-icon fa fa-picture-o";

						whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
						whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "ace-icon fa fa-cloud-upload";

						whitelist_ext = null;//all extensions are acceptable
						whitelist_mime = null;//all mimes are acceptable
					}
					var file_input = $('#id-input-file-3');
					file_input
					.ace_file_input('update_settings',
					{
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					})
					file_input.ace_file_input('reset_input');

					file_input
					.off('file.error.ace')
					.on('file.error.ace', function(e, info) {
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format

						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']

						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]


						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/


						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any case you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});

				});

				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.closest('.ace-spinner')
				.on('changed.fu.spinbox', function(){
					//alert($('#spinner1').val())
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
				$('#spinner4').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus', icon_down:'ace-icon fa fa-minus', btn_up_class:'btn-purple' , btn_down_class:'btn-purple'});

				//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
				//or
				//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
				//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0


				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});

				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});


				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});


				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});

				$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});


				$('#colorpicker1').colorpicker();

				$('#simple-colorpicker-1').ace_colorpicker();
				//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
				//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
				//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
				//picker.pick('red', true);//insert the color if it doesn't exist


				$(".knob").knob();


				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					)

					//programmatically add a new
					var $tag_obj = $('#form-field-tags').data('tag');
					$tag_obj.add('Programmatically Added');
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}


				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})

				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					if(!ace.vars['touch']) {
						$(this).find('.chosen-container').each(function(){
							$(this).find('a:first-child').css('width' , '210px');
							$(this).find('.chosen-drop').css('width' , '210px');
							$(this).find('.chosen-search input').css('width' , '200px');
						});
					}
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/



				$(document).one('ajaxloadstart.page', function(e) {
					$('textarea[class*=autosize]').trigger('autosize.destroy');
					$('.limiterBox,.autosizejs').remove();
					$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
				});

			});
		</script>


		<!--顯示照片-->
		<script type="text/javascript">
			jQuery(function($) {
	var $overflow = '';
	var colorbox_params = {
		rel: 'colorbox',
		reposition:true,
		scalePhotos:true,
		scrolling:false,
		previous:'<i class="ace-icon fa fa-arrow-left"></i>',
		next:'<i class="ace-icon fa fa-arrow-right"></i>',
		close:'&times;',
		current:'{current} of {total}',
		maxWidth:'100%',
		maxHeight:'100%',
		onOpen:function(){
			$overflow = document.body.style.overflow;
			document.body.style.overflow = 'hidden';
		},
		onClosed:function(){
			document.body.style.overflow = $overflow;
		},
		onComplete:function(){
			$.colorbox.resize();
		}
	};

	$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
	$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon


	$(document).one('ajaxloadstart.page', function(e) {
		$('#colorbox, #cboxOverlay').remove();
   });
})
		</script>
	</body>
</html>
