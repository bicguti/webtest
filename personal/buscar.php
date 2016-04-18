<?php
require_once '../model/personal.entidad.php';
require_once '../model/personal.model.php';
$model = new PersonalModel();


$dato = $_REQUEST['dato'];
$opcion = $_REQUEST['opcion'];
switch ($opcion) {
  case 'nit':
    $datos = $model->findPersonalNit($dato);
    break;

  case 'nombre':
    $datos = $model->findPersonalNombre($dato);
    break;

  default:
    # code...
    break;
}

echo json_encode($datos);
 ?>
