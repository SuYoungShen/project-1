
function Delete(Account, Place_Name, PicName,PicPath, Datetime) {//彈跳視窗
  bootbox.confirm("確定要刪除?",function(result){
    if (result) {
        $.ajax({
          type:"POST",
          url: "favorite/delete.php",
          data:{
            'Account' : Account,
            'Place_Name' : Place_Name,
            'PicName' : PicName,
            'PicPath' : PicPath,
            'Datetime' : Datetime
          },
          success:function(data){
            alert(data);
            location.reload();
          },
          error:function(data){
            alert(data);
          }
        });
      } else {
        alert("小心~~~別按錯了!!!");
      }
  });
  // bootbox.confirm("Are you sure?", function(result) {
  //   if (result) {
  //     $.ajax({
  //       type:"POST",
  //       url: "favorite/delete.php",
  //       data:{
  //         'Account' : Account,
  //         'Place_Name' : Place_Name,
  //         'PicName' : PicName,
  //         'PicPath' : PicPath,
  //         'Datetime' : Datetime
  //       },
  //       success:function(data){
  //         alerts(data,"user.php");//轉回指定葉面
  //       },
  //       error:function(data){
  //         alert(data);
  //       }
  //     });
  //   } else {
  //     alert("小心~~~別按錯了!!!");
  //   }
  // });
}
