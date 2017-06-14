function Deletess(Deletes,Deletepage) {//單選刪除
  $(".table-header a[name='Delete']").on(ace.click_event, function() {
    bootboxs(Deletes,Deletepage);//彈跳視窗
  });//大垃圾桶
}

function bootboxs(Deletes,DeletePage) {//彈跳視窗

  bootbox.confirm("Are you sure?", function(result) {

    if (result) {
      $.ajax({
        type:"POST",
        url: DeletePage,
        data:{'id[]':Deletes},
        success:function(data){
          alerts(data,"view.php");//轉回指定葉面
        }

      });
    } else {
      alerts("小心~~~別按錯了!!!","view.php");
    }
  });

}
