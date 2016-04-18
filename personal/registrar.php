<?php
session_start();
  require_once '../model/personal.entidad.php';
  require_once '../model/personal.model.php';

  $personal = new Personal();
  $model = new PersonalModel();

  $personal->__SET('nombre', $_POST['nombres']);
  $personal->__SET('apellidos', $_POST['apellidos']);
  $personal->__SET('direccion', $_POST['direccion']);
  $personal->__SET('nit', $_POST['nit']);
  $personal->__SET('fechaNacimiento', $_POST['fecha_nacimiento']);
  $personal->__SET('idPuesto', $_POST['puesto']);

  $existe = $model->findNitPersonal($_POST['nit']);

  if (count($existe) == 0) {
    $model->setPersonal($personal);
    $_SESSION['respuesta'] = 'Se ha registrado al nuevo empleado exitosamente!!!';
  }else {
    $_SESSION['respuesta'] = 'No se pudo registrar al nuevo empleado, porque el numero de NIT ya existe en la base de datos, este tiene que ser unico!!!';
  }
  //$model->setPersonal($personal);

  /*$nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $direccion =  $_POST['direccion'];
  $nit = $_POST['nit'];
  $fechaNacimiento = $_POST['fecha_nacimiento'];
  $puesto = $_POST['puesto'];
  $cui = $_POST['cui'];
  $telefono = $_POST['telefono'];
  $modelo = new conexion();
  $resultado = $modelo->setPersonal($nombres, $apellidos, $direccion, $nit, $cui, $fechaNacimiento, $puesto, $telefono);
  if ($resultado[0]->respuesta == 0) {
    $_SESSION['respuesta'] = 'No se pudo registrar al nuevo empleado, porque el numero de DPI (CUI) ya existe en la base de datos!!!';
  }else {
    $_SESSION['respuesta'] = 'Se ha registrar al nuevo empleado exitosamente!!!';
  }*/
  header('Location: http://localhost/test/personal/index.php');
    //redirect('http://localhost/evaluacion/personal/index.php');
 ?>
