<?php 
include("db.php");

if(isset($_POST['guardar_persona'])){
    $nombre=$_POST['nombrenuevo'];
    $correo=$_POST['correonuevo'];
    $equipo=$_POST['teams'];
    $huella=$_POST['huellanuevo'];
    
    if(!empty($nombre) && !empty($correo) && !empty($huella)){
        $repetido= mysqli_query($conn,"");
        if (empty($repetido)){
            $query ="INSERT INTO usuarios(nombre_usu, correo, equipo, huella) 
            VALUES('$nombre', '$correo', '$equipo','$huella')";
            $result= mysqli_query($conn, $query);
            $mensaje="9";
        }
        elseif(!empty($repetido)){
            $mensaje="8";
            echo $repetido;
        }

    }
    else if (empty($nombre) or empty($correo) or empty($huella)){
        echo "<script>
        alert('Un campo esta vacio');window.history.back()</script>";
    }

    
    if($mensaje=='8'){$mensaje="0";$huella="0";
        echo $repetido;
        //echo "<script>
        //alert('El usuario ya esta registrado');window.history.back()</script>";
    }
    elseif($mensaje=='9'){$mensaje="0";
            echo "<script>
            alert('Se ha guardado de forma correcta');window.history.back()</script>";}
    
   
    

}
?>