<?php
session_start();
require_once '../model/personal.model.php';
$model = new PersonalModel();
$id = $_REQUEST['id'];
$model->deletePersonal($id);

$_SESSION['respuesta'] = 'Se han eliminado los datos del empleado exitosamente!!!';
header('Location: http://localhost/test/personal/index.php');
?>
