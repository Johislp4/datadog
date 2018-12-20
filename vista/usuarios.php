<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?php echo $persona['NAME'] ?> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <th>Actualizar</th>
        <th>Eliminar Registro</th>

    </tr>


    <?php

    while ($reg = mysqli_fetch_assoc($registro)) {

        ?>

        <tr>
            <td><?php echo $reg['NAME']; ?> </td>
            <td><?php echo $reg['LASTNAME'] ?> </td>
            <td ><?php echo $reg['EMAIL'] ?> </td>
            <td>
                <button
                        data-user="<?php echo $reg['ID'] ?>"
                        data-username="<?php echo $reg['NAME'] ?>"
                        data-userlast="<?php echo $reg['LASTNAME'] ?>"
                        data-useremail="<?php echo $reg['EMAIL'] ?>"
                        data-userpw="<?php echo $reg['PW'] ?>"

                        class='btn btn-success btn-modify'>
                    Actualizar
                </button>
            </td>
            <td><a href='delete.php?id=<?php echo $reg['ID'] ?>' class='btn btn-danger'>Eliminar</a></td>


        </tr>


        <?php
    };

    ?>
</table>

<?php

echo "<br><a href='destruir.php'>Cerrar Sesion</a>";


?>

<!-- Modal actualizar -->

<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="update.php" enctype="multipart/form-data" method="post" id="formUpdate"
                  style="margin-bottom: 17px">
                <div class="modal-body">

                    <div class="row mt-2 mb-2">
                        <div class="col">
                            <label for="firstName">Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName">
                        </div>
                        <div class="col">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 4px">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <label for="foto_vol">Cambiar foto</label>
                    <input type="file" class="btn btn-light" name="foto" id="foto_vol"/>
                    <input type="hidden" id="input-user" name="userId"/>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>

                </div>
            </form>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/index.css">

</head>
<body>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="public/js/app.js"></script>
<script src="public/js/bootstrap-notify.js"></script>

</body>


