<?php
session_start();

include("conect.php");
if (isset($_SESSION['user'])) {

    $con = mysqli_connect($host, $user, $pw) or die("problemas al conectar Server");

    mysqli_select_db($con, $db) or die("Problemas al conectar db");

    $registro = mysqli_query($con, "SELECT * FROM users");


    $person = mysqli_query($con, "SELECT * FROM users WHERE id = " . $_SESSION['user']['id']);

    $person = mysqli_fetch_assoc($person);

    ?>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><?php echo $person['NAME'] ?> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <h1>Lista de voluntarios</h1>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>

        </tr>


        <?php

        while ($reg = mysqli_fetch_assoc($registro)) {

            echo "
        
            <tr>
                 <td>$reg[NAME]</td>
                 <td>$reg[LASTNAME]</td>
                 <td>$reg[EMAIL]</td>
            </tr>";


        };

        ?>
    </table>

    <?php

    echo "<br><a href='destruir.php'>Cerrar Sesion</a>";

} else {

    echo "No puedes ver esta pagina";
}

?>