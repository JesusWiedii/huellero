<?php include "header.php"; ?>
<body background="../img/fondo1.jpeg">
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
    <div id="tab-body-2" class="tab-body">
      <p>Nombre completo: <input type="text" name="nombrenuevo" id="nombrenuevo">, Correo:
      <input type="text" name="correonuevo" id="correonuevo">, Equipo: 
      <select class="custom-select" name="teams">
   <option value="1">Colocolo</option> 
   <option value="2">Lions</option> 
   <option value="3">Margay</option>
   <option value="4">Geofrray</option> 
   <option value="5">Cheetah</option> 
   <option value="6">Ligers</option> 
   <option value="7">Puma</option> 
</select>, Huella: <input type="text" name="huellanuevo" id="huellanuevo">.
<button type="button" class="bguarda" id="guardausuario" >Guardar</button>
    </p>
      <p></p>
    </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
</html>