<?php
session_start();

include("conect.php");

$mns= $_POST['mns'];
$destino= $_POST['destinatario'];
$asun= $_POST['asunto'];

if (isset($_SESSION['user'])) {


    $registro = mysqli_query($con, "SELECT * FROM users");

    $person = mysqli_query($con, "SELECT * FROM users WHERE ID = " . $_SESSION['user']['id']);

    $persona = mysqli_fetch_assoc($person);

    //Enviando mensaje

    @mail($destino, $asun, $mns);

    require_once  './vista/usuarios.php';




}


