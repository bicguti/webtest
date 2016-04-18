<?php
    require_once '../plantillas/header.php';
    require_once '../model/puesto.entidad.php';
    require_once '../model/personal.model.php';

    //echo $_SERVER['HTTP_HOST'];
    //echo $_SERVER['REQUEST_URI'];
    $model = new PersonalModel();
 ?>
<main>
  <section>
    <h1 class="texto-centro">Nuevo Personal</h1>
    <p>
      Nota: Todos los campos con (*) son requeridos.
    </p>
  </section>
  <section>
    <form class="" action="registrar.php" method="post">
    <label for="">Nombres*</label>
    <input type="text" name="nombres" value="" required="required" placeholder="Nombres del empleado">
    <label for="">Apellidos*</label>
    <input type="text" name="apellidos" value="" required="required" placeholder="Apellidos del Empleado">
    <label for="">Direccion*</label>
    <input type="text" name="direccion" value="" required="required" placeholder="Direccíon de residencia">
    <label for="">Nit*</label>
    <input type="text" name="nit" value="" placeholder="No de nit" required="required">
    <label for="">Fecha de Nacimiento*</label>
    <input type="text" name="fecha_nacimiento" value="" required="required" placeholder="Fecha de nacimiento e.j. 1990-01-10" >
    <label for="">Puesto*</label>
    <select class="" name="puesto" required="required">
        <option value="">Seleccione puesto...</option>
        <?php foreach ($model->getAllPuestos() as $key => $value): ?>
          <option value="<?php echo $value->__GET('id') ?>"> <?php echo mb_strtoupper($value->__GET('puesto')); ?> </option>
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
