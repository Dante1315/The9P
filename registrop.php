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
            $_POST['correo'],
            $_POST['area']
        );
        if(vacio($datos)==false){
            if(strpos($datos[7]," ")==false){
                if(strlen($datos[0])>2 && strlen($datos[0])<15){
                    if(strlen($datos[1])>2 && strlen($datos[1])<15){
                        if(strlen($datos[2])>2 && strlen($datos[2])<15){
                            if(strlen($datos[3])>2 && strlen($datos[3])<15){
                                if(strlen($_POST['contra'])>8 && strlen($_POST['contra'])<15){
                                    if(strlen($datos[7])>8 && strlen($datos[7])<35){
                                       if(empty(usuarios::verificaralias($datos[3]))){
                                        if(empty(usuarios::verificar($datos[7]))){
                                            usuarios::registrapr($datos);
                                            session_start();
                                            header('location:inicio.php'); 

                                         }else{
                                            $error.="correo ya registrado";
                                            }
                                       }else{
                                           $error.="Alias no disponible";
                                       }
                                        
                                    }else{
                                        $error.="El correo debe tener entre 10 y 35 caracteres";
                                    }
                                }else{
                                    $error.="La contraseña debe tener entre 8 y 15 caracteres";
                                }
                            }else{
                                $error.="El alias debe tener entre 5 y 15 caracteres";
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
                $error.="No agregues espacios en el formulario";
            }
        }else{
            $error .="Algun dato esta vacio";
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
<body>
    <div id="f">
        <svg   width="1200" height="900" viewBox="0 0 1538 1095" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="400.5" cy="776.5" r="2.5" fill="#D47895"/>
            <circle cx="301.5" cy="1004.5" r="2.5" fill="#D47895"/>
            <circle cx="159.5" cy="426.5" r="3.5" fill="#D47895"/>
            <circle cx="52.5" cy="949.5" r="2.5" fill="#D47895"/>
            <circle cx="499.5" cy="794.5" r="2.5" fill="#D47895"/>
            <circle cx="542.5" cy="723.5" r="2.5" fill="#D47895"/>
            <circle cx="505.789" cy="621.5" r="2.5" fill="#D47895"/>
            <circle cx="90.5" cy="990.5" r="2.5" fill="#D47895"/>
            <circle cx="515.5" cy="686.5" r="2.5" fill="#D47895"/>
            <circle cx="568.5" cy="900.5" r="2.5" fill="#D47895"/>
            <circle cx="415.5" cy="715.5" r="2.5" fill="#D47895"/>
            <circle cx="16.5" cy="921.5" r="2.5" fill="#D47895"/>
            <circle cx="214.5" cy="910.5" r="2.5" fill="#D47895"/>
            <circle cx="139.5" cy="990.5" r="2.5" fill="#D47895"/>
            <circle cx="442.5" cy="858.5" r="2.5" fill="#D47895"/>
            <circle cx="278.5" cy="891.5" r="2.5" fill="#D47895"/>
            <circle cx="596.5" cy="910.5" r="2.5" fill="#D47895"/>
            <circle cx="390.5" cy="1005.5" r="2.5" fill="#D47895"/>
            <circle cx="62.5" cy="1005.5" r="2.5" fill="#D47895"/>
            <circle cx="150.5" cy="982.5" r="2.5" fill="#D47895"/>
            <circle cx="326.5" cy="931.5" r="2.5" fill="#D47895"/>
            <circle cx="433.5" cy="985.5" r="2.5" fill="#D47895"/>
            <circle cx="567.5" cy="1046.5" r="2.5" fill="#D47895"/>
            <circle cx="8.5" cy="1006.5" r="1.5" fill="#D47895"/>
            <circle cx="347.5" cy="917.5" r="3.5" fill="#D47895"/>
            <circle cx="471.5" cy="946.5" r="1.5" fill="#D47895"/>
            <circle cx="523.5" cy="1005.5" r="1.5" fill="#D47895"/>
            <circle cx="505.5" cy="933.5" r="1.5" fill="#D47895"/>
            <circle cx="488.5" cy="820.5" r="2.5" fill="#D47895"/>
            <circle cx="77.5" cy="1022.5" r="1.5" fill="#D47895"/>
            <circle cx="864.5" cy="372.5" r="2.5" fill="#D47895"/>
            <circle cx="966.5" cy="400.5" r="2.5" fill="#D47895"/>
            <circle cx="127" cy="565" r="1" fill="#D47895"/>
            <circle cx="238" cy="1078" r="2" fill="#D47895"/>
            <circle cx="185.5" cy="769.5" r="2.5" fill="#D47895"/>
            <circle cx="233.5" cy="396.5" r="2.5" fill="#D47895"/>
            <circle cx="293.5" cy="1048.5" r="3.5" fill="#D47895"/>
            <circle cx="806.5" cy="624.5" r="2.5" fill="#D47895"/>
            <circle cx="791.5" cy="545.5" r="2.5" fill="#D47895"/>
            <circle cx="168.5" cy="781.5" r="2.5" fill="#D47895"/>
            <circle cx="867.5" cy="657.5" r="2.5" fill="#D47895"/>
            <circle cx="814.5" cy="753.5" r="2.5" fill="#D47895"/>
            <circle cx="926.5" cy="772.5" r="2.5" fill="#D47895"/>
            <circle cx="785.5" cy="763.5" r="2.5" fill="#D47895"/>
            <circle cx="940.5" cy="513.5" r="1.5" fill="#D47895"/>
            <circle cx="1047.5" cy="367.5" r="2.5" fill="#D47895"/>
            <circle cx="92.5" cy="384.5" r="2.5" fill="#D47895"/>
            <circle cx="404.5" cy="651.5" r="1.5" fill="#D47895"/>
            <circle cx="820.5" cy="414.5" r="2.5" fill="#D47895"/>
            <circle cx="938.5" cy="697.5" r="2.5" fill="#D47895"/>
            <circle cx="168.5" cy="773.5" r="2.5" fill="#D47895"/>
            <circle cx="990.5" cy="427.5" r="2.5" fill="#D47895"/>
            <circle cx="906.5" cy="447.5" r="2.5" fill="#D47895"/>
            <circle cx="242.5" cy="646.5" r="2.5" fill="#D47895"/>
            <circle cx="832.5" cy="506.5" r="2.5" fill="#D47895"/>
            <circle cx="79" cy="411" r="3" fill="#D47895"/>
            <circle cx="911.5" cy="412.5" r="2.5" fill="#D47895"/>
            <circle cx="220.5" cy="355.5" r="2.5" fill="#D47895"/>
            <circle cx="309.5" cy="1075.5" r="2.5" fill="#D47895"/>
            <circle cx="108.5" cy="653.5" r="2.5" fill="#D47895"/>
            <circle cx="159.5" cy="612.5" r="2.5" fill="#D47895"/>
            <circle cx="1070.5" cy="715.5" r="2.5" fill="#D47895"/>
            <circle cx="146" cy="639" r="3" fill="#D47895"/>
            <circle cx="1070.5" cy="704.5" r="2.5" fill="#D47895"/>
            <circle cx="296.5" cy="1034.5" r="2.5" fill="#D47895"/>
            <circle cx="1052.5" cy="462.5" r="2.5" fill="#D47895"/>
            <circle cx="789.5" cy="444.5" r="2.5" fill="#D47895"/>
            <circle cx="863.5" cy="525.5" r="2.5" fill="#D47895"/>
            <circle cx="388.5" cy="640.5" r="2.5" fill="#D47895"/>
            <circle cx="1154.5" cy="761.5" r="2.5" fill="#D47895"/>
            <circle cx="32.5" cy="531.5" r="2.5" fill="#D47895"/>
            <circle cx="1157.5" cy="710.5" r="2.5" fill="#D47895"/>
            <circle cx="513.5" cy="632.5" r="2.5" fill="#D47895"/>
            <circle cx="62.5" cy="723.5" r="2.5" fill="#D47895"/>
            <circle cx="112.5" cy="646.5" r="2.5" fill="#D47895"/>
            <circle cx="865.5" cy="635.5" r="1.5" fill="#D47895"/>
            <circle cx="831.5" cy="676.5" r="2.5" fill="#D47895"/>
            <circle cx="807.5" cy="727.5" r="1.5" fill="#D47895"/>
            <circle cx="917" cy="492" r="3" fill="#D47895"/>
            <circle cx="842.5" cy="728.5" r="2.5" fill="#D47895"/>
            <circle cx="804.5" cy="461.5" r="1.5" fill="#D47895"/>
            <circle cx="817.5" cy="668.5" r="1.5" fill="#D47895"/>
            <circle cx="213.5" cy="707.5" r="2.5" fill="#D47895"/>
            <circle cx="396.789" cy="643.5" r="2.5" fill="#D47895"/>
            <circle cx="494.789" cy="672.5" r="2.5" fill="#D47895"/>
            <circle cx="574.789" cy="447.5" r="2.5" fill="#D47895"/>
            <circle cx="434" cy="385" r="1" fill="#D47895"/>
            <circle cx="229" cy="975" r="2" fill="#D47895"/>
            <circle cx="473.5" cy="499.5" r="2.5" fill="#D47895"/>
            <circle cx="284.5" cy="945.5" r="3.5" fill="#D47895"/>
            <circle cx="190" cy="981" r="2" fill="#D47895"/>
            <circle cx="369.5" cy="700.5" r="2.5" fill="#D47895"/>
            <circle cx="446.5" cy="487.5" r="2.5" fill="#D47895"/>
            <circle cx="418.5" cy="352.5" r="2.5" fill="#D47895"/>
            <circle cx="456.5" cy="1010.5" r="2.5" fill="#D47895"/>
            <circle cx="400.5" cy="367.5" r="2.5" fill="#D47895"/>
            <circle cx="461.5" cy="450.5" r="2.5" fill="#D47895"/>
            <circle cx="348.5" cy="1010.5" r="2.5" fill="#D47895"/>
            <circle cx="463.5" cy="456.5" r="2.5" fill="#D47895"/>
            <circle cx="198.5" cy="555.5" r="2.5" fill="#D47895"/>
            <circle cx="171.5" cy="543.5" r="2.5" fill="#D47895"/>
            <circle cx="186.5" cy="506.5" r="2.5" fill="#D47895"/>
            <circle cx="188.5" cy="512.5" r="2.5" fill="#D47895"/>
            <circle cx="320.5" cy="439.5" r="2.5" fill="#D47895"/>
            <circle cx="153" cy="967" r="2" fill="#D47895"/>
            <circle cx="211.5" cy="1003.5" r="1.5" fill="#D47895"/>
            <circle cx="958.5" cy="968.5" r="2.5" fill="#D47895"/>
            <circle cx="709.5" cy="913.5" r="2.5" fill="#D47895"/>
            <circle cx="747.5" cy="954.5" r="2.5" fill="#D47895"/>
            <circle cx="1225.5" cy="864.5" r="2.5" fill="#D47895"/>
            <circle cx="673.5" cy="885.5" r="2.5" fill="#D47895"/>
            <circle cx="871.5" cy="874.5" r="2.5" fill="#D47895"/>
            <circle cx="796.5" cy="954.5" r="2.5" fill="#D47895"/>
            <circle cx="1099.5" cy="822.5" r="2.5" fill="#D47895"/>
            <circle cx="935.5" cy="855.5" r="2.5" fill="#D47895"/>
            <circle cx="1253.5" cy="874.5" r="2.5" fill="#D47895"/>
            <circle cx="1047.5" cy="969.5" r="2.5" fill="#D47895"/>
            <circle cx="719.5" cy="969.5" r="2.5" fill="#D47895"/>
            <circle cx="807.5" cy="946.5" r="2.5" fill="#D47895"/>
            <circle cx="983.5" cy="895.5" r="2.5" fill="#D47895"/>
            <circle cx="1090.5" cy="949.5" r="2.5" fill="#D47895"/>
            <circle cx="1224.5" cy="1010.5" r="2.5" fill="#D47895"/>
            <circle cx="665.5" cy="970.5" r="1.5" fill="#D47895"/>
            <circle cx="1004.5" cy="881.5" r="3.5" fill="#D47895"/>
            <circle cx="1128.5" cy="910.5" r="1.5" fill="#D47895"/>
            <circle cx="1180.5" cy="969.5" r="1.5" fill="#D47895"/>
            <circle cx="1162.5" cy="897.5" r="1.5" fill="#D47895"/>
            <circle cx="734.5" cy="986.5" r="1.5" fill="#D47895"/>
            <circle cx="895" cy="1042" r="2" fill="#D47895"/>
            <circle cx="950.5" cy="1012.5" r="3.5" fill="#D47895"/>
            <circle cx="966.5" cy="1039.5" r="2.5" fill="#D47895"/>
            <circle cx="953.5" cy="998.5" r="2.5" fill="#D47895"/>
            <circle cx="886" cy="939" r="2" fill="#D47895"/>
            <circle cx="941.5" cy="909.5" r="3.5" fill="#D47895"/>
            <circle cx="847" cy="945" r="2" fill="#D47895"/>
            <circle cx="1113.5" cy="974.5" r="2.5" fill="#D47895"/>
            <circle cx="1005.5" cy="974.5" r="2.5" fill="#D47895"/>
            <circle cx="810" cy="931" r="2" fill="#D47895"/>
            <circle cx="868.5" cy="967.5" r="1.5" fill="#D47895"/>
            <circle cx="353.5" cy="632.5" r="2.5" fill="#D47895"/>
            <circle cx="430.789" cy="709.5" r="2.5" fill="#D47895"/>
            <circle cx="1188.21" cy="681.5" r="2.5" fill="#D47895"/>
            <circle cx="1273.21" cy="690.5" r="1.5" fill="#D47895"/>
            <circle cx="1176.21" cy="492.5" r="2.5" fill="#D47895"/>
            <circle cx="1134.21" cy="363.5" r="2.5" fill="#D47895"/>
            <circle cx="1192.21" cy="461.5" r="2.5" fill="#D47895"/>
            <circle cx="1207.21" cy="446.5" r="2.5" fill="#D47895"/>
            <circle cx="1203.21" cy="369.5" r="2.5" fill="#D47895"/>
            <circle cx="1186.21" cy="440.5" r="1.5" fill="#D47895"/>
            <circle cx="1247.21" cy="429.5" r="2.5" fill="#D47895"/>
            <circle cx="1253.21" cy="582.5" r="2.5" fill="#D47895"/>
            <circle cx="1256.21" cy="531.5" r="2.5" fill="#D47895"/>
            <circle cx="1186.21" cy="627.5" r="2.5" fill="#D47895"/>
            <circle cx="1259.21" cy="613.5" r="1.5" fill="#D47895"/>
            <circle cx="1264.5" cy="593.5" r="2.5" fill="#D47895"/>
            <circle cx="1103.5" cy="704.5" r="2.5" fill="#D47895"/>
            <circle cx="241.789" cy="734.5" r="2.5" fill="#D47895"/>
            <circle cx="223.789" cy="876.5" r="2.5" fill="#D47895"/>
            <circle cx="275.789" cy="777.5" r="2.5" fill="#D47895"/>
            <circle cx="667.5" cy="622.5" r="2.5" fill="#D47895"/>
            <circle cx="652.5" cy="543.5" r="2.5" fill="#D47895"/>
            <circle cx="681.5" cy="412.5" r="2.5" fill="#D47895"/>
            <circle cx="693.5" cy="504.5" r="2.5" fill="#D47895"/>
            <circle cx="650.5" cy="442.5" r="2.5" fill="#D47895"/>
            <circle cx="692.5" cy="674.5" r="2.5" fill="#D47895"/>
            <circle cx="665.5" cy="459.5" r="1.5" fill="#D47895"/>
            <circle cx="633.5" cy="852.5" r="3.5" fill="#D47895"/>
            <circle cx="410.789" cy="565.5" r="2.5" fill="#D47895"/>
            <circle cx="732.5" cy="290.5" r="2.5" fill="#D47895"/>
            <circle cx="834.5" cy="318.5" r="2.5" fill="#D47895"/>
            <circle cx="32" cy="509" r="1" fill="#D47895"/>
            <circle cx="707.5" cy="822.5" r="2.5" fill="#D47895"/>
            <circle cx="711.5" cy="568.5" r="2.5" fill="#D47895"/>
            <circle cx="554.5" cy="1092.5" r="2.5" fill="#D47895"/>
            <circle cx="703.5" cy="1060.5" r="1.5" fill="#D47895"/>
            <circle cx="915.5" cy="285.5" r="2.5" fill="#D47895"/>
            <circle cx="566.5" cy="810.5" r="2.5" fill="#D47895"/>
            <circle cx="688.5" cy="332.5" r="2.5" fill="#D47895"/>
            <circle cx="426.5" cy="291.5" r="2.5" fill="#D47895"/>
            <circle cx="342.5" cy="311.5" r="2.5" fill="#D47895"/>
            <circle cx="595.5" cy="1053.5" r="2.5" fill="#D47895"/>
            <circle cx="553" cy="837" r="3" fill="#D47895"/>
            <circle cx="779.5" cy="330.5" r="2.5" fill="#D47895"/>
            <circle cx="694.5" cy="781.5" r="2.5" fill="#D47895"/>
            <circle cx="64.5" cy="556.5" r="2.5" fill="#D47895"/>
            <circle cx="815.5" cy="1009.5" r="2.5" fill="#D47895"/>
            <circle cx="225.5" cy="308.5" r="2.5" fill="#D47895"/>
            <circle cx="626.5" cy="1072.5" r="2.5" fill="#D47895"/>
            <circle cx="418.5" cy="576.5" r="2.5" fill="#D47895"/>
            <circle cx="680" cy="1039" r="3" fill="#D47895"/>
            <circle cx="567.5" cy="1008.5" r="1.5" fill="#D47895"/>
            <circle cx="442.789" cy="770.5" r="2.5" fill="#D47895"/>
            <circle cx="908" cy="811" r="1" fill="#D47895"/>
            <circle cx="341.5" cy="822.5" r="2.5" fill="#D47895"/>
            <circle cx="314.5" cy="810.5" r="2.5" fill="#D47895"/>
            <circle cx="892.5" cy="778.5" r="2.5" fill="#D47895"/>
            <circle cx="874.5" cy="793.5" r="2.5" fill="#D47895"/>
            <circle cx="329.5" cy="773.5" r="2.5" fill="#D47895"/>
            <circle cx="331.5" cy="779.5" r="2.5" fill="#D47895"/>
            <circle cx="66.5" cy="878.5" r="2.5" fill="#D47895"/>
            <circle cx="39.5" cy="866.5" r="2.5" fill="#D47895"/>
            <circle cx="54.5" cy="829.5" r="2.5" fill="#D47895"/>
            <circle cx="56.5" cy="835.5" r="2.5" fill="#D47895"/>
            <circle cx="794.5" cy="865.5" r="2.5" fill="#D47895"/>
            <circle cx="258.5" cy="576.5" r="2.5" fill="#D47895"/>
            <circle cx="939.211" cy="1039.5" r="2.5" fill="#D47895"/>
            <circle cx="1002.21" cy="281.5" r="2.5" fill="#D47895"/>
            <circle cx="955.211" cy="1008.5" r="2.5" fill="#D47895"/>
            <circle cx="643.211" cy="310.5" r="2.5" fill="#D47895"/>
            <circle cx="1071.21" cy="287.5" r="2.5" fill="#D47895"/>
            <circle cx="622.211" cy="304.5" r="1.5" fill="#D47895"/>
            <circle cx="683.211" cy="293.5" r="2.5" fill="#D47895"/>
            <circle cx="1158.21" cy="526.5" r="2.5" fill="#D47895"/>
            <circle cx="1019.21" cy="1078.5" r="2.5" fill="#D47895"/>
            <circle cx="1091.21" cy="571.5" r="2.5" fill="#D47895"/>
            <circle cx="1164.21" cy="557.5" r="1.5" fill="#D47895"/>
            <circle cx="1169.5" cy="537.5" r="2.5" fill="#D47895"/>
            <circle cx="572.5" cy="566.5" r="2.5" fill="#D47895"/>
            <circle cx="476.789" cy="343.5" r="2.5" fill="#D47895"/>
            <circle cx="98" cy="287" r="1" fill="#D47895"/>
            <circle cx="777.5" cy="346.5" r="2.5" fill="#D47895"/>
            <circle cx="130.5" cy="334.5" r="2.5" fill="#D47895"/>
            <circle cx="484.5" cy="354.5" r="2.5" fill="#D47895"/>
            <circle cx="324.5" cy="354.5" r="2.5" fill="#D47895"/>
            <circle cx="1224.21" cy="304.5" r="2.5" fill="#D47895"/>
            <circle cx="1157.21" cy="349.5" r="2.5" fill="#D47895"/>
            <circle cx="1230.21" cy="335.5" r="1.5" fill="#D47895"/>
            <circle cx="1235.5" cy="315.5" r="2.5" fill="#D47895"/>
            <circle cx="638.5" cy="344.5" r="2.5" fill="#D47895"/>
            <circle cx="415.5" cy="1090.5" r="2.5" fill="#D47895"/>
            <circle cx="549.5" cy="330.5" r="2.5" fill="#D47895"/>
            <circle cx="456.5" cy="1051.5" r="2.5" fill="#D47895"/>
            <circle cx="448.789" cy="828.5" r="1.5" fill="#D47895"/>
            <circle cx="1214.5" cy="765.5" r="2.5" fill="#D47895"/>
            <circle cx="1257.5" cy="694.5" r="2.5" fill="#D47895"/>
            <circle cx="1220.79" cy="592.5" r="2.5" fill="#D47895"/>
            <circle cx="1230.5" cy="657.5" r="2.5" fill="#D47895"/>
            <circle cx="1535.5" cy="385.5" r="2.5" fill="#D47895"/>
            <circle cx="1504.5" cy="415.5" r="2.5" fill="#D47895"/>
            <circle cx="1228.5" cy="603.5" r="2.5" fill="#D47895"/>
            <circle cx="1522.5" cy="698.5" r="1.5" fill="#D47895"/>
            <circle cx="1519.5" cy="432.5" r="1.5" fill="#D47895"/>
            <circle cx="1532.5" cy="639.5" r="1.5" fill="#D47895"/>
            <circle cx="1209.79" cy="643.5" r="2.5" fill="#D47895"/>
            <circle cx="1289.79" cy="418.5" r="2.5" fill="#D47895"/>
            <circle cx="1149" cy="356" r="1" fill="#D47895"/>
            <circle cx="1188.5" cy="470.5" r="2.5" fill="#D47895"/>
            <circle cx="1161.5" cy="458.5" r="2.5" fill="#D47895"/>
            <circle cx="1133.5" cy="323.5" r="2.5" fill="#D47895"/>
            <circle cx="1171.5" cy="981.5" r="2.5" fill="#D47895"/>
            <circle cx="1176.5" cy="421.5" r="2.5" fill="#D47895"/>
            <circle cx="1178.5" cy="427.5" r="2.5" fill="#D47895"/>
            <circle cx="1424.5" cy="884.5" r="2.5" fill="#D47895"/>
            <circle cx="1462.5" cy="925.5" r="2.5" fill="#D47895"/>
            <circle cx="1388.5" cy="856.5" r="2.5" fill="#D47895"/>
            <circle cx="1511.5" cy="925.5" r="2.5" fill="#D47895"/>
            <circle cx="1434.5" cy="940.5" r="2.5" fill="#D47895"/>
            <circle cx="1522.5" cy="917.5" r="2.5" fill="#D47895"/>
            <circle cx="1380.5" cy="941.5" r="1.5" fill="#D47895"/>
            <circle cx="1449.5" cy="957.5" r="1.5" fill="#D47895"/>
            <circle cx="1525" cy="902" r="2" fill="#D47895"/>
            <circle cx="1145.79" cy="680.5" r="2.5" fill="#D47895"/>
            <circle cx="1382.5" cy="593.5" r="2.5" fill="#D47895"/>
            <circle cx="1367.5" cy="514.5" r="2.5" fill="#D47895"/>
            <circle cx="1396.5" cy="383.5" r="2.5" fill="#D47895"/>
            <circle cx="1408.5" cy="475.5" r="2.5" fill="#D47895"/>
            <circle cx="1365.5" cy="413.5" r="2.5" fill="#D47895"/>
            <circle cx="1143.5" cy="977.5" r="1.5" fill="#D47895"/>
            <circle cx="1393.5" cy="637.5" r="1.5" fill="#D47895"/>
            <circle cx="370.5" cy="279.5" r="2.5" fill="#D47895"/>
            <circle cx="469.5" cy="297.5" r="2.5" fill="#D47895"/>
            <circle cx="512.5" cy="226.5" r="2.5" fill="#D47895"/>
            <circle cx="475.789" cy="124.5" r="2.5" fill="#D47895"/>
            <circle cx="485.5" cy="189.5" r="2.5" fill="#D47895"/>
            <circle cx="385.5" cy="218.5" r="2.5" fill="#D47895"/>
            <circle cx="97" cy="68" r="1" fill="#D47895"/>
            <circle cx="155.5" cy="272.5" r="2.5" fill="#D47895"/>
            <circle cx="776.5" cy="127.5" r="2.5" fill="#D47895"/>
            <circle cx="761.5" cy="48.5" r="2.5" fill="#D47895"/>
            <circle cx="138.5" cy="284.5" r="2.5" fill="#D47895"/>
            <circle cx="837.5" cy="160.5" r="2.5" fill="#D47895"/>
            <circle cx="784.5" cy="256.5" r="2.5" fill="#D47895"/>
            <circle cx="896.5" cy="275.5" r="2.5" fill="#D47895"/>
            <circle cx="755.5" cy="266.5" r="2.5" fill="#D47895"/>
            <circle cx="910.5" cy="16.5" r="1.5" fill="#D47895"/>
            <circle cx="374.5" cy="154.5" r="1.5" fill="#D47895"/>
            <circle cx="908.5" cy="200.5" r="2.5" fill="#D47895"/>
            <circle cx="138.5" cy="276.5" r="2.5" fill="#D47895"/>
            <circle cx="212.5" cy="149.5" r="2.5" fill="#D47895"/>
            <circle cx="802.5" cy="9.5" r="2.5" fill="#D47895"/>
            <circle cx="78.5" cy="156.5" r="2.5" fill="#D47895"/>
            <circle cx="129.5" cy="115.5" r="2.5" fill="#D47895"/>
            <circle cx="1040.5" cy="218.5" r="2.5" fill="#D47895"/>
            <circle cx="116" cy="142" r="3" fill="#D47895"/>
            <circle cx="1040.5" cy="207.5" r="2.5" fill="#D47895"/>
            <circle cx="833.5" cy="28.5" r="2.5" fill="#D47895"/>
            <circle cx="358.5" cy="143.5" r="2.5" fill="#D47895"/>
            <circle cx="1124.5" cy="264.5" r="2.5" fill="#D47895"/>
            <circle cx="2.5" cy="34.5" r="2.5" fill="#D47895"/>
            <circle cx="1127.5" cy="213.5" r="2.5" fill="#D47895"/>
            <circle cx="483.5" cy="135.5" r="2.5" fill="#D47895"/>
            <circle cx="32.5" cy="226.5" r="2.5" fill="#D47895"/>
            <circle cx="82.5" cy="149.5" r="2.5" fill="#D47895"/>
            <circle cx="835.5" cy="138.5" r="1.5" fill="#D47895"/>
            <circle cx="801.5" cy="179.5" r="2.5" fill="#D47895"/>
            <circle cx="777.5" cy="230.5" r="1.5" fill="#D47895"/>
            <circle cx="812.5" cy="231.5" r="2.5" fill="#D47895"/>
            <circle cx="787.5" cy="171.5" r="1.5" fill="#D47895"/>
            <circle cx="183.5" cy="210.5" r="2.5" fill="#D47895"/>
            <circle cx="366.789" cy="146.5" r="2.5" fill="#D47895"/>
            <circle cx="464.789" cy="175.5" r="2.5" fill="#D47895"/>
            <circle cx="443.5" cy="2.5" r="2.5" fill="#D47895"/>
            <circle cx="339.5" cy="203.5" r="2.5" fill="#D47895"/>
            <circle cx="168.5" cy="58.5" r="2.5" fill="#D47895"/>
            <circle cx="141.5" cy="46.5" r="2.5" fill="#D47895"/>
            <circle cx="156.5" cy="9.5" r="2.5" fill="#D47895"/>
            <circle cx="158.5" cy="15.5" r="2.5" fill="#D47895"/>
            <circle cx="323.5" cy="135.5" r="2.5" fill="#D47895"/>
            <circle cx="400.789" cy="212.5" r="2.5" fill="#D47895"/>
            <circle cx="1158.21" cy="184.5" r="2.5" fill="#D47895"/>
            <circle cx="1243.21" cy="193.5" r="1.5" fill="#D47895"/>
            <circle cx="1223.21" cy="85.5" r="2.5" fill="#D47895"/>
            <circle cx="1226.21" cy="34.5" r="2.5" fill="#D47895"/>
            <circle cx="1156.21" cy="130.5" r="2.5" fill="#D47895"/>
            <circle cx="1229.21" cy="116.5" r="1.5" fill="#D47895"/>
            <circle cx="1234.5" cy="96.5" r="2.5" fill="#D47895"/>
            <circle cx="1073.5" cy="207.5" r="2.5" fill="#D47895"/>
            <circle cx="211.789" cy="237.5" r="2.5" fill="#D47895"/>
            <circle cx="245.789" cy="280.5" r="2.5" fill="#D47895"/>
            <circle cx="637.5" cy="125.5" r="2.5" fill="#D47895"/>
            <circle cx="622.5" cy="46.5" r="2.5" fill="#D47895"/>
            <circle cx="663.5" cy="7.5" r="2.5" fill="#D47895"/>
            <circle cx="662.5" cy="177.5" r="2.5" fill="#D47895"/>
            <circle cx="380.789" cy="68.5" r="2.5" fill="#D47895"/>
            <circle cx="2" cy="12" r="1" fill="#D47895"/>
            <circle cx="681.5" cy="71.5" r="2.5" fill="#D47895"/>
            <circle cx="664.5" cy="284.5" r="2.5" fill="#D47895"/>
            <circle cx="34.5" cy="59.5" r="2.5" fill="#D47895"/>
            <circle cx="388.5" cy="79.5" r="2.5" fill="#D47895"/>
            <circle cx="412.789" cy="273.5" r="2.5" fill="#D47895"/>
            <circle cx="862.5" cy="281.5" r="2.5" fill="#D47895"/>
            <circle cx="844.5" cy="296.5" r="2.5" fill="#D47895"/>
            <circle cx="299.5" cy="276.5" r="2.5" fill="#D47895"/>
            <circle cx="301.5" cy="282.5" r="2.5" fill="#D47895"/>
            <circle cx="228.5" cy="79.5" r="2.5" fill="#D47895"/>
            <circle cx="1128.21" cy="29.5" r="2.5" fill="#D47895"/>
            <circle cx="1061.21" cy="74.5" r="2.5" fill="#D47895"/>
            <circle cx="1134.21" cy="60.5" r="1.5" fill="#D47895"/>
            <circle cx="1139.5" cy="40.5" r="2.5" fill="#D47895"/>
            <circle cx="542.5" cy="69.5" r="2.5" fill="#D47895"/>
            <circle cx="648.5" cy="169.5" r="1.5" fill="#D47895"/>
            <circle cx="266.789" cy="266.5" r="3.5" fill="#D47895"/>
            <circle cx="1184.5" cy="268.5" r="2.5" fill="#D47895"/>
            <circle cx="1227.5" cy="197.5" r="2.5" fill="#D47895"/>
            <circle cx="1190.79" cy="95.5" r="2.5" fill="#D47895"/>
            <circle cx="1200.5" cy="160.5" r="2.5" fill="#D47895"/>
            <circle cx="1173.5" cy="294.5" r="2.5" fill="#D47895"/>
            <circle cx="1491.5" cy="98.5" r="2.5" fill="#D47895"/>
            <circle cx="1476.5" cy="19.5" r="2.5" fill="#D47895"/>
            <circle cx="1499.5" cy="227.5" r="2.5" fill="#D47895"/>
            <circle cx="1470.5" cy="237.5" r="2.5" fill="#D47895"/>
            <circle cx="1451.5" cy="308.5" r="2.5" fill="#D47895"/>
            <circle cx="1437.5" cy="300.5" r="1.5" fill="#D47895"/>
            <circle cx="1163.79" cy="799.5" r="1.5" fill="#D47895"/>
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
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <br>
            <h2>Crea tu cuenta profesor</h2>
            <h3>
                The ninth planet te ayuda a comunicarte, compartir y recibir información del CECyT N°9, ya sea académica, con tu cuenta de profesor podrás consultar comunicados que comparta la escuela de forma directa,  e interactuar con otros estudiantes del plantel.
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
                        <input type="date" max="1990-12-31" min="1950-01-01" name="fecha"  class="form-control" placeholder="Fecha de nacimiento">
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
                         data-bs-content="Ingresa tu correo, puede ser un correo personal o un correo personal, sustituye la letra ñ por n y de 10 a 35 caracteres">  
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
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <select   name="area" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Área</option>
                            <option value="A">1</option>
                            <option value="B">2</option>
                            <option value="C">3</option>
                        </select>
                        <label for="floatingSelect">Área</label>
                    </div> 
                </div>
            </div>
            <br>
            <input type="checkbox" class="form-check-input" >
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AvisoPrivacidad">
            Aviso de privacidad
            </button>
            <br><br>
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