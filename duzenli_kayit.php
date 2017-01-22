<?php 
	include('baglan.php');
	$g_id=$_POST["kimlik"];
	$g_numara=$_POST["numara"];
	$g_ad=$_POST["ad"];
	$g_sinif=$_POST["sinif"];
	$g_alan=$_POST["alan"];
	if($db->exec("UPDATE ogrenci SET numara=$g_numara, adi_soyadi='$g_ad', sinif='$g_sinif', alan='$g_alan' WHERE id=$g_id"))
		{
			echo"Başarı ile düzenlendi";
		}
	else
		{
			echo"hata oluştu";
		}
?>
<html>
	<head>
    	<META HTTP-EQUIV="refresh" CONTENT="2;URL=index.php">
    </head>
</html>