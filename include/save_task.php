<?php include "../db.php";
$nombre = $_POST['nombrenuevo'];
$correo = $_POST['correonuevo'];
$equipo = $_POST['teams'];
$huella = $_POST['huellanuevo'];



if (!empty($nombre) && !empty($correo) && !empty($huella)) {
    if (isset($_POST['guardar_persona'])) {
        $buscar = "SELECT * FROM usuarios WHERE huella=$huella";
        $resultado = mysqli_query($conn, $buscar);
        if (mysqli_num_rows($result_b) == 0) {
            $query = "INSERT INTO usuarios (nombre_usu, huella, Id_equipo, correo, estado) 
        VALUES ('$nombre','$huella', $equipo,'$correo','Si')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<script>
            alert('Guardado de forma correcta');location.href='admuse.php'</script>";
            }
        } else {
            echo "<script>
         alert('El usuario ya existe');window.history.back()</script>";
        }
    } else
        echo "<script>
         alert('No ha guardado, error en la base de datos');window.history.back()</script>";
} else {
    echo ("<script>alert('Un campo esta vacio');window.history.back()</script>");
}
?>