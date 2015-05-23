<link href="../css/flat-ui.css" rel="stylesheet">
<?php

?>
<center>

<p>

<div id="duzenle" max-width="150px">
<table border=5>
<tr class="lead">
<td> Sıra </td>
<td> Başlık </td>
<td> İçerik </td>
<td> Düzenle </td>
<td> Sil </td>
</tr>
</div>
</center>

<?php

include('../baglanti.php');

$sorgu = mysql_query("select * from yazilar order by id asc");
$say = mysql_num_rows($sorgu);

if ($say>0){
	while($satir = mysql_fetch_array($sorgu)) {
	
		$_SESSION['id'] = $satir['id'];
		$id=$_SESSION['id'];
		$sorgu2 = mysql_query("select * from yazilar where id='$id'");
		$satir2 = mysql_fetch_array($sorgu2);
		$say_oy = mysql_num_rows($sorgu2);
		
	


	echo "<center>";
	echo "<tr>";
	echo "<tr>";
		echo "<td>".$satir['id']."</td>";
		echo "<td>".$satir['baslik']."</td>";
		echo "<td style max-width=150>".$satir['yazi']."</td>";
		echo "<td><a href='yaziduz.php?id=".$id."'><img src=img/duzenle.png width=64 height=64></td>";
		echo "<td><a href='yazisil.php?id=".$id."'><img src=img/sil.png width=64 height=64></td>";
		echo "</tr>";
		echo "</center>";

	}

}


?>


</table>

<a href="yaziekle.php"><img src="img/ekle.png" width=64 height=64></a>

<a href="anasayfa.php"> Panel Ana Sayfa </a>


</center>

