<?php

include("conect.php");

$mensaje = "Tu registro como voluntario en Data Dog Foundation fue exitoso. Esperamos que tu experiencia con nosotros sea inolvidable";
$destinatario = $_GET['email'];
$asunto = "Bienvenido a Data Dog Foundation";


    $con = mysqli_connect($host, $user, $pw) or die ("problemas al conectar");
    mysqli_select_db($con, $db) or die ("problemas al conectar la db");

    $verifyEmail = mysqli_query($con, "SELECT * FROM users WHERE EMAIL='$_GET[email]'");

    if ($reg = mysqli_fetch_array($verifyEmail)) {

        echo '1';

    } else{
        mysqli_query($con, "INSERT INTO users (NAME, LASTNAME, EMAIL, PW ) VALUES ('$_GET[name]', '$_GET[lastname]', '$_GET[email]','$_GET[password]')");

        echo '2';

        //Enviando mensaje

        @mail($destinatario, $asunto, $mensaje);



    }




