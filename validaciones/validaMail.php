<?php 

include "../DBconect.php";
	//validacion para saber si el email existe

	$stmt = $db->prepare("SELECT ID FROM usuarios WHERE email=:uemail");
	$stmt->bindParam(":uemail",$_POST['email']);
	$stmt->execute();

	if($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		$id	=$row["ID"];
		if ($id != null) {
			echo 1;
		}else{
			echo 0;
		}  
	}
	  

?>