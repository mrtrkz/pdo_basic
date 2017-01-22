
<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <title>doğrulama örnekleri</title>
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery.validate.min.js"></script>
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
            <form class="cmxform" id="signupForm" method="post" action="duzenli_kayit.php">
                <table width="600" border="1">
                  <tr>
                    <td>Numara</td>
                    <td>
                    	<input id="kimlik" name="kimlik" type="hidden" value="<?php echo $row[0]; ?>">
                    	<input id="numara" name="numara" type="text" value="<?php echo $row[1]; ?>" required>
                    </td>
                  </tr>
                  <tr>
                    <td>Adı Soyadı</td>
                    <td><input id="ad" name="ad" type="text" value="<?php echo $row[2]; ?>" required></td>
                  </tr>
                  <tr>
                    <td>Sınıf</td>
                    <td><input id="sinif" name="sinif" type="text" value="<?php echo $row[3]; ?>" required></td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td><input id="alan" name="alan" type="text" value="<?php echo $row[4]; ?>" required></td>
                  </tr>
                   <tr>
                    <td colspan="2"><input class="submit" type="submit" value="Düzenle"/></td>
                  </tr>
                </table>
            </form>
            <br>
         </div>
    </body>
</html>