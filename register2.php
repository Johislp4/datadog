<?php

include("conect.php");

$mensaje = "Tu registro como voluntario en Data Dog Foundation fue exitoso. Esperamos que tu experiencia con nosotros sea inolvidable";
$destinatario = $_POST['email'];
$asunto = "Bienvenido a Data Dog Foundation";


$con = mysqli_connect($host, $user, $pw) or die ("problemas al conectar");

mysqli_select_db($con, $db) or die ("problemas al conectar la db");

$verifyEmail = mysqli_query($con, "SELECT * FROM users WHERE EMAIL='$_POST[email]'");


if ($reg = mysqli_fetch_array($verifyEmail)) {


    echo '1';


} else {
    //insertando Foto
    $carpeta = "files/";
    $name= $_FILES['foto']['name'];
    opendir($carpeta);
    $destino = $carpeta . $name;
    copy($_FILES['foto']['tmp_name'], $destino);
    $nombre = $_FILES['foto']['name'];



    mysqli_query($con, "INSERT INTO users (NAME, LASTNAME, EMAIL, PW, FOTO ) VALUES ('$_POST[firstName]', '$_POST[lastName]', '$_POST[email]','$_POST[password]','$name')");

    echo '2';


    //Enviando mensaje

    @mail($destinatario, $asunto, $mensaje);


}




