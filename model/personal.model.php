<?php
/**
 * Clase para la Conexion con el servidor MYSQL y Realizar CRUD
 */
class PersonalModel
{
  private $pdo;
  function __construct()
  {
    try {
        $this->pdo =  new PDO('mysql:host=localhost;dbname=personal', 'root', 'mypass', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        //$this->pdo->exec("SET CHARACTER SET utf8");
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      die($e->getMessage());
    }//fin del try catch
  }//fin del constructor de la conexion

  public function getAll()
  {
    try {
      $result = array();
      $stm = $this->pdo->prepare('select* from PERSONAL');
      $stm->execute();
      foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $key) {
        $per = new Personal();

        $per->__SET('id', $key->id_personal);
        $per->__SET('nombre', $key->nombre_personal);
        $per->__SET('apellidos', $key->apellidos_personal);
        $per->__SET('direccion', $key->direccion_personal);
        $per->__SET('nit', $key->nit_personal);
        $per->__SET('fechaNacimiento', $key->fecha_nacimiento);
        $per->__SET('idPuesto', $key->id_puesto);
        $result[] = $per;
      }
      return $result;
      //return $stm->fetchAll(PDO::FETCH_OBJ);
      //return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }//fin del metodo para listar elementos de la base de datos

  public function getAllPuestos()
  {
    try {
      $result = array();
      $stm = $this->pdo->prepare('SELECT* FROM PUESTOS');
      $stm->execute();
      foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $key) {
        $puesto = new Puesto();
        $puesto->__SET('id', $key->id_puesto);
        $puesto->__SET('puesto', $key->nombre_puesto);
        $result[] = $puesto;
        //array_push($result, $com);
      }
      return $result;
      //return $stm->fetchAll(PDO::FETCH_OBJ);
      //return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }//fin del metodo para listar elementos de la base de datos

    //metdodo para buscar la existencia de un numero de nit
    public function findNitPersonal($nit)
    {
      try {
        $stm = $this->pdo->prepare('SELECT* FROM PERSONAL where nit_personal = ?');
        $stm->execute(array($nit));
        return $stm->fetchAll(PDO::FETCH_OBJ);
      } catch (Exception $e) {
        die($e->getMessage());
      }

    }

    //metodo para registrar a un nuevo personal
  public function setPersonal(Personal $dato)
  {
    try {
      $stm =   $this->pdo->prepare('INSERT INTO PERSONAL(nit_personal, nombre_personal, apellidos_personal, direccion_personal, fecha_nacimiento, id_puesto) VALUES(?, ?, ?, ?, ?, ?)');
      $stm->execute(array($dato->__GET('nit'), $dato->__GET('nombre'), $dato->__GET('apellidos'), $dato->__GET('direccion'), $dato->__GET('fechaNacimiento'), $dato->__GET('idPuesto')));
    } catch (Exception $e) {
      die($e->getMessage());
    }
    if ($titulo != '' and $comentario != '') {
      $stm = $this->pdo->prepare('INSERT INTO comentarios(title, body)values("'.$titulo.'","'.$comentario.'")');
      $stm->execute();
    }
  }//fin del metdodo registrar

  public function findPersonal($id)
  {
    try {
      $stm = $this->pdo->prepare('SELECT* FROM PERSONAL where id_personal=?');
      $stm->execute(array($id));

      $key = $stm->fetch(PDO::FETCH_OBJ);

      $per = new Personal();

      $per->__SET('id', $key->id_personal);
      $per->__SET('nombre', $key->nombre_personal);
      $per->__SET('apellidos', $key->apellidos_personal);
      $per->__SET('direccion', $key->direccion_personal);
      $per->__SET('nit', $key->nit_personal);
      $per->__SET('fechaNacimiento', $key->fecha_nacimiento);
      $per->__SET('idPuesto', $key->id_puesto);

      return $per;

    } catch (Exception $e) {
      die($e->getMessage());
    }

  }//fin del metodo

  public function updatePersonal(Personal $dato)
  {
    try {
      //echo $dato->__GET('id');
      $stm = $this->pdo->prepare('UPDATE PERSONAL SET nit_personal = ?, nombre_personal = ?, apellidos_personal = ?, direccion_personal = ?, fecha_nacimiento = ?, id_puesto = ?  where id_personal= ?');
      $stm->execute(array($dato->__GET('nit'), $dato->__GET('nombre'), $dato->__GET('apellidos'), $dato->__GET('direccion'), $dato->__GET('fechaNacimiento'), $dato->__GET('idPuesto'), $dato->__GET('id')));
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }//fin del metodo para actulizar los datos de un empleado

  public function deletePersonal($id)
  {
    try {
        $stm = $this->pdo->prepare('DELETE FROM PERSONAL WHERE id_personal = ?');
        $stm->execute(array($id));
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }//fin del metodo para eliminar

  //metodo para buscar a un elemento del personal por su nit
  public function findPersonalNit($nit)
  {
    try {
      $stm = $this->pdo->prepare('SELECT* FROM PERSONAL where nit_personal=?');
      $stm->execute(array($nit));

      $datos = $stm->fetch(PDO::FETCH_OBJ);

      return $datos;
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }//fin del metodo

  public function findPersonalNombre($nombres)
  {
    try {
      $stm = $this->pdo->prepare('SELECT* FROM PERSONAL where nombre_personal=?');
      $stm->execute(array($nombres));
      $datos = $stm->fetch(PDO::FETCH_OBJ);
      return $datos;
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }//fin del metodo para buscar a una personal por su nombre

  //metodo para obtenr a todo el personal que coincida con una fecha de nacimiento
  public function getReporteNacimiento($fecha)
  {
    try {
      $result = array();
      $stm = $this->pdo->prepare('SELECT* FROM PERSONAL where fecha_nacimiento=?');
      $stm->execute(array($fecha));
      foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $key) {
        $per = new Personal();

        $per->__SET('id', $key->id_personal);
        $per->__SET('nombre', $key->nombre_personal);
        $per->__SET('apellidos', $key->apellidos_personal);
        $per->__SET('direccion', $key->direccion_personal);
        $per->__SET('nit', $key->nit_personal);
        $per->__SET('fechaNacimiento', $key->fecha_nacimiento);
        $per->__SET('idPuesto', $key->id_puesto);
        $result[] = $per;
    }//fin del foreach
      return $result;
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }//fin del metodo

  public function getReporteSueldo($sueldo)
  {
    try {
      $stm = $this->pdo->prepare('SELECT* FROM PERSONAL p INNER JOIN PUESTOS pu ON p.id_puesto = pu.id_puesto where pu.sueldo_puesto=?');
      $stm->execute(array($sueldo));
        return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }//fin del metodo

  public function getReportePuesto($puesto)
  {
    try {
      $stm = $this->pdo->prepare('SELECT* FROM PERSONAL p INNER JOIN PUESTOS pu ON p.id_puesto = pu.id_puesto where pu.nombre_puesto=?');
      $stm->execute(array($puesto));
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }

}//fin de la clase

 ?>
