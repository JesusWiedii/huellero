<?php include ("db.php")?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Huellero</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <div class="row, cabecera">
        <div class="col-xs-4 col-md-4"><img src="../img/verticalwiedii.svg" alt="" class="imgwiedii"></div>
        <div class="col-xs-2 col-md-2"><a href="../index.php">
        <button class="binh" type="button" class="" >Inicio</button></a></div>
        <div class="col-xs-2 col-md-2"><a href="javascript:window.history.back();"> 
        <button class="binh" type="button" class="">Volver</button></a></div>
        <div class="col-xs-3 col-md-2"><?php include "reloj.php"?></div>
    </div>
   
</head>