function Edit(id, theme, message, email, posted, replys) {
  document.getElementById("id").value = id;
  document.getElementById("theme").value = theme;
  document.getElementById("message").value = message;
  document.getElementById("email").value = email;
  document.getElementById("posted").value = posted;
  document.getElementById("replys").value = replys;
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
        url: "message/forum/delete.php",
        data:{'De[]':Deletes},
        success:function(data){
          alerts(data,"forum.php");//轉回指定葉面
        },
        error:function(){
          alerts(data,"forum.php");
        }
      });
    } else {
      alerts("小心~~~別按錯了!!!","forum.php");
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
