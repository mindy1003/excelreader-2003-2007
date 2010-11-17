<?php
error_reporting( E_ALL & ~E_NOTICE );

require_once 'excel-read.class.php';




$excel = new ExcelReader("excel2site-gdoc2excel.xls","UTF-8");
$excel->getWorksheetData('category');
echo "<hr />";
$excel = new ExcelReader("excel2site-e27.xlsx","UTF-8");
$excel->getWorksheetData('category');
?>