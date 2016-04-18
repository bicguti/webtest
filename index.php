<?php
    require_once 'plantillas/header.php'
 ?>
 <main>
   <section>
    <h1 class="texto-centro">Pagina de Inicio</h1>
    <h2 class="texto-centro">Test de Desarrollo</h2>
   </section>
   <section>
     <br>
     <p>
       Este es el Sistema del Test Solicitado.
     </p>
     <p>
       <h1>Información Importante:</h1>
       Antes de utilizar el sistema lea las siguientes instrucciones.
     </p>
     <br>
     <p>
       <h1>Descripción de las opciones:</h1>
       En la parte superior se encuentran disponibles todas las opciones principales del sistema. Al presionar una de esas opciones
       le llevara a las opciones especificas.
     </p>
     <br>
     <p>
        <strong>INICIO:</strong> Esta opcion unicamente es para dirigirse a esta página principal.
     </p>
     <br>
     <p>
       <strong>PERSONAL:</strong> Esta opción es para dirigirese a las opciones de mantenimineto del PERSONAL, tal como se solicito en los requerimientos.
        Primero listara todo el personal registrado en la base de datos, un boton verde sobre la nomina de personal lo llevara al formulario para agregar un nuevo registro a la base de datos.
        Segundo, aparece dos botones en el lado derecho de los datos del Personal en la columna operación, el boton <span class="info">celeste</span> lo llevara al formulario para editar los datos especificos de un miembro del personal que se esta listando y posteriormente actulizarlo, el boton
        <span class="danger">rojo</span> es para eliminar todos los datos de un miembro del personal que se esta listando, estos datos son eliminados completamente de la base de datos.
     </p>
     <br>
     <p>
       <strong>BUSQUEDAS:</strong> Esta opción es lo llevara directo a un formulario donde habran dos campos de texto disponibles con un boton <span class="info">celeste</span> en la parte inferior para buscar un miembro del personal registrado en la base de datos,
       donde usted elige si desea buscarlo con su numero de nit o por sus nombres, <strong><i>nota*</i></strong> si no encuentra ninguna coincidencia con alguno de los terminos de busqueda en la parte inferior de la tabla le indicara que no ha encontrado coincidencias, de lo
       contrario mostrara los datos de esa persona.
     </p>
     <br>
     <p>
       <strong>REPORTES:</strong> Esta opción esta dedicada para generar reportes en formato PDF, existen tres reportes de los cuales usted puede elegir cuál es el que desea o necesita. Aparece una tabla listando los reportes diponibles, el botono <span class="info">celeste</span>
        al lado derecho del reporte lo llevar al formulario para especificar el parametro con el que debe de generarse el reporte, también le solicitara si desea <i>Visualizar</i> o <i>Descargar</i> el archivo.
     </p>
      <br>
      <p>
        <strong>Lenguajes Utilizados:</strong>
        <ul>
          <li><a href="#">PHP</a> para el lenguaje del lado del servidor</li>
          <li><a href="#">SQL</a> con el gestor de base de datos <a href="#">MYSQL</a> para almacenar los datos.</li>
          <li><a href="#">HTML</a> para la estructura del sistema del lado del cliente.</li>
          <li><a href="#">CSS</a> para el maquetado de la estructura,(<i>colores</i>, <i>posicion</i>, <i>presentación</i>)</li>
          <li><a href="#">JAVASCRIPT</a> con la libreria <strong>jquery</strong> para manejar las peticiónes ajax.</li>
          <li><a href="#">TCPDF</a> libreria utilizada para generar los reportes en formato PDF</li>
        </ul>
      </p>
      <br>
      <p>
        <strong>Lugar donde se encuentra disponible código utilizado:</strong> <a href="#">http://github.com</a>
      </p>
   </section>
 </main>


<?php require_once 'plantillas/footer.php' ?>
