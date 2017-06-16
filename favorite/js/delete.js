
function Delete(Account, Place_Name, PicName,PicPath, WebSite) {//彈跳視窗

  bootbox.confirm("Are you sure?", function(result) {
    if (result) {
      $.ajax({
        type:"POST",
        url: "favorite/delete.php",
        data:{
          'Account' : Account,
          'Place_Name' : Place_Name,
          'PicName' : PicName,
          'PicPath' : PicPath,
          'WebSite' : WebSite
        },
        success:function(data){
          alerts(data,"user.php");//轉回指定葉面
        },
        error:function(data){
          alert(data);
        }
      });
    } else {
      alert("小心~~~別按錯了!!!");
    }
  });
}
