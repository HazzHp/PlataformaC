<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Login</title>
<?php  
include "header.php";
?>
<script src="js/validaCodigosAcceso.js"></script>
</head>
	<body>
		<div class="wrapper">
	
			<div class="container">
				<div class="col-lg-12">
					<div class="login-form">
						<form method="post" action="actualizaPassword.php" class="form-horizontal" id="Form">
                            <div class="form-group">
  								<label class="col-sm-6 text-left">Correo Electronico</label>
 								<div class="col-sm-12">
  									<input type="text" name="email" class="form-control"  id ="email" placeholder="Ingresa el email" />
  								</div>
  							</div>  
  							<div class="form-group">
  								<label class="col-sm-6 text-left">Nueva Contraseña</label>
 								<div class="col-sm-12">
  									<input type="password" name="newPassword" class="form-control" placeholder="Ingresa la nueva contraseña" />
  								</div>
  							</div>
                            <div class="form-group">
  								<label class="col-sm-6 text-left">Codigo de Acceso</label>
 								<div class="col-sm-12">
  									<input type="text" name="codigo" id="codigo" class="form-control" placeholder="Ingresa el codigo" />
  								</div>
  							</div>
  							<div class="form-group">
  								<div class="col-sm-12">
  									<input type="button" name="btn_recuperaPassword" id="btn_changePass" class="btn btn-success btn-block"  onclick="validaCodigos()" value="Cambiar Contraseña">
  								</div>
  							</div>  
                            <div class="alert alert-danger" role="alert" id="msj-codevencido" >
                                Codigo Vencido, solicita uno nuevo
                            </div>  
						</form>
                        
					</div>
				</div>
			</div>		
		</div>										
	</body>
</html>
