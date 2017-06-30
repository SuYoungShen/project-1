function Inserts(placeName, picName, picDir, account, key){
  if(account == ""){
    alert("請登入會員");
  }else{
    $.ajax({
      type:"POST",
      url: "favorite/insert.php",
      data:{
        'account':account,
        'placeName':placeName,
        'picName':picName,
        'picDir':picDir
      },
      success:function(data){
        alert(data);//傳回成功訊息
        if(data == "已刪除"){
          HeartStatus(key, data);
        }else if(data == "已加入最愛"){
          HeartStatus(key, data);
        }
      },
      error:function(data){//傳回失敗訊息
        alert(data);
      }
    });
  }
}
function HeartStatus(key, data){//愛心狀態
  button = "button[name='addFa"+key+"']";
  if(data=="已刪除"){
    ChangeDefault(key);//把愛心周圍變成白色(按鈕便預設)
  }else if(data == "已加入最愛"){
    ChangeDanger(key);//把愛心周圍變換為紅色(按鈕便紅色)
  }
}
function ChangeDanger(key){//把愛心周圍變換為紅色
  button = "button[name='addFa"+key+"']";
  $(button).removeClass("btn-default");
  $(button).addClass("btn-danger");
}
function ChangeDefault(key){//把愛心周圍變成白色
  button = "button[name='addFa"+key+"']";
  $(button).removeClass("btn-danger");
  $(button).addClass("btn-default");
}
// $(document).ready(function(){
//     $("button[name='addFa']").click(function(){
//       if($(this).hasClass("btn-default")){
//         $(this).removeClass("btn-default");
//         $(this).addClass("btn-danger");
//       }else{
//         $(this).removeClass("btn-danger");
//         $(this).addClass("btn-default");//
//       }
//     });
// });
