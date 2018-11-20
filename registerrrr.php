<?php

include("conect.php");

$mensaje = "Tu registro como voluntario en Data Dog Foundation fue exitoso. Esperamos que tu experiencia con nosotros sea inolvidable";
$destinatario = $_POST['email'];
$asunto = "Bienvenido a Data Dog Foundation";

if (isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['lastName']) && !empty($_POST['lastName']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['password']) && !empty($_POST['password'])) {

    //TODO; hacer select para verificar la existencia de un correo, si existe sacar un alert informándolo.
    $con = mysqli_connect($host, $user, $pw) or die ("problemas al conectar");
    mysqli_select_db($con, $db) or die ("problemas al conectar la db");

    $verifyEmail = mysqli_query($con, "SELECT * FROM users WHERE EMAIL='$_POST[email]'");

    if ($reg = mysqli_fetch_array($verifyEmail)) {

        echo '<script language="javascript">alert("el correo ya existe");</script>';

    }else{
        mysqli_query($con, "INSERT INTO users (NAME, LASTNAME, EMAIL, PW ) VALUES ('$_POST[name]', '$_POST[lastName]', '$_POST[email]','$_POST[password]')");

        echo '<script language="javascript">alert("Registro exitoso. Revisa tu correo");</script>';

        //Enviando mensaje

        mail($destinatario, $asunto, $mensaje);

       echo "1";


    }


    //Redireccionando


} else {

    echo "Problemas al insertar datos";

}




