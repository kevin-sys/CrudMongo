<?php

require_once __DIR__ . '../../vendor/autoload.php';


if (isset($_POST['PostUser'])) 
{

    $usuario= $_POST["user"];
    $pass= $_POST["pwd"];

    $collection = (new MongoDB\Client)->mydb->users;

    $insertOneResult = $collection->insertOne([
        'username' => $usuario,
        'password' => $pass,
    ]);
    var_dump($insertOneResult->getInsertedId());
   
    echo" 
    <script language='javascript'> 
    alert('Registro exitoso, Presione Aceptar para Continuar') 
    window.location='../index.php' 
    </script>"; 
    exit(); 
}
else 
{ 
    echo" 
    <script language='javascript'> 
    alert('ERROR AL GUARDAR DATOS') 
    window.location='../index.php' 
    </script>"; 
}


?>