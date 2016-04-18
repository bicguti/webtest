<?php
/**
 *
 */
class Personal
{
  private $id;
  private $nombres;
  private $apellidos;
  private $direccion;
  private $nit;
  private $fechaNacimiento;
  private $idPuesto;
  public function __GET($x)
  {
    return $this->$x;
  }

  public function __SET($x, $y)
  {
    return $this->$x = $y;
  }

}

 ?>
