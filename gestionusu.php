
<?php
    session_start();
    require('clases/clases.php');
    require('funcion.php');
    verificarse();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/LogoIcono.PNG">

    <link rel="stylesheet" href="./css/boostrap.css">
    <link rel="stylesheet" href="./css/boostrap2.css">
    <link rel="stylesheet" href="./css/boostrap3.css">
	<script src="js/push.min.js"></script>

    <title>The ninth planet</title>
    <!-- https://material.io/resources/icons/?style=baseline -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- https://material.io/resources/icons/?style=outline -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <!-- https://material.io/resources/icons/?style=round -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <!-- https://material.io/resources/icons/?style=sharp -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script> 
</head>
<STYLE>A {text-decoration: none;} </STYLE>
<body>
   

    <section class="public">
        <br><br>
        <!--Gestion de usuarios-->
        <table class="table table-hover">
            <h3>Reportes de</h3>
            <thead>
                <tr>
                    <th>ID de publicacion</th>
                    <th>Nombre</th>
                    <th>reportes</th>
                    <th>NO. reacciones</th>
                </tr>
            </thead>
            <tbody>
                <td>1</td>
                <td>Julio el Profe</td>
                <td>3</td>
                <td>5</td>
                <td>15</td>
            </tbody>
        </table>
        <br><br>
    </section>

    <!-- Modal de notificaciones -->
    <div class="modal fade" id="notificaciones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Notificaciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p> Maria Perez ha comentado tu publicacion</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal de notificaciones -->

    <!-- Modal de publicacion -->
    <div class="modal fade" id="publicacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Publicación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!--Agregar publicación-->
                    <div class="publicacionA">
                        <span class="material-icons-outlined">
                            account_circle
                        </span>

                        <div class="textpublicacionA">
                            <textarea placeholder="¿Qué esta sucediendo?" rows="3.5" cols="40" name="msg" minlength="2"
                                maxlength="180"></textarea>

                            <div class="imgpublicacionA">
                                <span class="material-icons-outlined">
                                    image
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Agregar publicación-->

                </div>
                <div class="modal-footer">


                    <a href="inicio.html">
                        <button class="btn btn-primary" data-bs-toggle="modal">
                            <h4>Publicar</h4>
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal de notificaciones -->

    <!-- Modal de opciones -->
    <div class="modal fade" id="opciones" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Opciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <a href="index.html">
                        <h4>Cerrar sesión</h4>
                    </a>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">
                        Restablecer contraseña</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="restablecercontraseña"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="restablecercontraseña">Restablecer contraseña</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="col-auto">
                        <input type="text" placeholder="Correo institucional" id="inputPassword6" class="form-control"
                            aria-describedby="passwordHelpInline">
                        <br>
                        <input type="password" placeholder="Contraseña" id="inputPassword6" class="form-control"
                            aria-describedby="passwordHelpInline">
                        <br>
                        <input type="password" placeholder="Confirmar contraseña" id="inputPassword6"
                            class="form-control" aria-describedby="passwordHelpInline">
                        <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="index.html">
                        <button class="btn btn-primary" data-bs-toggle="modal">Actualizar contraseña</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal de opciones -->
</body>

</html>