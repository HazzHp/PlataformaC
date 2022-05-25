<?php 

    require_once 'DBconect.php';
    print_r($_POST);
    
    $email = $_POST['email'];
    $newPassword= $_POST["newPassword"];

  	$stmt = $db->prepare("UPDATE usuarios SET password=:upassword WHERE email=:uemail");
	$stmt->bindParam(":upassword",$newPassword);
	$stmt->bindParam(":uemail",$email);
	$stmt->execute();	
	if ($stmt) {
        echo'<script type="text/javascript">
            alert("contraseña actualizada, Redireccionando...");
        </script>';
        header("location:index.php");
	}else{
        echo'<script type="text/javascript">
            alert("error al actualizar, contacte con un administrador");
        </script>';
	}    

?>