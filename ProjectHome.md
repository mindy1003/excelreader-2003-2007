<p>This class is very sample to use,Enjoy~:)</p>
<h4>Example:</h4>
```
error_reporting( E_ALL & ~E_NOTICE );

require_once 'excel-read.class.php';
//read 2003 excel 
$excel = new ExcelReader("excel2site-gdoc2excel.xls","UTF-8");
//get the sheet data via sheet name
$rs = $excel->getWorksheetData('category');
var_dump($rs);
//read 2007 excel 
$excel = new ExcelReader("excel2site-e27.xlsx","UTF-8");
//get the sheet data via sheet name
$rs = $excel->getWorksheetData('category');
var_dump($rs);
```