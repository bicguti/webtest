<?php
/**
 *
 */
class Puesto
{
  private $id;
  private $puesto;
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
