<?php
require_once '../model/personal.entidad.php';
require_once '../model/personal.model.php';

$model = new PersonalModel();

require_once '../Pdf.php';
$pdf=new Pdf('P','mm','A4','true','UTF-8',false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Byron Castro');
$pdf->SetTitle('Reporte por Sueldo');
$pdf->SetSubject('prueva técnica');
$pdf->SetKeywords('Byron,Castro, PDF, test, developer');
//datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE. ' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData($tc=array(0,64,0), $lc=array(0,64,128));
//datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config.php de liabraries/config
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));
//se pueden modificar en el archivo tcṕdf_config.php de libraries/config
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
//se puede modificar en el archivo tcpdf_config.php de libraries/config
$pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP,PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
//se pueden modificar en le archivo tcpdf_config.php de libraries/config
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//relación utilizada para ajustar la conversion de los píxeles
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
//-----------------------------------------
//Establecer el modo de fuente por defecto
$pdf->setFontSubsetting(TRUE);
//establecer el tipo de letra
//si tienes que imprimir carácteres ASCII estándar, puede utilizar las fuentes basicas como
//Helvetica para reducir el tamaño del archivo
$pdf->SetFont('Helvetica', '', 12, '', true);
//añadir una página
//este metodo tiene varias opciones, consultar la documentación para mas información
$pdf->AddPage(array('L'));
//fijar efecto de sombra en el texto

//aqui es donce debemos de recibir el contenido para el PDF
$datos = $model->getReporteSueldo($_POST['sueldo']);//buscamos los datos para el reporte
if (count($datos) != 0) {
  $pdf->Cell(30, 0, 'NIT', 1, false, 'C', 0, '', 0);
  $pdf->Cell(60, 0, 'NOMBRES', 1, false, 'C', 0, '', 0);
  $pdf->Cell(60, 0, 'APELLIDOS', 1, false, 'C', 0, '', 0);
  $pdf->Cell(60, 0, 'PUESTO', 1, false, 'C', 0, '', 0);
  $pdf->Cell(60, 0, 'SALARIO', 1, TRUE, 'C', 0, '', 0);
  $pdf->SetFont('freesans', '', 12, '', true);
  foreach ($datos as $key =>$value) {
        $pdf->Cell(30, 0, $value->nit_personal, 1, false, 'C', 0, '', 0);
        $pdf->Cell(60, 0, ucwords($value->nombre_personal), 1, false, 'C', 0, '', 0);
        $pdf->Cell(60, 0, ucwords($value->apellidos_personal), 1, false, 'C', 0, '', 0);
        $pdf->Cell(60, 0, ucwords($value->nombre_puesto), 1, false, 'C', 0, '', 0);
        $pdf->Cell(60, 0, 'Q. '.$value->sueldo_puesto, 1, true, 'C', 0, '', 0);
  }

} else {
    $html = '<h1>No se encontro ninguna coincidencia con el salario especificado: Q. '.$_POST['sueldo'].'</h1>';
    $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);

}
if ($_POST['opcion'] == 'visualizar') {
  //este metodo tiene varias opciones, consulte la documentación para más información.
  $nombre_archivo = utf8_decode("Personal por Sueldos.pdf");
  $pdf->Output($nombre_archivo,'I');
}else {

  //este metodo tiene varias opciones, consulte la documentación para más información.
  $nombre_archivo = utf8_decode("Personal por Sueldos.pdf");
  $pdf->Output($nombre_archivo,'D');
}
 ?>
