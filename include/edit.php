<?php

include "../db.php";
$nombre = '';
$huella= '';
$equipo='';
$correo='';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM usuarios WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre_usu'];
    $huella = $row['huella'];
    $equipo=$row['equipo'];
    $correo=$row['correo'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $huella = $_POST['huella'];
  $equipo=$_POST['equipo'];
  $correo=$_POST['correo'];

  $query = "UPDATE usuarios set nombre_usu = '$nombre', 
  huella='$huella', equipo = '$equipo', correo='$correo' WHERE id=$id";
  mysqli_query($conn, $query);
  echo "<script>
            alert('Guardado de forma correcta');location.href='admuse.php'</script>";
  //$_SESSION['message'] = 'Task Updated Successfully';
  //$_SESSION['message_type'] = 'warning';
  //header('Location: index.php');
}

?>
<?php include('header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" 
          placeholder="Actualizar fecha">
          <input name="correo" type="text" class="form-control" value="<?php echo $correo; ?>" 
          placeholder="Actualizar correo">
          <select name="equipo"class="custom-select" value="<?php echo $equipo; ?>" id="teams">
          <option selected='selected'><?php echo $equipo; ?></option>
        <option value="Colocolo">Colocolo</option> 
        <option value="Lions">Lions</option> 
        <option value="Margay">Margay</option>
        <option value="Geofrray">Geofrray</option> 
        <option value="Ceetah">Cheetah</option> 
        <option value="Ligers">Ligers</option> 
        <option value="Puma">Puma</option> 
        </select>
        </div>
        <div class="form-group">
        <textarea name="huella" class="form-control" ><?php echo $huella;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
