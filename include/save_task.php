<?php 
include("../db.php");
$nombre=$_POST['nombrenuevo'];
$correo=$_POST['correonuevo'];
$equipo=$_POST['teams'];
$huella=$_POST['huellanuevo'];
echo $equipo;
if(!empty($nombre) &&!empty($correo) &&!empty($huella)){
    if(isset($_POST['guardar_persona'])){
        $query = "INSERT INTO usuarios(nombre_usu, huella, Id_equipo, correo, estado) 
        VALUES ('$nombre','$huella', $equipo,'$correo','Si')"; 
        $result = mysqli_query($conn, $query);
        if($result) {
            echo "<script>
            alert('Guardado de forma correcta');location.href='admuse.php'</script>";}
         }
         die("<script>
         alert('Ya esta registrado');window.history.back()</script>");
             
}
die("<script>
     alert('Un campo esta vacio');window.history.back()</script>");
?>