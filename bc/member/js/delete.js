$(document).ready(function() {

  // $("td a[name='Delete']").on(ace.click_event, function() {
  //   // var DeAccountss=[];
  //   var DeAccounts = $("input[name='DeAccounts[]']").val();
  //   // DeAccountss.push(DeAccounts);
  //   alert(DeAccounts);
  //   bootbox.confirm("Are you sure?", function(result) {
  //     if (result) {
  //       $.ajax({
  //         type:"POST",
  //         url: "member/delete.php",
  //         data:{'DeAccountss[]':DeAccounts},
  //         success:function(data){
  //           alerts(data,"member.php");
  //         }
  //       });
  //
  //     } else {
  //       alert("小心~~~別按錯了!!!");
  //     }
  //   });
  // });

});

function Deletess(Deletes) {//刪除


    $(".table-header a[name='Delete']").on(ace.click_event, function() {

      bootboxs(Deletes);//彈跳視窗
    });//大垃圾桶

}

function bootboxs(Deletes) {//彈跳視窗

  bootbox.confirm("Are you sure?", function(result) {
    if (result) {
      $.ajax({
        type:"POST",
        url: "member/delete.php",
        data:{'DeAccount[]':Deletes},
        success:function(data){
          alerts(data,"member.php");//轉回指定葉面
        },
        error:function(){
          alerts(data,"member.php");
        }
      });
    } else {
      alerts("小心~~~別按錯了!!!","member.php");
    }
  });
}

// function Delete(Delete){
//
//   var DeAccounts=[];
//   DeAccounts.push(Delete);
//
//   bootbox.confirm("Are you sure?", function(result) {
//      if (result) {
//        $.ajax({
//          type:"POST",
//          url: "member/delete.php",
//          data:{'DeAccount[]':DeAccounts},
//          success:function(data){
//            alerts(data,"member.php");
//          }
//        });
//
//      } else {
//        alert("小心~~~別按錯了!!!");
//      }
//    });
// }
// function OnlyDelete() {
//
//   $(".table-header a[name='Delete']").on(ace.click_event, function() {
//     var DeAccounts=[];
//     var DeAccount = $("input[name='DeAccounts[]']").val();
//
//     DeAccounts.push(DeAccount);
//     bootbox.confirm("Are you sure?", function(result) {
//       if (result) {
//         $.ajax({
//           type:"POST",
//           url: "member/delete.php",
//           data:{'DeAccount[]':DeAccounts},
//           success:function(data){
//             alerts(data,"member.php");//轉回指定葉面
//           }
//         });
//       } else {
//         alert("小心~~~別按錯了!!!");
//       }
//     });
//   });
// }
