<?php

session_start();

session_destroy(); //destruye sesiones en PHP

header('location:index.php');
