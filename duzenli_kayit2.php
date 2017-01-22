<!DOCTYPE html>
<html lang="tr">
    <head>
    	<META HTTP-EQUIV="refresh" CONTENT="2;URL=index2.php">
        <meta charset="utf-8">
        <title>Kaydet</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script> 
    </head>
    <body>
        <div id="main">
    		<?php 
				include('baglan.php');
				$g_id=$_POST["kimlik"];
				$g_numara=$_POST["numara"];
				$g_ad=$_POST["ad"];
				$g_sinif=$_POST["sinif"];
				$g_alan=$_POST["alan"];
				if($db->exec("UPDATE ogrenci SET numara=$g_numara, adi_soyadi='$g_ad', sinif='$g_sinif', alan='$g_alan' WHERE id=$g_id"))
					{
						echo"<div class='alert alert-success'>Kayıt Başarı ile düzenlendi.</div>";
					}
				else
					{
						echo"<div class='alert alert-danger'>Kayıt Düzenleme işlemi sırasında bir hata meydana geldi.</div>";
					}
			?>
        </div>
    </body>
</html>