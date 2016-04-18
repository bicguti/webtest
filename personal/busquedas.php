<?php require_once '../plantillas/header.php'; ?>
<main>
  <section>
    <h1 class="texto-centro">Busquedas</h1>
  </section>

  <section>
    <label for="">Buscar por Nombre:</label>
    <input type="text" name="nombres" value="" maxlength="50" id="nombres">
    <br>
    <button type="button" name="button" class="button info" id="btn-buscarNom">Buscar</button>
    <br>
    <br>
    <label for="">Buscar por Nit:</label>
    <input type="text" name="nit" value="" id="nit">
    <br>
    <button type="button" name="button" class="button info" id="btn-buscarNit">Buscar</button>
  </section>
  <section>
    <table>
      <thead>
        <tr>
          <th>
            #
          </th>
          <th>
            NOMBRES
          </th>
          <th>
            APELLIDOS
          </th>
          <th>
            EDITAR
          </th>
          <th>
            ELIMINAR
          </th>
        </tr>
      </thead>
      <tbody id="resultados">

      </tbody>
    </table>
  </section>
</main>
<div class="carga-modal">
  <h1 class="texto-centro">Cargando..</h1>
</div>
<?php require_once '../plantillas/footer.php' ?>
