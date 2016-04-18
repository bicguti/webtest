<?php

    require_once '../plantillas/header.php';
    //echo $aux;
    require_once '../model/personal.entidad.php';
    require_once '../model/puesto.entidad.php';
    require_once '../model/personal.model.php';

    //echo $_SERVER['HTTP_HOST'];
    //echo $_SERVER['REQUEST_URI'];
//echo $aux;
    $model = new PersonalModel();
    $datos = $model->findPersonal($_REQUEST['id']);


 ?>
<main>
  <section>
    <h1 class="texto-centro">Editar Personal</h1>
    <p>
      Nota: Todos los campos con (*) son requeridos.
    </p>
  </section>
  <section>
    <form class="" action="actualizar.php" method="post">
      <input type="hidden" name="id" value="<?php echo $datos->__GET('id') ?>">
    <label for="">Nombres*</label>
    <input type="text" name="nombres" value="<?php echo $datos->__GET('nombre'); ?>" required="required" placeholder="Nombres del empleado">
    <label for="">Apellidos*</label>
    <input type="text" name="apellidos" value="<?php echo $datos->__GET('apellidos'); ?>" required="required" placeholder="Apellidos del Empleado">
    <label for="">Direccion*</label>
    <input type="text" name="direccion" value="<?php echo $datos->__GET('direccion'); ?>" required="required" placeholder="Direccíon de residencia">
    <label for="">Nit*</label>
    <input type="text" name="nit" value="<?php echo $datos->__GET('nit'); ?>" placeholder="No de nit" required="required">
    <label for="">Fecha de Nacimiento*</label>
    <input type="text" name="fecha_nacimiento" value="<?php echo $datos->__GET('fechaNacimiento'); ?>" required="required" placeholder="Fecha de nacimiento e.j. 1990-01-10" >
    <label for="">Puesto*</label>
    <select class="" name="puesto" required="required">
        <option value="">Seleccione puesto...</option>
        <?php foreach ($model->getAllPuestos() as $key => $value): ?>
          <?php if ($value->__GET('id') == $datos->__GET('idPuesto') ): ?>
              <option value="<?php echo $value->__GET('id') ?>" selected="selected"> <?php echo mb_strtoupper($value->__GET('puesto')); ?> </option>
          <?php else: ?>
              <option value="<?php echo $value->__GET('id') ?>"> <?php echo mb_strtoupper($value->__GET('puesto')); ?> </option>
          <?php endif; ?>

        <?php endforeach; ?>

    </select>
    <br>
    <button type="submit" class="button success">Guardar</button>
    </form>
  </section>
</main>
 <?php
     require_once '../plantillas/footer.php';
  ?>
