<?php
$sunucu="localhost";
$kullanici="root";
$sifre="";
$bohemvt="bohemvt";
if (@mysql_connect($sunucu,$kullanici,$sifre)==false){
$mesaj="<b>Hata</b>: Bağlantı başarısız!<br>";
$mesaj.="<b>Hata açıklaması</b>: ".mysql_error();
die($mesaj);
}

if (@mysql_select_db($bohemvt)==false){
$mesaj="<b>Hata</b>: $bohemvt veritabanı seçilemedi!<br>";
$mesaj.="<b>Hata açıklaması</b>: ".mysql_error();
die($mesaj);
}
mysql_query("set names utf8");
?>