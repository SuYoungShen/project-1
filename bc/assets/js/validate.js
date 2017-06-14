// function validate(){
  // $.validator.setDefaults({
  //     submitHandler: function() {
  //       alert("提交事件!");
  //     }
  // });
  /* Act on the event */
    // var email = $("#email").val();
    // if (validateEmail(email)) {
    //   alert('Nice!! your Email is valid, now you can continue..');
    // }else {
    //   alert('Invalid Email Address');
    //   // e.preventDefault();
    // }
    // function validateEmail(email) {
    //   var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    //   if (filter.test(email)) {
    //     return true;
    //   }
    //   else {
    //     return false;
    //   }
    // }
$(document).ready(function(){

    var account=/^[a-zA-z0-9]{4,10}$/;
     $("input[name='account']").blur(function(){
       var accountVal = $(this).val();
       var accountLength= accountVal.length;
        if(account.test(accountVal)){
            $('.account').text('');
            $(this).css("border-color","green");

        }else if(accountVal ==""){
            $('.account').text('(必填)').css({"color":"red"});
            $(this).css("border-color","red");

        }else if(accountLength < 4){
          $('.account').text("(帳號不得小於4碼)").css({"color":"red"});
          $(this).css("border-color","red");

        }else if(accountLength > 10){
          $('.account').text("(帳號不得超於10碼)").css({"color":"red"});
          $(this).css("border-color","red");
        }
    });//account

    var password=/^[a-zA-z0-9]{5,36}$/;
     $("input[name='password']").blur(function(){
       var passwordVal = $(this).val();
       var passwordLength= passwordVal.length;
        if(password.test(passwordVal)){
            $('.password').text('');
            $(this).css("border-color","green");

        }else if(passwordVal ==""){
            $('.password').text('(必填)').css({"color":"red"});
            $(this).css("border-color","red");

        }else if(passwordLength < 5 ){
          $('.password').text("(帳號不得小於5碼)").css({"color":"red"});
          $(this).css("border-color","red");

        }else if(passwordLength > 36){
          $('.password').text("(帳號不得超於10碼)").css({"color":"red"});
          $(this).css("border-color","red");
        }
    });//password

    var email=/^[\w]+\@[a-zA-Z0-9]+\.[a-zA-z0-9]{2,4}$/;
    $("input[name='email']").blur(function(){
      var emailVal = $(this).val();

       if(email.test(emailVal)){
           $('.email').text('');
           $(this).css("border-color","green");

       }else if(emailVal ==""){
           $('.email').text('(必填)').css({"color":"red"});
           $(this).css("border-color","red");
       }else {
         $('.email').text('(請填入正確格式)').css({"color":"red"});
         $(this).css("border-color","red");
       }
   });//email


   $("input[name='name']").blur(function(){

     var nameVal = $(this).val();

      if(nameVal){
          $('.name').text('');
          $(this).css("border-color","green");
      }else if(nameVal == ""){
          $('.name').text('(必填)').css({"color":"red"});
          $(this).css("border-color","red");
      }
   });//name


  $(":reset").click(function() {//重設
    $(".reset").text("");
    $("input").css("border-color","");
  });

$('#spinner-opts small').css({display:'inline-block', width:'60px'})

var slide_styles = ['', 'green','red','purple','orange', 'dark'];
var ii = 0;
$("#spinner-opts input[type=text]").each(function() {
  var $this = $(this);
  $this.hide().after('<span />');
  $this.next().addClass('ui-slider-small').
  addClass("inline ui-slider-"+slide_styles[ii++ % slide_styles.length]).
  css('width','125px').slider({
    value:parseInt($this.val()),
    range: "min",
    animate:true,
    min: parseInt($this.attr('data-min')),
    max: parseInt($this.attr('data-max')),
    step: parseFloat($this.attr('data-step')) || 1,
    slide: function( event, ui ) {
      $this.val(ui.value);
      spinner_update();
    }
  });
});



//CSS3 spinner
$.fn.spin = function(opts) {
  this.each(function() {
    var $this = $(this),
    data = $this.data();

    if (data.spinner) {
      data.spinner.stop();
      delete data.spinner;
    }
    if (opts !== false) {
      data.spinner = new Spinner($.extend({color: $this.css('color')}, opts)).spin(this);
    }
  });
  return this;
};

function spinner_update() {
  var opts = {};
  $('#spinner-opts input[type=text]').each(function() {
    opts[this.name] = parseFloat(this.value);
  });
  opts['left'] = 'auto';
  $('#spinner-preview').spin(opts);
}



$('#id-pills-stacked').removeAttr('checked').on('click', function(){
  $('.nav-pills').toggleClass('nav-stacked');
});

$(document).one('ajaxloadstart.page', function(e) {
  $.gritter.removeAll();
  $('.modal').modal('hide');
});

});




// var validator = $("#input").validate({
//
//   rules:{
//     account:{
//       required: true,
//       minlength: 4
//     },
//     password: {
//       required: true,
//       minlength: 5
//     },
//     email: {
//
//       required: true
//
//     },
//     name: {
//       required: true
//     }
//   },
//   messages: {
//     account: {
//       required: " (必填)",
//       minlength: " (帳號不得少於4個)"
//     },
//     password: {
//       required: " (必填)",
//       minlength: " (密碼不得少於5個)",
//       // maxlength: " (字母不能少于 5 个且不能大于 12 个)"
//     },
//     email: {
//       required: "(必填)",
//       email: "請輸入正確的email格式"
//     },
//     name:" (必填)"
//   }
// });




    // var rule1=/^[a-zA-z0-9]{4,10}$/;
    // $("#account").blur(function(){
    //     if(rule1.test($(this).val())){
    //         $(this).after('<span class="error">OK</span>');
    //         $('.error1').css("color","green");
    //     }else if (rule1.test($(this).val().length < 4)){
    //         $('.error1').text('s');
    //         $('.error1').css("color","red");
    //     }else if (rule1.test($(this).val()="")) {
    //       $('.error1').text('必填');
    //       $('.error1').css("color","red");
    //     }
    // });

  // .validate({
  //   rules:{
  //       account:{
  //         required: true,
  //         minlength: 4
  //       }
  //     },
  //     messages: {
  //       account: {
  //         required: " (必填)",
  //         minlength: " (帳號不得少於4個)"
  //       }
  //     }
  // });



    // if (validateEmail(email)) {
    //   alert('Nice!! your Email is valid, now you can continue..');
    // }else {
    //   alert('Invalid Email Address');
    //   // e.preventDefault();
    // }
    // function validateEmail(email) {
    //   var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    //   if (filter.test(email)) {
    //     return true;
    //   }
    //   else {
    //     return false;
    //   }
    // }
//
//
// };



        //
        // var rule1=/^.{3,5}$/;
        // $("#name").blur(function(){
        //     if(rule1.test($(this).val())){
        //         $('.error1').text('')
        //         $(this).css("border-color","green")
        //     }else{
        //         $('.error1').text('不符合規則，請輸入3-5個任意文字')
        //         $(this).css("border-color","red")
        //     }
        // });
        //
        //
        //
        // var rule1=/^[a-zA-z0-9]{4,10}$/;
        // $("#account").blur(function(){
        //     if(rule1.test($(this).val())){
        //         $('.error1').text('');
        //         $(this).css("border-color","green");
        //     }else{
        //         $('.error1').text('不符合規則，請輸入大寫英文字母，並接上6位數字')
        //         $(this).css("color","red")
        //     }
        // })
        // var rule3=/^09\d{2}-\d{6}$/;
        // $("#phone").blur(function(){
        //     if(rule3.test($(this).val())){
        //         $('.error3').text('')
        //         $(this).css("border-color","green")
        //     }else{
        //         $('.error3').text('不符合規則，請輸入「09xx-xxxxxx」')
        //         $(this).css("border-color","red")
        //     }
        // })
        // var rule4=/^0(2|3|4|5|6|7|8)\d{0,2}-\d{6,8}$/;
        //  $("#mobile").blur(function(){
        //     if(rule4.test($(this).val())){
        //         $('.error4').text('')
        //         $(this).css("border-color","green")
        //     }else{
        //         $('.error4').text('不符合規則，請輸入「區碼-xxxxxx」')
        //         $(this).css("border-color","red")
        //     }
        // })
        // var rule5=/^[\w]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        //  $("#email").blur(function(){
        //     if(rule5.test($(this).val())){
        //         $('.error5').text('')
        //         $(this).css("border-color","green")
        //     }else{
        //         $('.error5').text('不符合規則，請輸入「區碼-xxxxxx」')
        //         $(this).css("border-color","red")
        //     }
        // })


        // $(".cancel").click(function() {
        //       validator.resetForm();
        //     });
