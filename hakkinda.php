<html>
<head>

<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery_1.4.2.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="" />
        <meta name="keywords" content=""/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/Aller.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('ul.oe_menu div a',{hover: true});
			Cufon.replace('h1,h2,.oe_heading');
		</script>
		
	</head>
		<div id="ust">
<?php
include('menu2.php');
?>
</div>
<center>
<div id =orta>
</br>
</br>
		<div class="aa-orange" id="aa-widget-sky" style="float:right; width:258px; margin-left:80px; margin-right:200px;"><div class="aa-middle"><a class="aa-profile-pic" href="http://armut.com/HizmetVeren/batuhan-a-eskisehir-tepebasi-freelance-programci-yazilimci_20826"><img alt="Freelance Programcı / Yazılımcı" height="75" src="https://armut.com/Services/ResimGonder.aspx?Genislik=175&amp;Yukseklik=175&amp;Resim=~/ProfileLogo/ebcf9ccb-8032-496d-b7bd-4d73e2f122b3.jpg" width="75" /></a><h4><a href="http://armut.com/HizmetVeren/batuhan-a-eskisehir-tepebasi-freelance-programci-yazilimci_20826">Batuhan Aktaş - Armut</a></h4><p class="aa-byline"><a href="http://armut.com/HizmetVeren/batuhan-a-eskisehir-tepebasi-freelance-programci-yazilimci_20826">Freelance Programcı / Yazılımcı</a></p><p class="aa-description">Profesyonel bir yaklaşımla ve uygun fiyatlarla hizmet vermekteyim.</p><div class="aa-tagline"><a href="http://armut.com/HizmetVeren/batuhan-a-eskisehir-tepebasi-freelance-programci-yazilimci_20826">Detaylı bilgi için lütfen iletişime geçiniz.</a></div><a class="aa-btn" href="http://armut.com/HizmetVeren/batuhan-a-eskisehir-tepebasi-freelance-programci-yazilimci_20826">Fiyat Teklifi Al</a>
		<div class="aa"><a href="http://armut.com/">
		<img alt="armut.com" src="http://armut.com//images/armut-logo-master.png" /></a></div>
		</div>
		</div>
		<script type="text/javascript">(function(){var ss=document.createElement("link");ss.type="text/css";ss.rel="stylesheet";ss.href="http://armut.com/Css/single-widget.css";document.getElementsByTagName("head")[0].appendChild(ss);})();</script>    
	<div style="font-size:26px; color:white; width:640px; font:Calibri;">
	<?php 
	include('baglanti.php');
		$sorgu2 = mysql_query("select * from hakkinda");
		$satir2 = mysql_fetch_array($sorgu2);
		echo $satir2['hyazi'];
	?>
</br>
</br>
</div></div>
<div id="alt" style="float:center;">

<img src="img/paspas.png" style="margin-left:10px;float:bottom;">
<?php 
	include('yon/linkler.php');
	?>
	</div>
</center>