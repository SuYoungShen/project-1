function Edit(id, pla, viw, post, mess, rel, ema, site, date) {
  document.getElementById("id").value = id;
  document.getElementById("placename").value = pla;
  document.getElementById("viewpoint").value = viw;
  document.getElementById("posted").value = post;
  document.getElementById("messages").value = mess;
  document.getElementById("replys").value = rel;
  document.getElementById("email").value = ema;
  document.getElementById("site").value = site;
  // document.getElementById("datetime").value = date;
  // $('#placename').text(pla);
  // $('#viewpoint').text(viw);
  // $('#posted').text(post);
  // $('#messages').text(mess);
  // $('#replys').text(rel);
  // $('#email').text(ema);
  // $('#site').text(site);
  $('#datetime').text(date);

}

function Deletess(Deletes) {//單選刪除

    $(".table-header a[name='Delete']").on(ace.click_event, function() {

      bootboxs(Deletes);//彈跳視窗
    });//大垃圾桶

}

function bootboxs(Deletes) {//彈跳視窗

  bootbox.confirm("Are you sure?", function(result) {
    if (result) {
      $.ajax({
        type:"POST",
        url: "message/area/delete.php",
        data:{'DeId[]':Deletes},
        success:function(data){
          alerts(data,"area-forum.php");//轉回指定葉面
        },
        error:function(){
          alerts(data,"area-forum.php");
        }
      });
    } else {
      alerts("小心~~~別按錯了!!!","area-forum.php");
    }
  });
}

$(document).ready(function() {
    // var email=/^[\w]+\@[a-zA-Z0-9]+\.[a-zA-z0-9]{2,4}$/;
  var email=/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
  $("input[name='email']").blur(function(){
    var emailVal = $(this).val();

     if(email.test(emailVal)){
         $(this).css("border-color","green");
     }else {
      //  alert("請填入正確格式");
       $(this).css("border-color","red");
     }
  });//email
});
