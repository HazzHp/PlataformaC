function validaCodigos(){
    $.ajax({
      data:  {
          "mail":$("#email").val(),
          "codigo":$("#codigo").val()
      },
      url:  'validaciones/validaCodigoAcceso.php',
      type:   'post',
      dataType: 'html',
      success:function(data){

        console.log(data);
        if(data==1){
            $("#msj-codevencido").hide();
            $("#Form").submit();
        }else{
            $("#msj-codevencido").show();
        }
      }
    });
  }