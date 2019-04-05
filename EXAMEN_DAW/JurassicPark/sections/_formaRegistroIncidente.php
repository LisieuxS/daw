<?php
  require_once("../php/registro.php");
?>
<h2>Registra un incidente</h2>
<div class="row">
    <form class="col s12" method="POST" name = "registerForm" id = "registerForm" action = "<?=$_SERVER['PHP_SELF']?>">
      
      <div class="row">
          <div class="input-field col s12">
            <select name="lugar" id="lugar"  >
              <option value="" disabled selected>Selecciona una opción</option>
                              <option value="1">Centro turístico</option>
                              <option value="3">Laboratorios</option>
                              <option value="2">Restaurante</option>
                              <option value="4">Centro operativo</option>
                              <option value="5">Triceratops</option>
                              <option value="6">Dilofosaurios</option>
                              <option value="7">Velociraptors</option>
                              <option value="8">TRex</option>
                              <option value="9">Planicie de los herbívoros</option>
            </select>
            <label>¿Dónde es el incidente?</label>
          </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <select name = "tipo" id = "tipo">
              <option value="" disabled selected>Selecciona una opción</option>
              <option value="3">Falla eléctrica</option>
              <option value="4">Fuga de herbívoro</option>
              <option value="5">Fuga de Velociraptor</option>
              <option value="1">Fuga de TRex</option>
              <option value="6">Robo de ADN</option>
              <option value="7">Auto descompuesto</option>
              <option value="2">Visitantes en zona no autorizada</option>
            </select>
            <label>¿Cuál es el incidente?</label>
        </div>
      </div>
      <div class="row">
          <button class="btn waves-effect waves-light indigo darken-4" type="submit" name="action">Registrar
                <i class="material-icons right">send</i>
          </button>
          <a href='../index.php' class='btn indigo darken-4'>Regresar a Inicio</a>
      </div>
    </form>
  </div>