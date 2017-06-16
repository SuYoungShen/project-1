
$(document).ready(function() {

  $(":reset").click(function() {//重設
    $("input").css("border-color","");
  });
  // $("input[name='registered']").click(function() {//註冊按鈕
  //
  //   var trues = (account != "") &&
  //               (password != "") &&
  //               (email != "") &&
  //               (name != "");
// alert("sd");
    // if (trues==true) {
    //   $.ajax({
    //     type:"POST",
    //     url: "bc/member/insert.php",
    //     data:{
    //       'email':email,
    //       'name':name,
    //       'account':account,
    //       'password':password
    //     },
    //     success:function(data){
    //       alert("註冊成功");
    //       // document.location.href="index.php";
    //     },
    //     error: function(data){
    //       alert("施");
    //     }
    //   });
    // }else{
    //   alert("失敗");
    // }//if
 //});//註冊按鈕


     //防呆
     function Foolproof(rule, place, me, min, max){

       var Val = $(place).val();
       var Length= Val.length;

       if(rule.test(Val)){
         $(place).css("border-color","green");

         return Val;

       }else if(Val ==""){
         // $(this).text('(必填)').css({"color":"red"});
        //  alert(me+"必填");
         BorderColorRed(place);

       }else if(Length < min){
         // $(this).text("(帳號不得小於4碼)").css({"color":"red"});
         alert(me+"不得小於"+min+"碼");
         BorderColorRed(place);

       }else if(Length > max){
         // $(this).text("(帳號不得超於10碼)").css({"color":"red"});
         alert(me+"不得超過於"+max+"碼");
         BorderColorRed(place);
       }else {
         alert("請輸入正確格式");
       }
     }

     //錯誤時,紅框
     function BorderColorRed(value){
       var data = value;
       $(data).css("border-color","red");
     }

     // function email(){
       var emailRule=/^[^\s]+@[^\s]+\.[^\s]{2,3}$/;
       var email_p = "input[name='email']";
       var email_m = "email";

       $(email_p).blur(function(){
         email = Foolproof(emailRule, email_p, email_m);

       });//password
     // }

     $("input[name='name']").blur(function(){

       var nameVal = $(this).val();

        if(nameVal){
          name = nameVal;
          $(this).css("border-color","green");
        }else if(nameVal == ""){
         //  alert("姓名必填")
          $(this).css("border-color","red");
        }
      });//name

     //  function account(){

        var accountRule=/^[a-zA-z0-9]{4,10}$/;
        var accounts_p = "input[name='account']";
        var account_min = 4;
        var account_max = 10;
        var account_m = "帳號";

        $(accounts_p).blur(function(){
          account = Foolproof(accountRule, accounts_p, account_m, account_min, account_max);
        });
     //  }

     //  function password(){

        var passwordRule=/^[a-zA-z0-9]{5,36}$/;
        var password_p = "input[name='password']";
        var password_r = "input[name='apassword']";
        var password_min = 5;
        var password_max = 36;
        var password_m = "密碼";

        $(password_p).blur(function(){
          password =  Foolproof(passwordRule, password_p, password_m, password_min, password_max);
        });//password

        $(password_r).blur(function(){
          apassword = Foolproof(passwordRule, password_r, password_m, password_min, password_max);

          if ((apassword!==password) ) {
            BorderColorRed(password_r);
            alert("密碼不一致");
          }else {
            $(password_r).css("border-color","green");
            password=apassword;
          }
        });//password
     //  }


});
