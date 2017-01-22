<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <title>doğrulama örnekleri</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $.validator.setDefaults({ submitHandler: function() { $("#signupForm").submit(); }   });
            $().ready(function() { $("#signupForm").validate();    });
        </script>
        <style type="text/css">
			#signupForm { width: 670px; }
			#signupForm label.error {margin-left: 10px;	width: auto; display: inline; color:red;}
        </style> 
    </head>
    <body>
    	<div id="main">
            <br>
            <?php 
				include('baglan.php');
				$g_id=$_GET["id"];
				$row = $db->query("SELECT * FROM ogrenci WHERE id = $g_id")->fetch();
			?>
            <div class="panel panel-default">
            	<div class="panel-heading"><h3><span class="label label-primary">Kayıt Düzenleme</span></h3></div>
                <div class="panel-body">
                    <form id="signupForm" method="post" action="duzenli_kayit2.php">
                        <table>
                            <tr>
                                <td width="100"><span class="label label-default">Numara</span></td>
                                <td>
                                	<input id="kimlik" name="kimlik" type="hidden" value="<?php echo $row[0]; ?>">
                    				<input id="numara" name="numara" type="text" value="<?php echo $row[1]; ?>" required>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td><span class="label label-default">Adı Soyadı</span></td>
                                <td><input id="ad" name="ad" type="text" value="<?php echo $row[2]; ?>" required></td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td><span class="label label-default">Sınıf</span></td>
                                <td><input id="sinif" name="sinif" type="text" value="<?php echo $row[3]; ?>" required></td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td><span class="label label-default">Alan</span></td>
                                <td><input id="alan" name="alan" type="text" value="<?php echo $row[4]; ?>" required></td>
                            </tr>
                        </table>
                  </div>
              	  <div class="panel-footer">
                        <input class="btn btn-primary" type="submit" value="Düzenle"/> 
                        <a class="btn btn-warning" href="index2.php">Vazgeç</a>
                    </form>
              	  </div>
            </div>
         </div>
    </body>
</html>