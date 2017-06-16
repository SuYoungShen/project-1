function Insert(account, placeName, picName, picDir, WebSite) {

  if (account=="") {
    alert("請先登入會員");
  }else {
    $.ajax({
      type:"POST",
      url: "favorite/insert.php",
      data:{
        'account':account,
        'placeName':placeName,
        'picName':picName,
        'picDir':picDir,
        'WebSite':WebSite
      },
      success:function(data){
        alert(data);//傳回成功訊息
      },
      error:function(data){//傳回失敗訊息
        alert(data);
      }
    });
  }
}
