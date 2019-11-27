<?php include("db.php") ?>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Huellero</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <div class="cabecera" class="row">
    <div class="col-xs-4 col-md-4"></div>
    <div class="col-xs-4 col-md-4"><img src="img/verticalwiedii.svg" alt="" class="imgwiedii"></div>
    <div class="col-xs-4 col-md-4"></div>
  </div>
</head>

<body>
  <form action="include/registro.php" method="post">
    <br><br>
    <div class="row">

      <div class="col-xs-6 col-md-6">
        <h2 class="txtmb" style="margin-top:4rem;"> Ingrese su huella
          <div style="font-size: 3rem;">
            <?php if (@$_GET['Invalid'] == true) { ?>
              <div class="aler-light text-danger my-1" style="Background: white; text-align:center"><?php echo $_GET['Invalid'] ?></div>
            <?php } ?></div>
          <div style="font-size: 3rem;">
            <?php if (@$_GET['Success'] == true) { ?>
              <div class="aler-light text-success my-1" style="Background: white; text-align:center"><?php echo $_GET['Success'] ?></div>
            <?php } ?></div>
          <input type="text" name="user" id="usern" style="width:70%;text-align:center;" autofocus="autofocus" onblur="blurFunction()">
          <button type="submit" name="operacion" value="correo" style="background-color: transparent;
color: transparent;border-color: transparent;margin-top: 2rem;"><img src="img/correo.svg" alt="" style="width: 20vw;
"></button>
        </h2>
      </div>
      <div class="col-xs-6 col-md-6">
        <button type="submit" name="operacion" class="menuusu" value="registro">
          Ingreso o<br>Salida</button>
        <?php include "include/reloj.php" ?>
      </div>
      <div class="col-xs-6 col-md-6">

      </div>
      <div class="col-xs-6 col-md-6">


      </div>
    </div>
  </form>
</body>
<footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/reloj.js"></script>
  <script src="js/funciones.js"></script>

</footer>

</html>