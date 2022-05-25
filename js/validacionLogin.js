$(document).ready(function(){
 
});

function validarFormulario(){
    // bloque de validacion sobre correo, contraseña y rol
    $.ajax({
        data:  {
            'correo':$("#txtEmail").val(),
            'password':$("#txtPassword").val(), 
            "rol":$("#txtRol").val()
        },
        url:  'validaciones/validaLogeo.php',
        type:   'post',
        dataType: 'html',
        success:function(data){       
          if(data > 0){
            $("#FormLogin").submit();
            //se muestra el mensaje de datos no correctos en el index.php
            $("#msj-errorDatos").hide();
          }else{
            //se muestra el mensaje de datos no correctos en el index.php
            $("#msj-errorDatos").show();
          }

        }
    });
    
}

