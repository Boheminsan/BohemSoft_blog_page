<?php
$sunucu="localhost";
$kullanici="root";
$sifre="";
$bohemvt="bohemvt";
if (@mysql_connect($sunucu,$kullanici,$sifre)==false){
$mesaj="<b>Hata</b>: Ba�lant� ba�ar�s�z!<br>";
$mesaj.="<b>Hata a��klamas�</b>: ".mysql_error();
die($mesaj);
}

if (@mysql_select_db($bohemvt)==false){
$mesaj="<b>Hata</b>: $bohemvt veritaban� se�ilemedi!<br>";
$mesaj.="<b>Hata a��klamas�</b>: ".mysql_error();
die($mesaj);
}
mysql_query("set names utf8");
?>