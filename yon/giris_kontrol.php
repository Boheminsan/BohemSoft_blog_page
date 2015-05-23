<?php 
session_start();

include('../baglanti.php');

$u = $_POST['kullanici'];
$s = $_POST['sifre'];

if (!isset($u) OR !isset($s) ){
	echo "<script language='JavaScript'>window.location.href='hata.php'</script>"; 
	 }
else{
	
	$sorgu = mysql_query("select * from uyelik where kadi='$u'");
	$satir = mysql_fetch_array($sorgu);
	
	$s2 = $satir['ksif'];	
	$s1 = sha1(md5(sha1($s)));
	
	if ( $s1 != $s2 ){
		echo "<center><img src='img/hata.png' width='128' height='128'> <br>";
		echo "<font color='red'>Lütfen Bilgilerinizi Kontrol Ediniz</font></center>";
		}
	else {
	$_SESSION['kim'] = $u;
	echo "<script language='JavaScript'>window.location.href='anasayfa.php'</script>";
	}
	
	

}


?>