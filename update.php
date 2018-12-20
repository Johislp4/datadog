<?php

include("conect.php");


$query = "UPDATE users set NAME='$_POST[firstName]', LASTNAME='$_POST[lastName]', EMAIL='$_POST[email]', PW='$_POST[password]' WHERE ID ='$_POST[userId]'";

mysqli_query($con, $query);


header("location:usuarios.php");
