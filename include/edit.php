<?php

include "../db.php";
$nombre = '';
$huella = '';
$correo = '';
$equipo = '';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM usuarios u, equipos e WHERE u.id=$id and u.Id_equipo=e.Id_equipo";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre_usu'];
    $huella = $row['huella'];
    $equipo = $row['nombre_equipo'];
    $correo = $row['correo'];
    $estado = $row['estado'];
    $id_team = $row['Id_equipo'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $huella = $_POST['huella'];
  $equipo = $_POST['equipo'];
  $correo = $_POST['correo'];
  $deshab = $_POST['desha'];
  if (!empty($nombre) && !empty($correo) && !empty($huella)) {
    $buscar = "SELECT * FROM usuarios WHERE id!=$id and huella=$huella";
    $resultado = mysqli_query($conn, $buscar);
    $jaja = mysqli_num_rows($resultado);
    echo $jaja;
    if (mysqli_num_rows($resultado) == 0) {
      $query = "UPDATE usuarios set nombre_usu = '$nombre', 
     huella='$huella', Id_equipo = '$equipo', correo='$correo', estado='$deshab' WHERE id=$id";
      $result = mysqli_query($conn, $query);
      if ($result) {
        echo "<script>
            alert('Guardado de forma correcta');location.href='admuse.php'</script>";
      }
    } else {
      echo ("<script>alert('Ya hay alguien adicional con esta huella');window.history.back()</script>");
    }
  } else {
    echo ("<script>alert('Un campo esta vacio');window.history.back()</script>");
  }
}

?>
<?php include('header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="">
      <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <div class="form-group" style="margin-top: 15vw;">
            Nombre completo:
            <input name="nombre" type="text" value="<?php echo $nombre; ?>" placeholder="Actualizar nombre">
            <br>
            Correo:
            <input name="correo" type="text" value="<?php echo $correo; ?>" placeholder="Actualizar correo">
            <br>
            Equipo:
            <select name="equipo" id="teams">
              <option selected='selected' value="<?php echo $id_team; ?>"><?php echo $equipo; ?></option>
              <?php include "equipos.php"; ?>
            </select>
            <br>
            Huella:
            <input name="huella" value="<?php echo $huella; ?>">
            <br>
            <input type="radio" name="desha" class="chkbox" value="No">Deshabilitado
            <input type="radio" name="desha" class="chkbox" value="Si" checked>Habilitado
            <br>
            <button class="bguarda btn" name="update">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>