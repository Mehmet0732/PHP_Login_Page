<!DOCTYPE html>
<html>
<head>
	<title>Ana Sayfa</title>
	<meta charset="utf-8">
</head>
<body style="text-align: center;">

<h1>Ana Sayfa</h1>
<p>Yapmak istediğiniz işleme tıklayınız.</p>
<a href=user.php>Kullanıcı Kayıt</a> 

 <br>
<a href=list.php>Verileri listele</a> 

 <br>
<a href=logout.php>Güvenli cikis</a> 

</body>
</html>

<?php
header("Refresh: 20; url=admin.php");

?>