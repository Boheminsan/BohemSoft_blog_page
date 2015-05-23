<?php
include('ses_kontrol.php');

$kim = $_SESSION['kim'];

echo "Hoşgeldin : ".$kim." ";
?>
<center>

<p>

<?php

include('../baglanti.php');

$id = $_GET['id'];

$sorgu2 = mysql_query("delete from weblinkler where id='$id'");

echo "<script language='JavaScript'>window.location.href=linklis.php'</script>"; 


?>


</center>

