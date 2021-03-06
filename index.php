<?php

session_start();

if (isset($_SESSION['user'])) {
    header('location:usuarios.php');
}

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font awesome-->
    <script defer src="public/js/all.min.js"
            integrity="sha384-R5JkiUweZpJjELPWqttAYmYM1P3SNEJRM6ecTQF05pFFtxmCO+Y1CiUhvuDzgSVZ"
            crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/index.css">

    <title>Data Dog Fundation</title>

</head>
<body data-spy="scroll" data-target="#navbar" data-offset="106">


<!--header-->

<nav id="header" class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="public/images/Datadog_Logo.png" alt="logo-data-dog">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#main">La conferencia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#speackers">Los conferencistas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#place-time">Lugar y fecha</a>
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="#ser-voluntario">Conviertete en voluntario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-platzi" href="#" data-target="#modalCompra" data-toggle="modal">Iniciar
                        Sesión</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!--//header-->

<!--Main-->
<main id="main">
    <div id="carousel" class="carousel slide" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="public/images/panda1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/images/pandas2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/images/perro2.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/images/perros1.jpg" alt="Third slide">
            </div>
            <div class="overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="offset-md-6 col-md-6 text-center text-md-right">
                            <h1>Data Dog Fundation</h1>
                            <p class="d-none d-md-block">Data Dog Fundation ayuda a los animales más vulnerables del
                                mundo, ven a la fiesta de
                                cierre de año. Con tu aporte ayudaremos a más animales. Tendremos conferencias sobre
                                cuidado animal,
                                snacks, interacción con los animales
                                del refugio y muchas cosas más. Adicionalmente, conocerás más sobre nuestro programa de
                                voluntarios. Compra tu ticket ya y forma parte de nuestro equipo!
                            </p>
                            <a href="#" class="btn btn-outline-light" data-target="#verificar_voluntario"
                               data-toggle="modal">Verificar si soy Voluntario</a>
                            <button type="button" class="btn btn-customize" data-target="#modalCompra"
                                    data-toggle="modal">
                                <i class="fas fa-cart-plus"></i>
                                Comprar tickets
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<!--//Main-->
<!--speackers-->
<section id="speackers" class="mt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col text-center text-uppercase">
                <small>Conoce a los</small>
                <h2>Conferencistas</h2>
            </div>
        </div>
        <div class="row" id="size-img">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="public/images/Voluntario2.jpg" alt="foto de Luisito" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Luisito Comunica</h5>
                        <div class="badges mb-2">
                            <span class="badge badge-warning">Pandas</span>
                            <span class="badge badge-info">Viajes</span>
                        </div>
                        <p class="card-text">Es un youtuber de nacionalidad mexicana nacido el 20 de marzo de 1991 en la
                            ciudad de Puebla, México. Luisito actualmente reside en la Ciudad de México, capital del
                            país, con 27 años de edad.</p>
                        <a href="https://youtube.fandom.com/es/wiki/Luisito_Comunica" class="btn btn-primary"
                           target="_blank">
                            <i class="fas fa-hand-point-right"></i>
                            ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="public/images/Voluntario1.jpg" alt="foto de Cesar" height="200">
                    <div class="card-body">
                        <h5 class="card-title">César Millán</h5>
                        <div class="badges mb-2">
                            <span class="badge badge-warning">Trato animal</span>
                            <span class="badge badge-info">Liderazgo</span>
                        </div>
                        <p class="card-text">Es conocido por la serie de televisión El encantador de perros y es también
                            coautor de los libros El camino de César, Sé el líder de la manada y Un miembro de la
                            familia, donde se indica cómo entender y tratar algunos problemas caninos.</p>
                        <a href="https://es.wikipedia.org/wiki/C%C3%A9sar_Mill%C3%A1n" target="_blank"
                           class="btn btn-primary">
                            <i class="fas fa-hand-point-right"></i>
                            ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="public/images/voluntario4.jpg" alt="foto de Cesar" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Mark zuckerberg</h5>
                        <div class="badges mb-2">
                            <span class="badge badge-danger">Animales en facebook</span>
                        </div>
                        <p class="card-text">Es un programador y empresario estadounidense, conocido por ser el fundador
                            de Facebook.</p>
                        <a href="https://es.wikipedia.org/wiki/Mark_Zuckerberg" class="btn btn-primary" target="_blank">
                            <i class="fas fa-hand-point-right"></i>
                            ver más</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


</section>


<!--//speackers-->

<!--lugar y fecha-->

<section id="place-time">

    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-lg-6 pl-0 pr-0">
                <img src="public/images/PrqueTayrona.jpg" alt="Parque Tayrona"/>

            </div>
            <div class="col-12 col-lg-6 align-self-center">
                <h2>Parque Tayrona - Octubre 2019</h2>
                <p>
                    Para quienes buscan la contemplación y el descanso, el Parque ofrece magníficas playas y el
                    relajante panorama de un mar intensamente azul. Quienes se sienten atraídos por actividades más
                    emocionantes podrán disfrutar de caminatas, careteo y buceo autónomo. El parque Tayrona tiene
                    también vestigios arqueológicos de una antigua ciudad del pueblo Tayrona.
                </p>
                <a class="btn btn-outline-warning"
                   href="http://www.parquesnacionales.gov.co/portal/es/ecoturismo/region-caribe/parque-nacional-natural-tayrona/"
                   target="_blank">
                    <i class="fas fa-plus"></i>
                    Conoce más</a>

            </div>

        </div>
    </div>
</section>

<!--lugar y fecha-->

<!--conviertete en voluntario-->

<section id="ser-voluntario" class="pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col text-uppercase text-center">
                <small>Conviérte en un</small>
                <h2>voluntario</h2>

            </div>
        </div>
        <div class="row">
            <div class="col text-center">

                No te pierdas de la experiencia de ser voluntario en nuestra fundación. Queremos que cada nuevo
                voluntario pueda dar una <abbr data-toggle="tooltip" title="Charlas de 5 minutos">charla ignite</abbr>.
                Cuéntanos de qué quieres hablar!
            </div>
        </div>
        <div class="row">
            <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
                <form>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <input type="text" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="text" class="form-control" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <textarea name="text" class="form-control form-control-lg"
                                      placeholder="Cuéntanos por qué te gustaría ser voluntario"></textarea>
                            <small class="form-text text-muted">
                                Recuerda incluir un título para tu charla ignite
                            </small>

                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col">
                            <button type="button" class="btn btn-customize btn-block">Enviar</button>

                        </div>


                    </div>

                </form>

            </div>
        </div>

    </div>


</section>


<!--conviertete en voluntario-->

<!--footer-->
<footer id="footer" class="pb-4 pt-4">

    <div class="container">
        <div class="row text-center">

            <div class="col-12 col-lg">
                <a href="#">Preguntas Frecuentes</a>
            </div>

            <div class="col-12 col-lg">
                <a href="#">Prensa</a>
            </div>

            <div class="col-12 col-lg">
                <a href="#">Contáctanos</a>
            </div>

            <div class="col-12 col-lg">
                <a href="#">Términos y condiciones</a>
            </div>

            <div class="col-12 col-lg">
                <a href="#">Estudiantes</a>
            </div>


        </div>


    </div>

</footer>

<!--//footer-->


<!--modal1-->
<div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                           aria-controls="home" aria-selected="true">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                           aria-controls="profile" aria-selected="false">Registro</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!---->
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="InputEmail">Email address</label>
                                <input type="email" class="form-control" id="InputEmail"
                                       name="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="InputPassword">Password</label>
                                <input type="password" class="form-control" id="InputPassword"
                                       name="InputPassword" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                        <form action="register2.php" enctype="multipart/form-data" method="post" id="formupload"
                              style="margin-bottom: 17px">
                            <div class="row mt-2 mb-2">
                                <div class="col">
                                    <label for="firstName">Name</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName"
                                           placeholder="First name">
                                </div>
                                <div class="col">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName"
                                           placeholder="Last name">
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 4px">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Password">
                            </div>

                            <label for="foto_vol">Subir foto (opcional)</label>
                            <input type="file" class="btn btn-light" name="foto" id="foto_vol"/>

                            <button type="submit" class="btn btn-primary" id="registrar">Registrarme</button>
                        </form>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!--modal1-->

<!--Modal 2-->
<div class="modal" tabindex="-1" role="dialog" id="verificar_voluntario">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">¿Soy voluntario?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre" class="col-5">
                <input type="text" name="apellido" id="apellido" placeholder="Escribe tu Apellido" class="col-5">
                <input type="submit" id="verificar" class="btn-customize" value="Enviar">

            </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="public/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="public/js/bootstrap-notify.js"></script>
<script src="public/js/app.js"></script>
</body>
</html>


