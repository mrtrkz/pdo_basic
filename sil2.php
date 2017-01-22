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
                $g_id=$_GET["id"];
                if($db->exec("Delete FROM ogrenci WHERE id=$g_id"))
                    {
                        echo'<div class="alert alert-success">Kayıt Başarı ile silindi.</div>';
                    }
                else
                    {
                        echo'<div class="alert alert-danger">Kayıt Silme işlemi sırasında bir hata meydana geldi.</div>';
                    }          
            ?>    
        </div>
    </body>
</html>