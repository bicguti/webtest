<?php
    require_once '../plantillas/header.php';
 ?>
<main>
  <section>
    <h1 class="texto-centro">Generación de Reporte de Personal por Sueldos</h1>
    <p>
      Nota: Todos los campos con (*) son requeridos.
    </p>
  </section>
  <section>
    <form class="" action="generars.php" method="post" target="_blank">
      <label for="">Sueldo*</label>
      <input type="text" name="sueldo" value="" required="required" placeholder="El sueldo e.j. 2500">
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
