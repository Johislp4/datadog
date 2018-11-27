<?php
session_start();
if (isset($_SESSION ['username'])) {
    echo "Puedes ver esta pagina";
    echo "<br><a href='destruir.php'>Cerrar Sesion</a>";

} else {

    echo "No puedes ver esta pagina";
}