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
function Edit(placeName, Introduction, pic_name) {
  document.getElementById("placeName").value = placeName;
  document.getElementById("Introduction").value = Introduction;
  document.getElementById("pic").innerHTML = "<img src='about/place/images/"+pic_name+"'  class='col-xs-8'>";

}

// function test(data){
//   dataa=data;
//     document.getElementById("form-field-8").value=dataa;
// }
