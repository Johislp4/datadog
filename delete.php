<?php

include("conect.php");




    mysqli_query($con, "DELETE FROM users WHERE ID = {$_GET['id']}" );

header("location:usuarios.php");


