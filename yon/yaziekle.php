<center>
<b><u class="lead">Yeni Yazı Oluştur</u></b> <p>
<?php

include('../baglanti.php');
		
if (isset($_POST['submit']))
{
$baslik= $_POST['baslik'];
$yazi= $_POST['yazi'];

$sql = "Insert into yazilar (baslik, yazi) values ('$baslik', '$yazi')";
mysql_query($sql);
}
else {
?>
<form id="form"  method="POST" action="yaziekle.php">
Başlık:</br>
<input type="text" class="form-control" name="baslik" size="21"><p>
<textarea rows="10" cols="50" name="yazi">
</textarea>
</br>
</br><input type="submit" class="btn btn-block btn-lg btn-success" value="Ekle" name="submit">
</form>
<?php
}?>
<a href="anasayfa.php" class="btn btn-block btn-lg btn-inverse"> Yönetim Ana Sayfası </a> <p>

</center>