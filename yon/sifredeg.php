<link href="../css/flat-ui.css" rel="stylesheet"><?phpinclude('ses_kontrol.php');$kim = $_SESSION['kim'];echo "Hoşgeldin : ".$kim." ";?><center><b class="lead"><u> Şifre Değiştirme </u></b> <p><?phpinclude('../baglanti.php');if (isset($_POST['submit'])){$adi = $_POST['adi'];$soyadi = $_POST['soyadi'];$s1 = $_POST['k_sifre'];	$s2 = sha1(md5(sha1($s1)));$sql = "update uyelik set ad='$adi', soyad='$soyadi', ksif='$s2' where kadi='$kim'";$sonuc = mysql_query($sql);//echo "<script language='JavaScript'>window.location.href='index.php'</script>"; }else {	$sql2="select * from uyelik where kadi='$kim'";	$sorgu = mysql_query($sql2);	$satir = mysql_fetch_array($sorgu);	$adi = $satir['ad'];	$soyadi = $satir['soyad'];		//$k_adi = $satir['kadi'];	$s1 = $satir['ksif'];	$s2 = sha1(md5(sha1($s1)));		?>	<div  style="background-color:#3498DB; width:600px;	">	<form method="POST" action="sifredeg.php">Adı : 	<input type="text"  class="form-control" name="adi" size="21" value="<?php echo $adi; ?>"> <p>Soyadı: <input type="text"  class="form-control" name="soyadi" size="21" value="<?php echo $soyadi; ?>"> <p>Yeni Şifreyi Giriniz : <input type="text"  class="form-control" name="k_sifre" size="21" value=""> <p><input type="submit" class="btn btn-block btn-lg btn-warning" value="Bilgileri Güncelle" name="submit"> </div><?php?></form><?php}?><P><a href="anasayfa.php" class = "btn btn-block btn-lg btn-success"> Yönetim Ana Sayfası </a> <p></center>