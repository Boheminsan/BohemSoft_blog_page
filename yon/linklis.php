<?php
include('ses_kontrol.php');

$kim = $_SESSION['kim'];

echo "Hoşgeldin : ".$kim." ";
include('../baglanti.php');
$sorgu = mysql_query("select * from weblinkler order by id asc");
$say = mysql_num_rows($sorgu);
?><center>
<table border=5>

<tr>
<td  max-width=50> Başlık </td>
<td  max-width=100> Link </td>
</tr>
<?php
if ($say>0){
	while($satir = mysql_fetch_array($sorgu)) 
	{
		$id = $satir['id'];
		$sorgu2 = mysql_query("select * from weblinkler where id='$id'");
		$satir2 = mysql_fetch_array($sorgu2);
		$say_oy = mysql_num_rows($sorgu2);
echo "<center>";
	echo "<tr>";
	echo "<tr>";
		echo "<td>".$satir['adi']."</td>";
		echo "<td>".$satir['link']."</td>";
		echo "<td><a href='linkduz.php?id=".$id."'><img src=img/duzenle.png width=64 height=64></td>";
		echo "<td><a href='linksil.php'><img src=img/sil.png width=64 height=64></td>";
			echo "</center>";
		}
		}
?>



</table>

<a href="linkekle.php"><img src="img/ekle.png" width=64 height=64></a></center>