<?php
include('baglanti.php');
$sql="select * from menu";
$sorgu = mysql_query($sql);
echo '<div >'	;	
echo		'<ul id="oe_menu" class="oe_menu">';
			
			$say = mysql_num_rows($sorgu);


if ($say>0)
{
$b=1;
	while($satir = mysql_fetch_array($sorgu)) {
//echo $satir['html'];
$sorgu2 = mysql_query("select URL from menu where sayID=$b" );
$satir2 = mysql_fetch_array($sorgu2);
$sorgu3= mysql_query("select baslik from menu where sayID=$b" );
$satir3 = mysql_fetch_array($sorgu3);

echo '<li><a href="';
echo$satir2['URL'];
echo '">';
echo$satir3['baslik'];

echo '</a></li>';
$b++;
}
}			
echo '</div>';						