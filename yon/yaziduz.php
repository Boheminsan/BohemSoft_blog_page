<?php
include('ses_kontrol.php');

$kim = $_SESSION['kim'];

echo "Hoşgeldin : ".$kim." ";
?>
<center>
<b><u class="lead"> Yönetici İşlemleri </u></b> <p>

<a href="yazilis.php"> Geri Dön </a>
<p>

<?php

include('../baglanti.php');


if (isset($_POST['submit'])) {


$id = $_SESSION['id'];
$baslik = $_POST['baslik'];
$icerik = $_POST['icerik'];


$sql = "update yazilar set baslik = '$baslik', yazi = '$icerik' where id='$id'";
mysql_query($sql);

echo "<script language='JavaScript'>window.location.href='yazilis.php'</script>"; 

}
else {

$id = $_GET['id'];
$sorgu = mysql_query("select * from yazilar where id=$id");
$satir = mysql_fetch_array($sorgu);

?>

<form id="form" method="POST" action="yaziduz.php">
Başlık :  <textarea rows="1" cols="20" name="baslik"><?php echo $satir['baslik'];  ?></textarea> <p>
Yazı : <p> <textarea rows="10" cols="50" name="icerik"><?php echo $satir['yazi'];  ?></textarea> <p> 
<input type="hidden" name="id" value="<?php echo $id;  ?>"><p>

<input type="submit"  value="Sayfayı Düzenle" name="submit"> 

</form>


<?php
}





?>


</center>

