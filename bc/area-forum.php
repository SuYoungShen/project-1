<!DOCTYPE html>
<html lang="zh-Hant">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>景點留言</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		<script src="assets/js/jquery.2.1.1.min.js"></script>
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

<!-- 自行套 -->
		<!-- <script type="text/javascript" src="message/area/js/validate.js"></script> -->
		<script type="text/javascript" src="message/area/js/fun.js"></script>
		<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
		<!-- 刪除 -->
		<!-- <script type="text/javascript" src="message/area/js/delete.js"></script> -->
		<!-- 刪除 -->
		<script type="text/javascript" src="assets/js/alert.js"></script>
		<!-- 彈跳視窗 -->
		<script src="assets/js/bootbox.min.js"></script>
		<!-- 彈跳視窗 -->

		<!-- 登出時間 -->
		<script type="text/javascript" src="login/js/login_out_time.js"></script>
		<!-- 登出時間 -->

<!-- 自行套 -->

<!-- 表單驗證 -->
	<!-- <script src="assets/js/jquery.validate.js"></script> -->
	<!-- <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script> -->
<!-- 表單驗證 -->
<style>
	.error{
		color: red;
	}
</style>
<script type="text/javascript">
$(function(){
	//須與form表單ID名稱相同
	$("#replyss").validate({
		rules:{
			email:{
				required:true
			}
		},
		messages:{
			email:{
				required:"必填"
			}
		}

	});
});
</script>
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
	</head>

	<body class="no-skin ">
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

					 <li class="">
						 <a href="about.php">
							 <i class="menu-icon fa fa-book"></i>
							 <span class="menu-text">
								 認識高雄
							 </span>
						 </a>
						 <b class="arrow"></b>
					 </li>

					 <li class="">
						 <a href="view.php">
							 <i class="menu-icon fa fa-tree"></i>
							 <span class="menu-text"> 景點介紹</span>
						 </a>

						 <b class="arrow"></b>

						 <li class="active open">
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

								 <li class="active">
									 <a href="area-forum.php">
										 <i class="menu-icon fa fa-caret-right"></i>
										 景點留言
									 </a>
									 <b class="arrow"></b>
								 </li>
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
				 </div><!--sidebar-->


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
									 <a href="#">留言</a>
								 </li>
								 <li class="active">景點留言</li>
							 </ul><!-- /.breadcrumb -->

							 <!-- <div class="nav-search" id="nav-search">
								 <form class="form-search">
									 <span class="input-icon">
										 <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
										 <i class="ace-icon fa fa-search nav-search-icon"></i>
									 </span>
								 </form>
							 </div> -->
							 <!-- /.nav-search -->
						 </div><!--breadcrumbs-->

						 <div class="container-fluid">
							 <div class="page-header">
								 <h1>景點留言</h1>
							 </div><!-- /.page-header -->

							 <!--會員-->
							 <div class="row">
								 <div class="col-xs-12 col-sm-12">
									 <div class="table-header">

										 <a href="#" name="Delete" class="btn btn-app btn-danger btn-xs" role="button" class="green" data-toggle="modal">
											 <i class="ace-icon fa fa-trash-o bigger-150"></i>
										 </a>
									 </div>

									 <div class="table-responsive">
										<table id="dynamic-table" class="table table-striped table-bordered table-hover">
											 <thead>
												 <tr>
													 <th class="center">
														 <label class="pos-rel">
															 <input type="checkbox" class="ace" />
															 <span class="lbl"></span>
														 </label>
													 </th>
													 <th>地區</th>
													 <th>景點名</th>
													 <th>發表人</th>
													 <th>留言</th>
													 <th >回覆</th>
													 <th class="hidden-480">E-mail</th>
													 <th>網址</th>
													 <th>
														 <i class="ace-icon fa fa-clock-o bigger-110"></i>
														 最新回應時間
													 </th>

													 <th></th>
												 </tr>
											 </thead>

											 <tbody>
												 <?php
												 include("message/area.php");
												 ?>
											 </tbody>
										 </table>
									 </div>
								</div>
							</div>
							 <!--會員-->
							 <hr>
						 </div><!--container-fluid-->


						 <!--place-->
						 <div id="reply" class="modal fade" tabindex="-1">
							 <div class="modal-dialog">
								 <div class="modal-content">
									 <div class="modal-header no-padding">
										 <div class="table-header">
											 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
												 <span class="white">&times;</span>
											 </button>
											 &nbsp;
										 </div>
									 </div>

									 <div class="row">
										 <div class="col-xs-12">
											 <!-- PAGE CONTENT BEGINS -->
											 <form class="form-horizontal" id="replyss" method="post" role="form" action="message/area/update.php">

												 <div class="form-group">
													 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 地區	 </label>

													 <div class="col-sm-9">
														 <input type="text" id="placename" name="placename"  class="col-xs-10 col-sm-5" readonly="readonly"/>
														 <input type="hidden" id="id" name="id" value="">
													 </div>
												 </div>

												 <div class="form-group">
													 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 景點名	 </label>

													 <div class="col-sm-9">
														 <input type="text" id="viewpoint" name="viewpoint"  class="col-xs-10 col-sm-5" readonly="readonly"/>
													 </div>
												 </div>

												 <div class="form-group">
													 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 發表人	 </label>

													 <div class="col-sm-9">
														 <input type="text" id="posted" name="posted"  placeholder="(訪客、抓取會員名)" class="col-xs-10 col-sm-5" />
													 </div>
												 </div>

												 <div class="form-group">
													 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 發表內容	 </label>

													 <div class="col-sm-9">
														 <!-- <input type="text" id="messages" name="messages" value=""> -->
														 <textarea  id="messages" name="message" placeholder="想說什麼???" class="col-xs-10 col-sm-5" /></textarea>
													 </div>
												 </div>

												 <div class="form-group">
													 <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> 回覆 </label>

													 <div class="col-sm-9">
														 <textarea  id="replys" name="reply" placeholder="管理員回覆內容" class="col-xs-10 col-sm-5" /></textarea>
													 </div>
												 </div>

												 <div class="form-group">
													 <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> email </label>

													 <div class="col-sm-9">
														 <input type="email"  id="email" name="email" placeholder="email" class="col-xs-10 col-sm-5" />
													 </div>
												 </div>

												 <div class="form-group">
													<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> 網址: </label>

													<div class="col-sm-9">
														<!-- <a href id="site" name="site"></a> -->
														<!-- <div class="col-xs-10 col-sm-5" id="site" name="site"></div> -->
														<input type="url" id="site" name="site" placeholder="網址" class="col-xs-10 col-sm-5" />
													</div>
												</div>

												 <div class="form-group">
													 <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> 顯示時間 </label>

													 <div class="col-sm-9">
														<div class="col-xs-10 col-sm-5" id="datetime"></div>
														 <!-- <input type="text" id="datetime" placeholder="抓取系統時間"  class="col-xs-10 col-sm-5"  readonly="readonly"/> -->
													 </div>
												 </div>


												 <div class="space-4"></div>


												 <div class="clearfix form-actions">
													 <div class="col-md-offset-3 col-md-9">
														 <button class="btn btn-info" type="submit" name="submit">
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
						 </div><!-- PAGE CONTENT ENDS -->
						 <!--place-->


					 </div><!-- /.main-content-inner -->
				 </div>

			 </div>


			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">By:</span>

						</span>


					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>


		<!-- basic scripts -->

		<!--[if !IE]> -->


		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<!-- <script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script> -->

		<!-- <![endif]-->

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
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.tableTools.min.js"></script>
		<script src="assets/js/dataTables.colVis.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var oTable1 =
				$('#dynamic-table')
				.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.dataTable( {
					responsive: true,
					bAutoWidth: true,
					"aoColumns": [
					  { "bSortable": true },
					  null, null,null, null, null, null, null, null,
					  { "bSortable": true }
					],
					"aaSorting": [],

					//,
					//"sScrollY": "200px",
					//"bPaginate": false,

					"sScrollX": "100%",
					"sScrollXInner": "100%",
					"bScrollCollapse": true,
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

				/////////////////////////////////
				//全選
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

				var AllDelete = [];

				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header

					// alert(AllDelete);
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						var input = "input[type='checkbox']";
						// $("input[name='DeViewpoint[]']").each(function() {
						// 	AllDelete.push($(this).val());
						// });
						// var Deletepage = "view/place/delete.php";

						if(th_checked){

							$(input).each(function() {
								AllDelete.push($(this).val());
							});

							Deletess(AllDelete);
							 tableTools_obj.fnSelect(row);

						 }else{

							 var Des=[];
							 $(input).each(function() {//取未選值
									Des.push($(this).val());
								});

								AllDelete = $.grep(AllDelete, function(value) {
									return value == Des;
								});
								Deletess(AllDelete);

							 tableTools_obj.fnDeselect(row);
						 }
					});
				});

				//單選
				var OnlyDelete = [];
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){

					var row = $(this).closest('tr').get(0);
					var Delete = $(this).val();
					// var Deletepage = "view/place/delete.php";
					$(this).each(function() {
						OnlyDelete.push(Delete);
					});

					if(!this.checked){

						tableTools_obj.fnSelect(row);
						Deletess(OnlyDelete);//單選刪除

					}else{

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

	</body>
</html>
