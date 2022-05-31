<?php
    require('funcion.php');
    require('clases/clases.php');
    verificarse();
    verificarad();
$error="";

    if(isset($_POST['registrar'])){
        $contra=hash('sha256',$_POST['contra']);
        $datos=array(
            $_POST['nom'],
            $_POST['app'],
            $_POST['apm'],
            $_POST['alias'],
            $_POST['fecha'],
            $contra,
            $_POST['sexo'],
            $_POST['correo']

            
        );
        if(vacio($datos)==false){
            if(strpos($datos[7]," ")==false){
                if(strlen($datos[0])>2 && strlen($datos[0])<15){
                    if(strlen($datos[1])>3 && strlen($datos[1])<15){
                        if(strlen($datos[2])>3 && strlen($datos[2])<15){
                            if(strlen($datos[3])>3 && strlen($datos[3])<15){
                                if(strlen($_POST['contra'])>8 && strlen($_POST['contra'])<45){
                                    if(strlen($datos[7])>8 && strlen($datos[7])<25){
                                       if(empty(usuarios::verificaralias($datos[3]))){
                                        if(empty(usuarios::verificar($datos[7]))){
                                            usuarios::registrar($datos);
                                            session_start();
                                            header('location:inicio.php'); 

                                         }else{
                                            $error.="correo ya registrado";
                                            }
                                       }else{
                                           $error.="Alias no disponible";
                                       }
                                        
                                    }else{
                                        $error.="El correo debe tener entre 10 y 45 caracteres";
                                    }
                                }else{
                                    $error.="La contraseña debe tener entre 8 y 15 caracteres";
                                }
                            }else{
                                $error.="El alias debe tener entre 4 y 15 caracteres";
                            }
                        }else{
                            $error.="El apellido materno debe tener entre 3 y 15 caracteres";
                        }
                    }else{
                        $error.="El apellido paterno debe tener entre 3 y 15 caracteres";
                    }
                }else{
                    $error.="El nombre debe tener entre 3 y 15 caracteres";
                }
            }else{
                $error.="no agregues espacios";
            }
        }else{
            $error .="Hay un dato vacio";
        }
       
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/registrar.css">

    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/LogoIcono.PNG">
    <title>The 9th Planet</title>
     <!--tipografías-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!--tipografias-->
    <!-- https://material.io/resources/icons/?style=baseline -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- https://material.io/resources/icons/?style=outline -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <!-- https://material.io/resources/icons/?style=round -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <!-- https://material.io/resources/icons/?style=sharp -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- https://material.io/resources/icons/?style=twotone -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</head>
<STYLE>A {text-decoration: none;} </STYLE>
<body >
    <div id="f">
        <svg width="1134" height="754" viewBox="0 0 1134 754" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="694.5" cy="76.5" r="5" fill="#D47895"/>
            <circle cx="89.5" cy="599.5" r="6" fill="#D47895"/>
            <circle cx="316.5" cy="548.5" r="2" fill="#D47895"/>
            <circle cx="551.5" cy="571.5" r="2.5" fill="#D47895"/>
            <circle cx="749.5" cy="560.5" r="2" fill="#D47895"/>
            <circle cx="674.5" cy="640.5" r="2.5" fill="#D47895"/>
            <circle cx="501.5" cy="528.5" r="1.5" fill="#D47895"/>
            <circle cx="977.5" cy="508.5" r="2.5" fill="#D47895"/>
            <circle cx="813.5" cy="541.5" r="2.5" fill="#D47895"/>
            <circle cx="1131.5" cy="560.5" r="2.5" fill="#D47895"/>
            <circle cx="925.5" cy="655.5" r="2.5" fill="#D47895"/>
            <circle cx="597.5" cy="655.5" r="2.5" fill="#D47895"/>
            <circle cx="685.5" cy="632.5" r="2.5" fill="#D47895"/>
            <circle cx="861.5" cy="581.5" r="2.5" fill="#D47895"/>
            <circle cx="968.5" cy="635.5" r="2.5" fill="#D47895"/>
            <circle cx="1102.5" cy="696.5" r="2.5" fill="#D47895"/>
            <circle cx="543.5" cy="656.5" r="1.5" fill="#D47895"/>
            <circle cx="882.5" cy="567.5" r="3.5" fill="#D47895"/>
            <circle cx="1006.5" cy="596.5" r="1.5" fill="#D47895"/>
            <circle cx="1058.5" cy="655.5" r="1.5" fill="#D47895"/>
            <circle cx="1040.5" cy="583.5" r="1.5" fill="#D47895"/>
            <circle cx="389.5" cy="653.5" r="2.5" fill="#D47895"/>
            <circle cx="612.5" cy="672.5" r="1.5" fill="#D47895"/>
            <circle cx="80.5" cy="519.5" r="2.5" fill="#D47895"/>
            <circle cx="191.5" cy="31.5" r="2.5" fill="#D47895"/>
            <circle cx="293.5" cy="59.5" r="2.5" fill="#D47895"/>
            <circle cx="662" cy="215" r="1" fill="#D47895"/>
            <circle cx="773" cy="728" r="2" fill="#D47895"/>
            <circle cx="720.5" cy="419.5" r="5" fill="#D47895"/>
            <circle cx="768.5" cy="46.5" r="2.5" fill="#D47895"/>
            <circle cx="828.5" cy="698.5" r="3.5" fill="#D47895"/>
            <circle cx="370.5" cy="334.5" r="2.5" fill="#D47895"/>
            <circle cx="133.5" cy="283.5" r="2.5" fill="#D47895"/>
            <circle cx="118.5" cy="204.5" r="2.5" fill="#D47895"/>
            <circle cx="404.5" cy="330.5" r="2.5" fill="#D47895"/>
            <circle cx="362.5" cy="201.5" r="2.5" fill="#D47895"/>
            <circle cx="753.5" cy="451.5" r="3" fill="#D47895"/>
            <circle cx="194.5" cy="316.5" r="2.5" fill="#D47895"/>
            <circle cx="141.5" cy="412.5" r="2.5" fill="#D47895"/>
            <circle cx="253.5" cy="431.5" r="2.5" fill="#D47895"/>
            <circle cx="112.5" cy="422.5" r="2.5" fill="#D47895"/>
            <circle cx="5.5" cy="262.5" r="2.5" fill="#D47895"/>
            <circle cx="267.5" cy="172.5" r="1.5" fill="#D47895"/>
            <circle cx="374.5" cy="26.5" r="2.5" fill="#D47895"/>

        <circle cx="627.5" cy="34.5" r="2.5" fill="#D47895"/>
        <circle cx="305.5" cy="484.5" r="1.5" fill="#D47895"/>
        <circle cx="56.5" cy="230.5" r="1.5" fill="#D47895"/>
        <circle cx="147.5" cy="73.5" r="2.5" fill="#D47895"/>
        <circle cx="265.5" cy="356.5" r="2.5" fill="#D47895"/>
        <circle cx="703.5" cy="423.5" r="2.5" fill="#D47895"/>
        <circle cx="317.5" cy="86.5" r="2.5" fill="#D47895"/>
        <circle cx="233.5" cy="106.5" r="2.5" fill="#D47895"/>
        <circle cx="143.5" cy="479.5" r="2.5" fill="#D47895"/>
        <circle cx="159.5" cy="165.5" r="2.5" fill="#D47895"/>
        <circle cx="614" cy="61" r="3" fill="#D47895"/>
        <circle cx="238.5" cy="71.5" r="2.5" fill="#D47895"/>
        <circle cx="755.5" cy="5.5" r="5" fill="#D47895"/>
        <circle cx="420.5" cy="299.5" r="2.5" fill="#D47895"/>
        <circle cx="305.5" cy="248.5" r="2.5" fill="#D47895"/>
        <circle cx="844.5" cy="725.5" r="2.5" fill="#D47895"/>
        <circle cx="643.5" cy="303.5" r="2" fill="#D47895"/>
        <circle cx="694.5" cy="262.5" r="2.5" fill="#D47895"/>
        <circle cx="397.5" cy="374.5" r="2.5" fill="#D47895"/>
        <circle cx="435.5" cy="284.5" r="2.5" fill="#D47895"/>
        <circle cx="681" cy="289" r="3" fill="#D47895"/>
        <circle cx="397.5" cy="363.5" r="5" fill="#D47895"/>
        <circle cx="831.5" cy="684.5" r="5" fill="#D47895"/>
        <circle cx="379.5" cy="121.5" r="2.5" fill="#D47895"/>
        <circle cx="116.5" cy="103.5" r="2.5" fill="#D47895"/>
        <circle cx="17.5" cy="231.5" r="2.5" fill="#D47895"/>
        <circle cx="190.5" cy="184.5" r="2.5" fill="#D47895"/>
        <circle cx="51.5" cy="218.5" r="2.5" fill="#D47895"/>
        <circle cx="431.5" cy="207.5" r="2" fill="#D47895"/>
        <circle cx="289.5" cy="473.5" r="2.5" fill="#D47895"/>
        <circle cx="414.5" cy="278.5" r="1.5" fill="#D47895"/>
        <circle cx="475.5" cy="267.5" r="2.5" fill="#D47895"/>
        <circle cx="481.5" cy="420.5" r="2" fill="#D47895"/>
        <circle cx="567.5" cy="181.5" r="5" fill="#D47895"/>
        <circle cx="484.5" cy="369.5" r="2.5" fill="#D47895"/>
        <circle cx="597.5" cy="373.5" r="2.5" fill="#D47895"/>
        <circle cx="647.5" cy="296.5" r="1" fill="#D47895"/>
        <circle cx="38.5" cy="322.5" r="2.5" fill="#D47895"/>
        <circle cx="192.5" cy="294.5" r="1.5" fill="#D47895"/>
        <circle cx="134.5" cy="386.5" r="2" fill="#D47895"/>
        <circle cx="244" cy="151" r="3" fill="#D47895"/>
        <circle cx="70.5" cy="406.5" r="2.5" fill="#D47895"/>
        <circle cx="21.5" cy="314.5" r="2.5" fill="#D47895"/>
        <circle cx="55.5" cy="179.5" r="2.5" fill="#D47895"/>
        <circle cx="2.5" cy="341.5" r="2.5" fill="#D47895"/>
        <circle cx="169.5" cy="387.5" r="1" fill="#D47895"/>
        <circle cx="131.5" cy="120.5" r="1.5" fill="#D47895"/>
        <circle cx="144.5" cy="327.5" r="1.5" fill="#D47895"/>
        <circle cx="94.5" cy="407.5" r="1.5" fill="#D47895"/>
        <circle cx="114.5" cy="540.5" r="2.5" fill="#D47895"/>
        <circle cx="299.5" cy="181.5" r="2.5" fill="#D47895"/>
        <circle cx="487.5" cy="451.5" r="1.5" fill="#D47895"/>
        <circle cx="297.789" cy="476.5" r="2.5" fill="#D47895"/>
        <circle cx="492.789" cy="431.5" r="2.5" fill="#D47895"/>
        <circle cx="1109.79" cy="97.5" r="2.5" fill="#D47895"/>
        <circle cx="969" cy="35" r="6" fill="#D47895"/>
        <circle cx="764" cy="625" r="2" fill="#D47895"/>
        <circle cx="1008.5" cy="149.5" r="2.5" fill="#D47895"/>
        <circle cx="819.5" cy="595.5" r="6" fill="#D47895"/>
        <circle cx="725" cy="631" r="2" fill="#D47895"/>
        <circle cx="904.5" cy="350.5" r="2.5" fill="#D47895"/>
        <circle cx="981.5" cy="137.5" r="2.5" fill="#D47895"/>
        <circle cx="953.5" cy="2.5" r="2.5" fill="#D47895"/>
        <circle cx="991.5" cy="660.5" r="2.5" fill="#D47895"/>
        <circle cx="935.5" cy="17.5" r="2.5" fill="#D47895"/>
        <circle cx="996.5" cy="100.5" r="2.5" fill="#D47895"/>
        <circle cx="883.5" cy="660.5" r="2.5" fill="#D47895"/>
        <circle cx="998.5" cy="106.5" r="2.5" fill="#D47895"/>
        <circle cx="855.5" cy="89.5" r="2.5" fill="#D47895"/>
        <circle cx="688" cy="617" r="2" fill="#D47895"/>
        <circle cx="746.5" cy="653.5" r="5" fill="#D47895"/>
        <circle cx="888.5" cy="282.5" r="5" fill="#D47895"/>
        <circle cx="75.7893" cy="562.5" r="2.5" fill="#D47895"/>
        <circle cx="331.789" cy="542.5" r="2.5" fill="#D47895"/>
        <circle cx="142.789" cy="567.5" r="2.5" fill="#D47895"/>
        <circle cx="124.789" cy="709.5" r="2.5" fill="#D47895"/>
        <circle cx="176.789" cy="610.5" r="2.5" fill="#D47895"/>
        <circle cx="267.789" cy="697.5" r="2.5" fill="#D47895"/>
        <circle cx="197.789" cy="596.5" r="3.5" fill="#D47895"/>
        <circle cx="315.789" cy="674.5" r="1.5" fill="#D47895"/>
        <circle cx="367.789" cy="733.5" r="1.5" fill="#D47895"/>
        <circle cx="349.789" cy="661.5" r="1.5" fill="#D47895"/>
    </svg>
    </div>
    <div id="planet"> 
            <svg >
                <circle cx="470" cy="550" r="450"  fill="#ffff"/>
            </svg> 
    </div>
    <div id="I">
        <a><span class="material-icons" style="font-size:164px">rocket </span> </a>
    </div>
    
    <div class="RegistrarA">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="formulario"  onsubmit="return validar(this)">
            <br>
            <h2>Crea tu cuenta de alumno</h2>
            <h3>
                Con tu cuenta alumno podrás consultar comunicados que comparta la escuela de forma directa, e interactuar con otros estudiantes del plantel.

            </h3>
            <br>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" name="nom"   class="form-control" placeholder="Nombre" id="floatingInputGrid" 
                        tabindex="0" class="btn btn-lg btn-danger" data-bs-toggle="popover"  data-bs-placement="left" data-bs-trigger="focus"
                        data-bs-content="Ingresa tu primer nombre, sin acentos y sustituye la letra ñ por n.Ingresa 3 a 15 letras">  
                        <label for="floatingInputGrid">Nombre</label>
                    </div>
                </div>

                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" name="alias"  class="form-control" placeholder="Alias" id="floatingInputGrid"
                        tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover"  data-bs-placement="right" data-bs-trigger="focus"
                        data-bs-content="Así te reconoceran tus amigos bartizianos, sin acentos y sustituye la letra ñ por n.Ingresa 3 a 15 letras
                        
                        Reglas:
                        *Debe tener entre 3 y 15 caracteres.">
                        <label for="floatingInputGrid"> Alias </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" name="app"   class="form-control" placeholder="Apellido Paterno" id="floatingInputGrid"
                        tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="focus"
                         data-bs-content="ingresa tu apellid paterno, sin acentos y sustituye la letra ñ por n.Ingresa 3 a 15 letras">  
                        <label for="floatingInputGrid">Apellido Paterno</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" name="apm"   class="form-control" placeholder="Apellido Materno" id="floatingInputGrid" 
                        tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-placement="right"  data-bs-trigger="focus"
                        data-bs-content="ingresa tu apellid materno, sin acentos y sustituye la letra ñ por n.Ingresa 3 a 15 letras">  
                        <label for="floatingInputGrid">Apellido Materno </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <select   name="sexo" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Sexo</option>
                            <option value="1">Hombre</option>
                            <option value="2">Mujer</option>
                            <option value="3">Prefiero no decir</option>

                        </select>
                        <label for="floatingSelect">Sexo</label>
                    </div> 
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="date" max="2006-12-31" min="2000-01-01" name="fecha"  class="form-control" placeholder="Fecha de nacimiento">
                        <label for="floatingInputGrid">Fecha de nacimiento </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" name="correo"  class="form-control" placeholder="Correo institucional" id="floatingInputGrid"
                        tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="focus"
                         data-bs-content="Ingresa tu correo, puede ser un correo personal o un correo personal">  
                        <label for="floatingInputGrid">Correo </label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="password" name="contra"  class="form-control" placeholder="Contraseña" id="floatingInputGrid" 
                        tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-placement="right"  data-bs-trigger="focus"
                        data-bs-content="La contraseña debe tener al menos 8 caracteres, máximo 15. ">
                        <label for="floatingInputGrid">Contraseña </label>
                    </div>
                </div>
            </div>
            <br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AvisoPrivacidad">
            Aviso de privacidad
            </button>
            <br>
            <br>

           <div class="error">
            <?php if(!empty($error)):?>
                <p><?php echo $error; ?> </p>
            <?php endif;?>
            </div>
            <br>
            <input type="submit" value="Registrar" name="registrar" class="btn btn-lg btn-primary" type="button">
            <br><br>
            <a href="index.php">Ya tengo cuenta</a>
            <br>
            <br>
        </form>   
    </div>

    <!--modal aviso de privacidad-->
    <div class="modal fade" id="AvisoPrivacidad" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Aviso de privacidad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>¿Quiénes somos? </h4>
                    <p> IvyCode de S.A. de C.V., mejor conocido como IvyCode, con domicilio
                        en calle Mar Mediterráneo 227, colonia Popotla, ciudad CDMX,
                        municipio o delegación Miguel Hidalgo, c.p. 11400, en la entidad de DF,
                        país México, es el responsable del uso y protección de sus datos
                        personales, y al respecto le informamos lo siguiente: </p>
                    <h4>¿Para qué fines
                        utilizaremos sus
                        datos personales? </h4>
                    <p>Los datos personales que recabamos de usted, los utilizaremos para las
                        siguientes finalidades que son necesarias para el servicio que solicita:
                        • Nombre para tener un registro de los usuarios.
                        • Correo institucional, este nos ayudara a saber si el usuario es
                        perteneciente al politécnico.
                        • Prospección comercial
                        De manera adicional, utilizaremos su información personal para las
                        siguientes finalidades secundarias que no son necesarias para el
                        servicio solicitado, pero que nos permiten y facilitan brindarle una mejor
                        atención:
                        • Edad
                        • Sexo
                        • Mercadotecnia o publicitaria
                        En caso de que no desee que sus datos personales se utilicen para
                        estos fines secundarios, indíquelo a continuación:
                        No consiento que mis datos personales se utilicen para los siguientes
                        fines:
                        [ ] Edad
                        [ ] Sexo
                        [ ] Mercadotecnia o publicitaria
                        La negativa para el uso de sus datos personales para estas finalidades
                        no podrá ser un motivo para que le neguemos los servicios y productos
                        que solicita o contrata con nosotros.</p>


                    <h4>¿Dónde puedo
                        consultar el aviso
                        de privacidad
                        integral?</h4>
                    <p>Para conocer mayor información sobre los términos y condiciones en
                        que serán tratados sus datos personales, como los terceros con quienes
                        compartimos su información personal y la forma en que podrá ejercer
                        sus derechos ARCO, puede consultar el aviso de privacidad integral en:</p>

                        
                <a href="registroa.php">
                    Ya leí el aviso de privacidad y estoy deacuerdo
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--modal fin aviso de privacidad-->

    <!--Popover-->
    <script>
       var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
       var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
    </script>


</body>
</html>