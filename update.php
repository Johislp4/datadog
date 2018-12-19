<?php

include("conect.php");




$query = "UPDATE users set NAME='{$_POST['firstName']}', LASTNAME='{$_POST['lastName']}' WHERE ID ='{$_POST['userId']}'";

mysqli_query($con, $query);

header("location:restringir.php");
