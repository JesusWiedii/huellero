<?php include "header.php"; ?>


<div class="tabs-wrapper ">
        <input type="radio" name="tab" id="tab1" checked="checked">
        <label for="tab1" class="label-1 "><h3>Cambio horarios</h3></label>
        <input type="radio" name="tab" id="tab2">
        <label for="tab2" class="label-2 "><h3>Edicion de usuario</h3></label>

        
  <div class="tab-body-wrapper">
    <div id="tab-body-1" class="tab-body">
        <div  style="width:100%;">  <select class="custom-select" name="teams">
   <option value="1">Colocolo</option> 
   <option value="2">Lions</option> 
   <option value="3">Margay</option>
   <option value="4">Geofrray</option> 
   <option value="5">Cheetah</option> 
   <option value="6">Ligers</option> 
   <option value="7">Puma</option> 
</select>
    <p>Hora de entrada: <input type="time" name=hdentrada >
    , Hora de salida:<input type="time" name=hdsalida >
    , Salir a almorzar: <input type="time" name=hdsalmorzar >
    , Entrar de almorzar: <input type="time" name=hdealmorzar >
    <button type="button" class="bguarda" id="guardahorario" >Guardar</button></p>

</div>
  
      <p></p>
    </div>
    <form action="save_task.php" method="post">
    <div id="tab-body-2" class="tab-body">
      <p>Nombre completo: <input type="text" name="nombrenuevo" id="nombrenuevo">, Correo:
        <input type="text" name="correonuevo" id="correonuevo">, Equipo: 
        <select class="custom-select" name="teams" id="teams">
        <option value="Colocolo">Colocolo</option> 
        <option value="Lions">Lions</option> 
        <option value="Margay">Margay</option>
        <option value="Geofrray">Geofrray</option> 
        <option value="Ceetah">Cheetah</option> 
        <option value="Ligers">Ligers</option> 
        <option value="Puma">Puma</option> 
        </select>, Huella: <input type="text" name="huellanuevo" id="huellanuevo">.
        <input type="submit" class="bguarda btn" name='guardar_persona' value="Guardar">
        <input type="submit" class="bguarda btn" name='actualizar' value="Actualizar">
        <input type="submit" class="bguarda btn" name='deshabilitar' value="Deshabilitar">
        </p>
        <table class="table table-bordered" style="font-size: 2vw;"id="tablausu">
        <thead>
          <tr>
            <th>Nombre usuario</th>
            <th>Correo</th>
            <th>Equipo</th>
            <th>Huella</th>
            <th>Fecha</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
              $query = "SELECT * FROM usuarios WHERE estado=1 ORDER BY nombre_usu ASC";
              $result_tasks = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                  <tr>
                    <td><?php echo $row['nombre_usu'];?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['equipo']; ?></td>
                    <td><?php echo $row['huella']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                    <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td></tr>
              <?php } ?>
        </tbody>
      </table>



    </div></form>
 
    </div>
  </div>
</div>

<?php include "footer.php"; ?>
