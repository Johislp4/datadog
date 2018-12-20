<?php

session_start();
include("conect.php");
if (isset($_POST['InputEmail']) && !empty($_POST['InputEmail']) &&
    isset($_POST['InputPassword']) && !empty($_POST['InputPassword'])) {

    $con = mysqli_connect($host, $user, $pw) or die ("problemas al conectar");

    mysqli_select_db($con, $db) or die ("problemas al conectar la BD");

    $sel = mysqli_query($con, "SELECT ID, NAME, EMAIL, PW FROM users WHERE EMAIL='$_POST[InputEmail]'");


    $sesion = mysqli_fetch_assoc($sel);

    if ($_POST['InputPassword'] == $sesion['PW']) {

        $_SESSION['user'] = [
          'email'  => $_POST['InputEmail'],
          'name' =>   $sesion['NAME'],
          'id' =>  $sesion['ID']
        ];

       header("location:usuarios.php");



    } else {

        echo "combinacion erronea";
    }




}else {

    echo "Debes llenar ambos campos";
}