<?php
session_start();

include("conect.php");

if (isset($_SESSION['user'])) {


    $registro = mysqli_query($con, "SELECT * FROM users");

    $person = mysqli_query($con, "SELECT * FROM users WHERE ID = " . $_SESSION['user']['id']);

    $persona = mysqli_fetch_assoc($person);

    require_once  './vista/restringir.php';




}


