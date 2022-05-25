<?php 

date_default_timezone_set('America/Mexico_City');

//hacemos consulta para validar la vigencia del codigo
//[mail] => djdjjdj@jjdjd.com [codigo] => 123213 )
$codigo = $_POST['codigo'];
$mail   = $_POST['mail'];
$hoy = date("d-m-Y g:i");

include "../DBconect.php";

$query = $db->prepare("SELECT vigencia FROM codigosacceso WHERE USUARIO=:usuario AND CODIGO =:codigo");
$query->bindParam(":usuario",$mail);
$query->bindParam(":codigo",$codigo);
$query->execute();

if($row=$query->fetch(PDO::FETCH_ASSOC)){
    $vigenciaDB	=$row["vigencia"];
}

$hoy = strtotime(date("d-m-Y g:i",time()));
$vigenciaDB = strtotime($vigenciaDB,time());
//echo $hoy.">".$vigenciaDB.'<br>';
if($hoy > $vigenciaDB){
    //echo "codigo sin vigencia";
    echo 0;
}else{
    //echo "codigo con vigencia";
    echo 1;
}







?>