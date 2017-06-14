<script src = "jquery-1.11.0.min.js"></script>
<script type="text/javascript">
  $(document).ready( function(){
    alert("s");
          var count = 1;
          var type = /(.jpg|.jpeg|.gif|.png)$/i;
          document.getElementById("maxfile").value = count;

          $(":file").change( function(){
                  if(!type.test($(this).val())){
                    alert("s");

                          $(this).css("background-color","red");
                  }else{
                          $("#upload").attr("disabled",null);
                          $(this).css("background-color","white");
                  }
          });
          $("#addElement").click( function(){
                  count += 1;
                  $("#file").after("<input type=\"file\" name=\"file[]\" />");
                  $(":file").change( function(){
                          if(!type.test($(this).val())){
                                  $(this).css("background-color","red");
                          }else{
                                  $("#upload").attr("disabled",null);
                                  $(this).css("background-color","white");
                          }
                  });
          });

          $("#reset").click( function(){
                  $("#upload").attr("disabled","disabled");
                  $(":file").css("background-color","white");
          });
  });


</script>
