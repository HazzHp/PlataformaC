<?php
    //valida las credenciales de acceso del index.php 

    //generamos las variables del POST

    $email      = $_POST['correo'];
    $password   = $_POST['password'];
    $tipoRol    = $_POST['rol'];

    //incluir la conexion a base de datos

    include "../DBconect.php";

    // consulta a base de datos con los parametros recibidos

    $query = $db->prepare("SELECT ID, nombre FROM usuarios WHERE email=:uemail AND password=:upassword AND rol=:urol");
	$query->bindParam(":uemail",$email);
	$query->bindParam(":upassword",$password);
	$query->bindParam(":urol",$tipoRol);
	$query->execute();
    $valor = 0;

	if($row=$query->fetch(PDO::FETCH_ASSOC)){
		$id	=$row["ID"];
        if($id > 0){
            $valor = $id;
        }
	}
    echo $valor;
?>