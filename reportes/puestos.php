<?php
    require_once '../plantillas/header.php';
    require_once '../model/personal.entidad.php';
    require_once '../model/personal.model.php';
 ?>
<main>
  <section>
    <h1 class="texto-centro">Generación de Reporte por Puestos</h1>
    <p>
      Nota: Todos los campos con (*) son requeridos.
    </p>
  </section>
  <section>
    <form class="" action="generarp.php" method="post" target="_blank">
      <label for="">Puesto*</label>
      <input type="text" name="puesto" value="" required="required" placeholder="Nombre del puesto e.j. operador">
      <br>
      <label for="">Opción</label>
      <input type="radio" name="opcion" value="descargar" required="required"> Descargar PDF
      <input type="radio" name="opcion" value="visualizar" required="required"> Visualizar PDF
      <br>
      <br>
      <input type="submit" name="name" value="Generar PDF" class="button danger">
    </form>
  </section>
</main>
 <?php require_once '../plantillas/footer.php' ?>
