<?php
	require 'email.php/PHPExcel-1.8/Classes/PHPExcel.php';
	
	//instantiation
	$e = new PHPExcel();
	/*header('content-Type : application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename="revenue.xls"');
	
	$o = PHPExcel_IOFactory::createWriter($e,'Excel5');*/
	
	header('Content-Type:application/
		vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition : attachment; filename="revenue.xlsx"');
	
	$o = PHPExcel_IOFactory::createWriter($e,'Excel2007');
	
?>
