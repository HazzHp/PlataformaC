<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Recupera tu Contraseña</title>
<?php 
    include "header.php";
?>
<script src="js/validaMail.js"></script>
</head>
	<body>

		<div class="wrapper">
	
			<div class="container">
			
				<div class="col-lg-12">
					<div class="login-form">
						<form method="post" action="envioLigaRecuperacion.php" class="form-horizontal">
  							<div class="form-group">
  								<label class="col-sm-12 text-left">Correo Electronico</label>
 								<div class="col-sm-12">
  									<input type="email" name="txt_email" class="form-control" onblur="validaEmail(this.value)" placeholder="Ingresa tu correo" />
  								</div>
  							</div>

  							<div class="form-group">
  								<div class="col-sm-12">
  									<input type="submit" name="btn_recuperaPassword"  id="btn-enviar"  class="btn btn-success btn-block" value="Recuperar Contraseña">
  								</div>
  							</div>    
						</form>
                        <div class="alert alert-danger" role="alert" style="display:none" id="msj-alert">
                            Correo Electronico no valido
                        </div>
					</div>
				</div>
			</div>		
		</div>										
	</body>
</html>
