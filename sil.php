<?php 
	include('baglan.php');
	$g_id=$_GET["id"];
	if($db->exec("Delete FROM ogrenci WHERE id=$g_id"))
		{
			echo'Başarı ile silindi';
		}
	else
		{
			echo'hata oluştu';
		}
?>
<html>
	<head>
    	<META HTTP-EQUIV="refresh" CONTENT="2;URL=index.php">
    </head>
</html>