// $(document).ready(function() {
//
//   $("button[name='AboutSubmit']").on(ace.click_event, function() {
//     // var DeAccountss=[];
//     var About = $("textarea[name='About']").val();
//     if (About == "") {
//       alert("請輸入資料");
//     // }else {
//     //   $.ajax({
//     //     type:"POST",
//     //     url: "about/about.php",
//     //     data:{'About':About},
//     //     success:function(data){
//     //       alert(data);
//     //     }
//     //   });
//     }
//   });
//
// });

function bootboxs(id) {//彈跳視窗

  bootbox.confirm("Are you sure?", function(result) {
    if (result) {
      $.ajax({
        type:"POST",
        url: "index/top6/delete.php",
        data:{'id':id},
        success:function(data){
          alerts(data,"index.php");//轉回指定葉面
        },
        error:function(){
          alerts(data,"index.php");
        }
      });
    } else {
      alerts("小心~~~別按錯了!!!","index.php");
    }
  });
}


function Edit(id, placeName, path, pic_name) {
  document.getElementById("id").value = id;
  document.getElementById("placeName").value = placeName;
  // document.getElementById("Introduction").value = Introduction;
  document.getElementById("pic").innerHTML = "<img src='"+path+""+pic_name+"'  class='col-xs-8'>";

}

// function test(data){
//   dataa=data;
//     document.getElementById("form-field-8").value=dataa;
// }
