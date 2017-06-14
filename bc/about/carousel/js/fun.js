$(document).ready(function() {

   $("form[name='place']").validate({
     rules:{
       placeName:"required",
       Introduction:"required"
     },
     messages:{
       placeName:"(必填)",
       Introduction:"(必填)"
     }
   });

});

function Edits(id, placeName, picDir, pic_name) {
  document.getElementById("ids").value = id;
  document.getElementById("placeNames").value = placeName;
  // document.getElementById("Introduction").value = Introduction;
  document.getElementById("pics").innerHTML = "<img src='"+picDir+pic_name+"'  class='col-xs-8'>";

}
