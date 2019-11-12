<?php include ("db.php")?>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Huellero</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <div class="cabecera" class="row">
        <div class="col-xs-4 col-md-4"><img src="img/verticalwiedii.svg" alt="" class="imgwiedii"></div>
        <div class="col-xs-4 col-md-4">
        <a href="#"><button class="bini" type="button" class="" >Inicio</button></a></div>
        <div class="col-xs-4 col-md-4"><?php include "include/reloj.php"?></div>
    </div>
</head>

<body background="img/fondo1.jpeg">
    <div>
        <table>
            <tr>
                <td><button class="menuusu" type="button" class="">Entrada</button></td>
                <td><h2 class="txtmb">Bienvenido, Por favor marque la opcion seguido de la huella.</h2></td>
                <td><button class="menuusu" type="button" class="">Salida</button></td>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr><td><button type="button" class="lunch">Va a almorzar</button></td></tr>
                        <tr><td><button type="button"class="lunch">Viene de almorzar</button></td></tr>
                    </table>
                </td>
                <td><a href="include/ingadmin.php"><button class="badmin" type="button" class="" >
                <img src="img/engrana.svg" alt="" class="eadmin"></button></a></td>
                <td><button class="badmin" type="button" class="">
                <img src="img/correo2.svg" alt="" class="eadmin"></button></td>
            </tr>
        </table>
    </div>
</body>
<footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/reloj.js" ></script>

</footer>

</html>