<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<?php
include('baglanti.php');
$sorgu = mysql_query("select * from weblinkler order by id asc");
$say = mysql_num_rows($sorgu);
echo '<div id="hakkinda">';
if ($say>0){
	while($satir = mysql_fetch_array($sorgu)) 
	{
	
		$id = $satir['id'];
		$sorgu2 = mysql_query("select * from weblinkler where id='$id'");
		$satir2 = mysql_fetch_array($sorgu2);
		$say_oy = mysql_num_rows($sorgu2);
		
	
	echo '   <a class="btn" href="'.$satir['link'].'" target="_blank">'.$satir['adi'].'</a>';
}
}
echo '</div>';