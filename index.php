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
    <script src="js/validacionLogin.js"></script>

</head>

<body>
    <?php
    require_once 'DBconect.php';
    ?>
    <div class="wrapper">

        <div class="container">

            <div class="col-lg-12">
                <div class="login-form">
                    <center>
                        <h2>Iniciar sesión</h2>
                    </center>
                    <form method="post" class="form-horizontal" action="dashboard.php" name="Form" id="FormLogin">
                        <div class="form-group">
                            <label class="col-sm-6 text-left">Correo Electronico</label>
                            <div class="col-sm-12">
                                <input type="email" name="txt_email" id="txtEmail" class="form-control" placeholder="Ingresa tu correo" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-6 text-left">Password</label>
                            <div class="col-sm-12">
                                <input type="password" name="txt_password" id="txtPassword" class="form-control" placeholder="Ingrese passowrd"  />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-6 text-left">Seleccionar rol</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="txt_role"  id="txtRol">
                                    <option value="">-Seleccione-</option>
                                    <optgroup label="Rol Administrativo">
                                        <option value="1">Super Administrador</option>
                                        <option value="2">Administrador</option>
                                        <option value="3">Especialista</option>
                                    </optgroup>
                                    <optgroup label="Rol No Administrativo">
                                        <option value="4">Persona Fisica</option>
                                        <option value="5">Empresa</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="button" name="btn_login" id="btn-login" onclick="validarFormulario()" class="btn btn-success btn-block"
                                    value="Iniciar Sesion">
                            </div>
                        </div>

                        <div class="alert alert-danger" role="alert" style="display:none;" id="msj-errorDatos">
                            Los datos no corresponden a los registrados!
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <a href="#">¿No tienes una cuenta?</a> 
                                <br>
                                <a href="restablecerPassword.php">¿Olvidaste tu contraseña?</a>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
                <!--Cierra div login-->
            </div>
        </div>
    </div>
</body>

</html>