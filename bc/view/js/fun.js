	function Edit(id, place_name, viewpoint, attractions, arrival, pic_dir, pic_name) {

		document.getElementById("id").value = id;
		$(document).ready(function() {
			$("#placeName option[value="+place_name+"]").attr("selected",true);
		});
		document.getElementById("viewpoint").value = viewpoint;
		document.getElementById("attractions").value = attractions;
		document.getElementById("arrival").value = arrival;
		document.getElementById("pic").innerHTML = "<img src='"+pic_dir+pic_name+"'  class='col-xs-8'>";
	}

	function Edits(id, placeName, picDir, pic_name) {
		document.getElementById("ids").value = id;
		document.getElementById("viewpoints").value = placeName;
		// document.getElementById("Introduction").value = Introduction;
		document.getElementById("pics").innerHTML = "<img src='"+picDir+pic_name+"'  class='col-xs-8'>";

	}


	$(document).ready(function() {

		// $("input[name='viewpoint']").blur(function(){
		// 	var viewpoint = $(this).val();
		// 	if(viewpoint ==""){
		// 		$('.viewpoint').text('(必填)').css({"color":"red"});
		// 		$(this).css("border-color","red");
		// 	}else {
		// 		$('.viewpoint').text('');
		// 		$(this).css("border-color","green");
		// 	}
		// });

		// $("#insert").on('submit',(function() {
		// 	var insert = new FormData(this);
		// 	// e.preventDefault();
		// 	// var placeName = $("select[name='placeName']").val();//地區名
		// 	// var viewpoint = $("input[name='viewpoint']").val();//景點名
		// 	// var attractions = $("input[name='attractions']").val();//景點介紹
		// 	// var arrival = $("input[name='arrival']").val();//如何到達
		// 	// var files = $("input[name='picName[]']")[0].files[0];
		// 	// var test = document.getElementById("id-input-file-3").files[0];
		//
		//
		// 		$.ajax({
		// 			type:"POST",
		// 			url: "view/place/insert.php",
		// 			data:insert,
		// 			contentType: false,
		//     	cache: false,
		// 			processData:false,
		//
		// 			success:function(data){//data傳回的訊息
		// 				// document.location.href=""+data+"";
		// 				alert(data);
		// 			},
		// 			error:function(data) {
		// 				alert(data);
		// 			}
		// 		});
		// 	}));

		});
