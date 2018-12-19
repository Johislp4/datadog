<?php

$host = "localhost";
$user = 'root';
$pw = '';
$db = "datadog";


$con = mysqli_connect($host, $user, $pw) or die("problemas al conectar Server");

mysqli_select_db($con, $db) or die("Problemas al conectar db");



/*$host = "localhost";
$user = "id7710583_johislp4";
$pw = "789Greenpeace";
$db = "id7710583_datadog";*/

