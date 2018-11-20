<?php
include("conect.php");

$con = mysqli_connect($host, $user, $pw)
or die("problemas al conectar Server");



mysqli_select_db($con, $db)
or die("Problemas al conectar db");

$result = mysqli_query($con, "SELECT * FROM users WHERE NAME= '$_GET[nombre]' AND LASTNAME = '$_GET[apellido]'")
or die("Problemas en la consulta:" . mysqli_error());


if ($reg = mysqli_fetch_array($result)) {

    echo "1";

} else {

    echo "0";
}













