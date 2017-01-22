<?php 
	include('baglan.php');
	$g_numara=$_POST["numara"];
	$g_ad=$_POST["ad"];
	$g_sinif=$_POST["sinif"];
	$g_alan=$_POST["alan"];
	if($db->exec("INSERT INTO ogrenci (numara,adi_soyadi,sinif,alan) VALUES ($g_numara,'$g_ad','$g_sinif','$g_alan')"))
		{
			$id= $db->lastInsertId();
			echo'Yeni eklenen Öğrencinin IDsi: '. $id;
		}
	else
		{
			echo'Yeni kayıt eklerken bir hata meydana geldi.';
		}
?>
<html>
	<head>
    	<META HTTP-EQUIV="refresh" CONTENT="2;URL=index.php">
    </head>
</html>