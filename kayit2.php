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
                $g_numara=$_POST["numara"];
                $g_ad=$_POST["ad"];
                $g_sinif=$_POST["sinif"];
                $g_alan=$_POST["alan"];
                if($db->exec("INSERT INTO ogrenci (numara,adi_soyadi,sinif,alan) VALUES ($g_numara,'$g_ad','$g_sinif','$g_alan')"))
                    {
                        $id= $db->lastInsertId();
                        echo'<div class="alert alert-success">Kayıt Başarı ile Eklendi.Yeni eklenen Öğrencinin IDsi: '. $id.'</div>';
                    }
                else
                    {
                        echo'<div class="alert alert-danger">Yeni kayıt eklerken bir hata meydana geldi.</div>';
                    }         
            ?>    
        </div>
    </body>
</html>