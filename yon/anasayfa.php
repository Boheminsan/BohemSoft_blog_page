<link href="../css/flat-ui.css" rel="stylesheet">
<?php
include('ses_kontrol.php');

$kim = $_SESSION['kim'];

echo "Hoşgeldin : ".$kim." ";
?>
<center>
<div  style="background-color:#2980B9; color:white; width:450px; ">
<b><h4 class="lead"> Yönetici İşlemleri </h4></b> <p>

<a class="btn btn-block btn-lg btn-info" href="sifredeg.php" > Şifre Değiştir </a> <p><p> </br>	 	

<a href="yazilis.php" class="btn btn-block btn-lg btn-info"> Yazıları Düzenle </a> <p></br>

<a href="linklis.php" class="btn btn-block btn-lg btn-info"> Linkleri Düzenle </a> <p></br>

<a href="hakduz.php" class="btn btn-block btn-lg btn-info"> Hakkinda Düzenle </a> <p></br>

<a href="../index.php" class="btn btn-block btn-lg btn-info"> Çıkış </a> <p></br>

</div>


</center>

