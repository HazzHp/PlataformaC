function validaEmail(valor){
    $.ajax({
      data:  {'email':valor},
      url:  'validaciones/validaMail.php',
      type:   'post',
      dataType: 'html',
      success:function(data){       
        if (data==0) {
          //mostramos el mensaje de que el correo no existe y ocultamos el boton para que no envie la peticion
          $("#msj-alert").show();
          $("#btn-enviar").hide();
        }else{
          //quitamos el mensaje y mostramos el boton para enviar la peticion
          $("#msj-alert").hide();
          $("#btn-enviar").show();
        }
      }
    });
  }