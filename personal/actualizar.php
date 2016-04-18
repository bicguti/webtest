<?php
session_start();
  require_once '../model/personal.entidad.php';
  require_once '../model/personal.model.php';

  $personal = new Personal();
  $model = new PersonalModel();

  $personal->__SET('id', $_POST['id']);
  $personal->__SET('nombre', $_POST['nombres']);
  $personal->__SET('apellidos', $_POST['apellidos']);
  $personal->__SET('direccion', $_POST['direccion']);
  $personal->__SET('nit', $_POST['nit']);
  $personal->__SET('fechaNacimiento', $_POST['fecha_nacimiento']);
  $personal->__SET('idPuesto', $_POST['puesto']);

  $model->updatePersonal($personal);
  $_SESSION['respuesta'] = 'Se han actualizado los datos del empleado exitosamente!!!';

  header('Location: http://localhost/test/personal/index.php');
    //redirect('http://localhost/evaluacion/personal/index.php');
 ?>
