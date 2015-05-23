<link href="../css/flat-ui.css" rel="stylesheet">
                                         

<center>

<p>

<?php

include('../baglanti.php');

$id = $_GET['id'];

$sorgu2 = mysql_query("delete from yazilar where id='$id'");

echo "<script language='JavaScript'>window.location.href=anasayfa.php'</script>"; 

<a href="yazilis.php"> Geri Dön </a>

?>


</center>

