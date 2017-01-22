<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//TR" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
		<title>DataTables ve PDO örneği</title>
		<style type="text/css" title="currentStyle">
			@import "css/demo_page.css";/*sayfa tasarım için*/
			@import "css/demo_table_jui.css";/* jquery ui kullanılacaksa bu css kullanılmalı*/
			@import "css/jquery-ui-1.10.4.custom.min.css";/*belli zaten*/
		</style>
		<script type="text/javascript" language="javascript" src="js/jquery-1.10.2.js"></script>
		<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>       
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable( {
					"bJQueryUI": true,//jquery theması
					"sPaginationType": "full_numbers",
					"bPaginate": true,
					"bLengthChange": true,
					"bFilter": true,
					"bSort": true,
					"bInfo": true,
					"bAutoWidth": true,
					"oLanguage": {//dil türkçeleştirme
						"sProcessing":     "Lütfen Bekleyin Bilgi Yükleniyor...",
						"sSearch":         "Arama:",
						"sLengthMenu":     "Göster _MENU_ Kayıt",
						"sInfo":           "Gösterilen _START_ ile _END_ arası kayıtlar. Toplam Kayıt Sayısı _TOTAL_ ",
						"sInfoEmpty":      "Gösterilecek Kayıt Yok...",
						"sInfoFiltered":   "(Filtresiz Kayıt Sayısı _MAX_ )",
						"sInfoPostFix":    "",
						"sLoadingRecords": "Yükleniyor...",
						"sZeroRecords":    "Eşleşen Kayıt Bulunamadı.",
						"sEmptyTable":     "Tablo Boş",
						"oPaginate": {
							"sFirst":      "İlk",
							"sPrevious":   "Önceki",
							"sNext":       "Sonraki",
							"sLast":       "Son"
						},
						"oAria": {
							"sSortAscending":  ": Artan Sırala",
							"sSortDescending": ": Azalan Sırala"
						}
        			}
				} );
				$('#example tr').click( function() {
					$(this).toggleClass('row_selected');
				} );
			} );
		</script>
	</head>
	<body id="dt_example">
		<div id="container">
			<div id="demo">
            	<a href="form2.html">Yeni Kayıt</a><br><br>
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
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
                            if($veri = $db->query('SELECT * FROM ogrenci'))
                                {
                                //çoklu satır döndürme
                                    foreach($veri as $row) {
                                        echo "<tr class='gradeU'> 
                                                <td> $row[0] </td>
                                                <td> $row[1] </td> 
                                                <td> $row[2] </td> 
                                                <td> $row[3] </td>
                                                <td> $row[4] </td>
												<td> <a href='sil2.php?id=$row[0]'>Sil</a> <a href='duzenle2.php?id=$row[0]'>Düzenle</a> </td>
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
			</div>
		</div>
	</body>
</html>