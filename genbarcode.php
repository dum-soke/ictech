<?php
//คำสั่ง connect db เขียนเพิ่มเองนะ

$strExcelFileName="barcode.xls";
header("Content-Type: application/x-msexcel; name=\"$strExcelFileName\"");
header("Content-Disposition: inline; filename=\"$strExcelFileName\"");
header("Pragma:no-cache");

include "vendor/src/BarcodeGenerator.php";
include "vendor/src/BarcodeGeneratorPNG.php";
 
 
function barcode($code){
    
    $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
    $border = 2;//กำหนดความหน้าของเส้น Barcode
    $height = 40;//กำหนดความสูงของ Barcode
 
    return $generator->getBarcode($code , $generator::TYPE_CODE_128,$border,$height);
 
}
 
$servername = "localhost";
$username = "root";
$password = "Knit2585*";
$db_name = "abkhuenk_ab";
 
// สร้างการเชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($servername, $username, $password,$db_name);
 
//กำหนด charset ให้เป็น utf8 เพื่อรองรับภาษาไทย
mysqli_set_charset($conn,"utf8");
 
// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if (!$conn) {
    //กรณีเชื่อมต่อไม่ได้
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM mas_product where status!=0 ".$str;
$result = mysqli_query($conn, $sql);




?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<br>
<div id="SiXhEaD_Excel" align=center x:publishsource="Excel">
<table x:str border=1 cellpadding=0 cellspacing=1 width=100% style="border-collapse:collapse">
<tr>
<td width="94" height="30" align="center" valign="middle" ><strong>Code</strong></td>
<td width="200" align="center" valign="middle" ><strong>ชื่อผู้ใช้งาน</strong></td>
<td width="181" align="center" valign="middle" ><strong>ชื่อ-นามสกุล</strong></td>
<td width="181" align="center" valign="middle" ><strong>เบอร์โทรศัทพ์</strong></td>
<td width="181" align="center" valign="middle" ><strong>ที่อยู่</strong></td>
<td width="185" align="center" valign="middle" ><strong>อีเมล์</strong></td>
</tr>
<?php

if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
	echo barcode(sprintf("%010d", $row['code']))."<br>";
?>
 
<?php
	
}
}
?>
</table>
</div>
<script>
window.onbeforeunload = function(){return false;};
setTimeout(function(){window.close();}, 10000);
</script>
</body>
</html>