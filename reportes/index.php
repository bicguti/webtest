<?php
    require_once '../plantillas/header.php';
    require_once '../model/personal.entidad.php';
    require_once '../model/personal.model.php';

    $model = new PersonalModel();
 ?>
<main>
  <section>
    <h1 class="texto-centro">Reportes del Sistema en Formato PDF</h1>
    <br>
  </section>
  <section>
    <table>
      <thead>
        <tr>
          <th>
            #
          </th>
          <th>
            TIPO DE REPORTE
          </th>
          <th>
            IR AL REPORTE
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            1
          </td>
          <td>
            Reporte de personal por fecha de nacimiento
          </td>
          <td>
            <a href="/reportes/fnacimiento.php" class="button info">Opciones del Reporte</a>
          </td>
        </tr>
        <tr>
          <td>
            2
          </td>
          <td>
            Reporte de personal por Sueldos
          </td>
          <td>
          <a href="/reportes/sueldos.php" class="button info">Opciones del Reporte</a>
          </td>
        </tr>
        <tr>
          <td>
            3
          </td>
          <td>
            Reporte de personal por Puestos
          </td>
          <td>
            <a href="/reportes/puestos.php" class="button info">Opciones del Reporte</a>
          </td>
        </tr>
      </tbody>
    </table>
  </section>
</main>
<?php require_once '../plantillas/footer.php' ?>
