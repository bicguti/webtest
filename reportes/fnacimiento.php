<?php
    require_once '../plantillas/header.php';
    require_once '../model/personal.entidad.php';
    require_once '../model/personal.model.php';
 ?>
<main>
  <section>
    <h1 class="texto-centro">Generación de Reporte por Fecha de Nacimiento</h1>
    <p>
      Nota: Todos los campos con (*) son requeridos.
    </p>
  </section>
  <section>
    <form class="" action="generar.php" method="post" target="_blank">
      <label for="">Fecha de Nacimiento*</label>
      <input type="text" name="fecha" value="" required="required" placeholder="Fecha de nacimiento e.j. 1998-07-13">
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
