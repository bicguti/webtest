<?php
session_start();
    require_once '../plantillas/header.php';
    require_once '../model/personal.entidad.php';
    require_once '../model/personal.model.php';

    $model = new PersonalModel();
 ?>
 <main>
   <?php if (isset($_SESSION['respuesta'])): ?>

     <section class="message">
       <strong>Mensaje del Sistema:</strong>
       <p><?php echo $_SESSION['respuesta'];    unset($_SESSION['respuesta']) ?></p>
     </section>
   <?php endif; ?>
   <section class="titulo-contenido">
     <h1 class="texto-centro">Personal</h1>
     <a class="button success" href="<?php echo '/personal/nuevo.php' ?>">Nuevo Personal</a>
   </section>

   <section class="listado">
     <table class="tabla">
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
             OPERACION
           </th>
         </tr>
       </thead>
       <tbody>
        <?php
            foreach ($model->getAll() as $key => $value) {
              ?>
              <tr>
                <td>
                  <?php echo $key+1; ?>
                </td>
                <td>
                  <?php echo ucwords($value->__GET('nombre')); ?>
                </td>
                <td>
                  <?php echo ucwords($value->__GET('apellidos')); ?>
                </td>
                <td>
                      <a href="/personal/editar.php?id=<?php echo $value->__GET('id'); ?>" class="button info">Editar</a>
                      <a href="/personal/eliminar.php?id=<?php echo $value->__GET('id'); ?>" class="button danger">Eliminar</a>
                </td>
              </tr>
              <?php
            }
         ?>
       </tbody>
     </table>
   </section>
 </main>

<?php require_once '../plantillas/footer.php' ?>
