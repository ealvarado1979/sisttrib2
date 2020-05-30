<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
require_once dirname(__FILE__) . '/tcpdf/config/spa.php';

class Pdf extends TCPDF {

    function __construct() {
        parent::__construct();
    }

    // El encabezado del PDF
    public function Header() {
        if ($GLOBALS['g_opcion'] == 2) {
            $this->Image(base_url() . 'assets/img/OJCSJ.jpg', 10, 5, 20); //colocacion del logo X,Y, TAMAÑO
            $this->Image(base_url() . 'assets/img/SV.jpg', 180, 5, 20);
            $this->SetFont('helvetica', '', 14);
            $this->MultiCell(0, 0, "AÑO " . date('Y'), 0, 'C', 0, 1, '', '', true, 0, false, true, 0);
            $this->SetFont('helvetica', '', 12);
            $this->MultiCell(0, 0, $GLOBALS['g_sede'], 0, 'C', 0, 1, '', '', true, 0, false, true, 0);
            $this->MultiCell(0, 0, 'ORGANO JUDICIAL CORTE SUPREMA DE JUSTICIA', 0, 'C', 0, 1, '', '', true, 0, false, true, 0);
            $this->SetFont('helvetica', 'B', 11);
            $this->MultiCell(190, 0, $GLOBALS['g_oficina'], 'B', 'C', 0, 1, 10, '', true, 0, false, true, 0);
        }
    }

// El pie del pdf
    public function Footer() {
//            // Position at 15 mm from bottom
        if ($GLOBALS['g_opcion'] == 0) {
            $this->SetFont('helvetica', '', 12);
            $this->SetY(-35);
            $this->MultiCell(0, 0, 'SELLO', 0, 'C', 0, 1, 125, '', true, 0, false, true, 0);
            $this->MultiCell(55, 0, '', 0, 'C', 0, 0, '', '', true, 0, false, true, 0);
            $this->MultiCell(70, 0, $GLOBALS['g_nombre'], 'T', 'C', 0, 0, '', '', true, 0, false, true, 0);
            $this->MultiCell(55, 0, '', 0, 'C', 0, 1, '', '', true, 0, false, true, 0);
        }
        $this->SetY(-15);
// Set font
        $this->SetFont('helvetica', 'I', 7);
// Page number
        $fimpr = date('d/m/Y H:i:s');
        if ($GLOBALS['g_opcion'] == 0) {
            $this->MultiCell(55, 0, $GLOBALS['g_usuario'] . ' | ' . $fimpr, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
        } else {
            $this->MultiCell(35, 0, $fimpr, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
        }
        $this->MultiCell(0, 0, 'Página ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, 'R', 0, 0, 155, '', true, 0, false, true, 0);
    }

}

/* application/libraries/Pdf.php */