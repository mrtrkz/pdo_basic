<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//TR" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
		<title>PDO örneği</title>
	</head>
	<body>
    	<a href="form.html">Yeni Kayıt</a>
		<table border="1" width="60%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>numara</th>
                    <th>adı soyadı</th>
                    <th>sınıf</th>
                    <th>alan</th>
                    <th>işlem</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include('baglan.php');
					//tek satır bilgi çekme
					/*$row = $db->query('SELECT * FROM ogr WHERE id = 1')->fetch();
					echo $row[2];*/
                    if($veri = $db->query('SELECT * FROM ogrenci'))
                        {
                        //çoklu satır döndürme
                            foreach($veri as $row) {
                                echo "<tr> 
                                        <td> $row[0] </td>
                                        <td> $row[1] </td> 
                                        <td> $row[2] </td> 
                                        <td> $row[3] </td>
                                        <td> $row[4] </td>
										<td> <a href='sil.php?id=$row[0]'>Sil</a> <a href='duzenle.php?id=$row[0]'>duzenle</a> </td> 
                                      </tr>";
                            }
                        }
                    else
                        {
                            echo 'Sorguda bir hata meydana geldi.';
                            $error = $db->errorInfo();
                            echo 'Hata mesajı: ' . $error[2];
                        }
            $db = null;  
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>numara</th>
                    <th>adı soyadı</th>
                    <th>sınıf</th>
                    <th>alan</th>
                    <th>işlem</th>
                </tr>
            </tfoot>
        </table>
	</body>
</html>