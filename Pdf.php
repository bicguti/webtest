<?php
require_once dirname(__FILE__) .'/tcpdf/tcpdf.php';
class Pdf extends TCPDF
{
	function __construct()
	{
		parent::__construct();
	}

	public function Header() {

		$this->SetFont('helvetica', 'I', 16);
		// Page number
		$this->Cell(0, 15, 'Reporte por fecha de Nacimiento', 0, false, 'C', 0, '', 0);
		// Logo
		$logo = 'http://webtest.bicdev.com/img/code-break.png';

		$this->Image($logo, 5, 0, 30, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 0, 'Página'.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0);
		//$this->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);

		//$this->Cell(0, 0, 'Pestalozzi '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'L', 0, '', 0);
		//$this->Cell(0, 0, 'Pestalozzi '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0);
		//$this->Cell(0, 0, 'Pestalozzi '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0);
	}
}
/*application/libraries/Pdf.php*/
