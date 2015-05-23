<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
<?php
include('../baglanti.php');

	
	if (isset($_POST['submit'])) {

$baslik = $_POST['baslik'];
$link1 = $_POST['link'];


$sql = "update weblinkler set baslik = '$baslik', link = '$link' where id='$id'";
mysql_query($sql);

echo "<script language='JavaScript'>window.location.href='linklis.php'</script>"; 

}
else {

$id = $_GET['id'];
$sorgu = mysql_query("select * from weblinkler where id=$id");
$satir = mysql_fetch_array($sorgu);
}
?>
<center>
<div   style ="margin:350 auto; width:550px; height:200px; background-color:yellow";>
	</br>
	</br>
	<form id="form" method="POST" action="sayfaduz.php">

 Başlık :  <textarea rows="1" cols="20" name="baslik"><?php echo $satir['adi'];  ?></textarea> <p>
Link : <textarea rows="1" cols="50" name="link"><?php echo $satir['link'];  ?></textarea> <p> 


<input type="submit"  value="Linki Düzenle" class="btn" name="submit"> </input>
<div>
</form>
</center>