<?php
require_once 'PHPExcel.php';
$excel = new PHPExcel();
$excel->setActiveSheetIndex(0)
	  ->setCellValue('A1','Selam')
	  ->setCellValue('B1','Dünyalı');
$file = PHPExcel_IOFactory::createWriter($excel,'Excel2013');
$file->save('dnmX.xlsx');
?>