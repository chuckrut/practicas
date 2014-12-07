<?php
require_once('fpdf.php');
require_once('fpdi.php');

class ConcatPdf extends FPDI
{
    public $files = array();

    public function setFiles($files)
    {
        $this->files = $files;
    }

    public function concat()
    {
        foreach($this->files AS $file) {
            $pageCount = $this->setSourceFile($file);
            for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                 $tplIdx = $this->ImportPage($pageNo);
                 $s = $this->getTemplatesize($tplIdx);
                 $this->AddPage($s['w'] > $s['h'] ? 'L' : 'P', array($s['w'], $s['h']));
                 $this->useTemplate($tplIdx);
            }
        }
    }
}

$pdf = new ConcatPdf();
$pdf->setFiles(array("Boombastic-Box.pdf", "Fantastic-Speaker.pdf", "Noisy-Tube.pdf"));
$pdf->concat();

$pdf->Output('concat.pdf', 'I');