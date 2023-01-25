<?php
print_r($_POST);
if(empty($_POST["username"]) || empty($_POST["full_name"]) || empty($_POST["email"])  || empty($_POST["password"])){
	
	
	exit();
}
//include_once("../Servidor/conexion_db.php");
include 'connect.php';
//include_once 'nuevaconexion.php';

//=====================================================================================================
$username = $_POST["username"];
$username = html_entity_decode($username, ENT_QUOTES | ENT_HTML401, "UTF-8");

$full_name = $_POST["full_name"];
$full_name = html_entity_decode($full_name, ENT_QUOTES | ENT_HTML401, "UTF-8");

$email = $_POST["email"];
$password = $_POST["password"];

 //=====================================================================================================
//$encryp = password_hash($contra,PASSWORD_DEFAULT);

$sentencia = $con->prepare("INSERT INTO barber_admin(username, full_name, email, password) VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$username, $full_name, $email, $password]);

    if ($resultado === TRUE) {
        header('Location: ./admin/registrar.php');
	  
    } 
?>