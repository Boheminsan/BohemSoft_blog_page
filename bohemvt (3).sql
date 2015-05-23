-- phpMyAdmin SQL Dump
-- version 3.4.3.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 May 2015, 01:11:07
-- Sunucu sürümü: 5.5.15
-- PHP Sürümü: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `bohemvt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aicerik`
--

CREATE TABLE IF NOT EXISTS `aicerik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icerik` text COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `aicerik`
--

INSERT INTO `aicerik` (`id`, `icerik`) VALUES
(1, '<div style="width:400px;float:left;"><a class="twitter-timeline" href="https://twitter.com/boheminsan" data-widget-id="544878273348775936">@boheminsan tarafından gönderilen tweetler</a>\r\n<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>\r\n</div>'),
(2, '<iframe width="854" height="510" src="//www.youtube.com/embed/MQ2cSZuojdk" frameborder="0" allowfullscreen></iframe>'),
(3, '		<div class="aa-orange" id="aa-widget-sky" style="float:right; width:258px; margin-left:80px; margin-right:50px;"><div class="aa-middle"><a class="aa-profile-pic" href="http://armut.com/HizmetVeren/batuhan-a-eskisehir-tepebasi-freelance-programci-yazilimci_20826"><img alt="Freelance Programcı / Yazılımcı" height="75" src="https://armut.com/Services/ResimGonder.aspx?Genislik=175&amp;Yukseklik=175&amp;Resim=~/ProfileLogo/ebcf9ccb-8032-496d-b7bd-4d73e2f122b3.jpg" width="75" /></a><h4><a href="http://armut.com/HizmetVeren/batuhan-a-eskisehir-tepebasi-freelance-programci-yazilimci_20826">Batuhan Aktaş - Armut</a></h4><p class="aa-byline"><a href="http://armut.com/HizmetVeren/batuhan-a-eskisehir-tepebasi-freelance-programci-yazilimci_20826">Freelance Programcı / Yazılımcı</a></p><p class="aa-description">Profesyonel bir yaklaşımla ve uygun fiyatlarla hizmet vermekteyim.</p><div class="aa-tagline"><a href="http://armut.com/HizmetVeren/batuhan-a-eskisehir-tepebasi-freelance-programci-yazilimci_20826">Detaylı bilgi için lütfen iletişime geçiniz.</a></div><a class="aa-btn" href="http://armut.com/HizmetVeren/batuhan-a-eskisehir-tepebasi-freelance-programci-yazilimci_20826">Fiyat Teklifi Al</a>\r\n		<div class="aa"><a href="http://armut.com/">\r\n		<img alt="armut.com" src="http://armut.com//images/armut-logo-master.png" /></a></div>\r\n		</div>\r\n		</div>\r\n		<script type="text/javascript">(function(){var ss=document.createElement("link");ss.type="text/css";ss.rel="stylesheet";ss.href="http://armut.com/Css/single-widget.css";document.getElementsByTagName("head")[0].appendChild(ss);})();</script> ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkinda`
--

CREATE TABLE IF NOT EXISTS `hakkinda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yazi` text COLLATE utf32_turkish_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `hakkinda`
--

INSERT INTO `hakkinda` (`id`, `yazi`) VALUES
(1, 'Batuhan Aktaş, 1993 yılında Ankara''da doğdu. İlk ve orta öğrenimini Ankara''da tamamladı. Bilgisayarla 2003 yılında tanıştı. Yazılımla ise 2011 yılında ilgilenmeye başladı. 2013 yılında BohemSoft Yazılım Atölyesi Projesini Hayata geçirdi. Halen Eskişehir Osmangazi Üniversitesi Matematik-Bilgisayar bölümünde öğrenimine devam etmektedir. En büyük hedefi bir işletim sistemi yazmaktır. Bu amaç için çalışmalarına devam etmektedir. \r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `sayID` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(20) COLLATE utf32_turkish_ci NOT NULL,
  `URL` tinytext COLLATE utf32_turkish_ci,
  PRIMARY KEY (`sayID`),
  KEY `sayID` (`sayID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci AUTO_INCREMENT=82 ;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`sayID`, `baslik`, `URL`) VALUES
(1, 'ANASAYFA', 'index.php'),
(2, 'HAKKINDA', 'hakkinda.php'),
(3, 'GİRİŞ', 'yon/giris.php'),
(4, 'BLOG', 'http://batuhanaktas.blogspot.com'),
(5, 'Yazılar', 'yazi.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyelik`
--

CREATE TABLE IF NOT EXISTS `uyelik` (
  `ad` varchar(20) COLLATE utf32_turkish_ci NOT NULL,
  `soyad` varchar(20) COLLATE utf32_turkish_ci NOT NULL,
  `kadi` varchar(12) COLLATE utf32_turkish_ci NOT NULL,
  `ksif` tinytext COLLATE utf32_turkish_ci NOT NULL,
  `yetki` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `uyelik`
--

INSERT INTO `uyelik` (`ad`, `soyad`, `kadi`, `ksif`, `yetki`, `id`) VALUES
('Batuhan', 'Aktaş', 'root', '051d21b4d1e8dfa43b762aeabeff1e6e6dc8736f', 2, 1),
('Bohemian', 'Underground', 'admin', 'f6a51c155d95861c35febb700cb661b34f4a85b5', 2, 2),
('Kurtarma', 'Hesab?', 'kurtar', 'b37804e3232548236ab8deeb0117f9fe46499ae2', 1, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `weblinkler`
--

CREATE TABLE IF NOT EXISTS `weblinkler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(30) COLLATE utf32_turkish_ci NOT NULL,
  `link` tinytext COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `weblinkler`
--

INSERT INTO `weblinkler` (`id`, `adi`, `link`) VALUES
(1, 'F - İşletim Sistemi', 'https://www.facebook.com/bohemsoft'),
(2, 'F - Batuhan Aktaş', 'https://www.facebook.com/bohhy'),
(3, 'T - Boheminsan', 'http://www.twitter.com/boheminsan'),
(4, 'G+', 'https://plus.google.com/u/0/114132536565777985713'),
(5, 'Geleceği Yazanlar', 'https://gelecegiyazanlar.turkcell.com.tr/user/6941'),
(6, 'Açık Akademi', 'http://www.acikakademi.com/acikakademi/eep/ASPX/Social2/persona');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE IF NOT EXISTS `yazilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` text COLLATE utf32_turkish_ci,
  `yazi` text COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci AUTO_INCREMENT=69 ;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`id`, `baslik`, `yazi`) VALUES
(1, 'Deneme', ''),
(2, 'Upload Sitesi Değişikliği', 'Merhaba.\nBuradaki yazımda ve şuradaki paylaşımımdaki isyanımdan sonra kyknın açabildiği bir upload sitesi araştırmaya başladım. Hem kolay upload yapabileceğim, hem de engelsiz bir site aradım.\nBu upload sitesine yükledim. Tinypic engellenene kadar buradayım.\nPasteboard''daki resim bağlantılarını blogspot kabul etmedi. Ben de direkt blogun kendisine upload ettim.\nAma KYK bloggerdaki resimlerimi de engelledi. (Program ön izlemeleri müstehcen gelmiş olmalı.)\nArtık internet konusunda ciddi sorunları olan bir yurtla karşı karşıyayız.\nÜlkemin geleceği konusunda ciddi endişelerimin olduğu şu günlerde, bir de böyle sıkıntılar insanı gerçekten çileden çıkarıyor.\nYazılımla kalın.'),
(3, 'Servian', 'Bu yazımda sizlere bir ihtiyaç ürünü olan Servian projemden bahsedeceğim.\r\nWindows''ta bazı uygulamalar kendi "hizmet"leri ile birlikte geliyor.\r\nHer hizmete her zaman ihtiyaç duymadığımdan bazılarını hizmetlerden kapatıp elle çalıştırmayı tercih ediyorum.\r\nProgramı kullanmak istediğimde bu hizmet kapalı olduğundan program bu hizmeti açmamı istiyor haklı olarak.\r\nWin8''de görev yöneticisinin içindeki hizmetler sekmesinden aranan hizmeti bulup çalıştırıyorum. Fakat her seferinde aynı yolu takip etmeye üşendim.\r\nBunun için bir .bat dosyası oluşturup içine net start hizmet adı yazıp kaydettim.\r\nBu sorunumu çözdü, fakat bat dosyası yalnızca tek bir servis için işe yarıyor.\r\nBat dosyasının içine birden fazla hizmet yazarsam, bu kez de çalışmasını istemediğim hizmetler de çalışacak.\r\nLafı uzattım kusura bakmayın. Blog yazmayalı epey olmuş.\r\nBütün bunlara çözüm olarak bir C# projesi hazırladım.\r\nYazılımım, aşağıdaki işlevlere sahip.\r\n-Windows hizmetlerinin adlarını, açıklamalarını ve çalışma durumunu listeliyor.\r\n-Seçtiğiniz bir hizmeti durdurup - çalıştırabiliyor.\r\n(Hepsinde başarılı olamadım. Bazı hizmetler çalıştırılıp durdurulamıyorlar.)\r\n-Hizmetleri aşağı ine ine aramamanız için arama kutucuğu var.\r\nAlgoritmasını oldukça basit tutmaya çalıştım.\r\nDLL ile yazdığım ilk projem.\r\n\r\nYazılımın kaynak kodlarına <a href= "https://github.com/BohemSoft/Servian/tree/715f085fda3a2f17332b3cf545d8991247ef931f"> buradan </a>\r\n, yazılıma ise <a href = "https://mega.co.nz/#!dJMDEZhB!btPTx69dYD2GMx0ANtdOLsFnSDfmBJFW3tCqkqNW6GI"> buradan </a> erişebilirsiniz.'),
(4, 'Twnloader', 'Merhaba.\r\nUzunca bir süredir yazılım projelerimi askıya almıştım.\r\nVizeler ve finaller derken dönem içinde ufak tefek bir servis yöneticiyi ancak yapabilmiştim. (Bkz. Servian)\r\nŞimdi sömestr tatili ile gelen zaman bolluğunu değerlendirmek istedim.\r\nBu aralar üzerinde çalıştığım bir yazılım projesi var.\r\nHenüz son aşamaya gelmediği için bloguma koyamadım.\r\nAma en kısa zamanda sizlerle paylaşıcam.\r\nHatta bu projeyi yaparken oldukça araştırma yapıp benle ilgisi olmayan pek çok projeden derlediğim bilgilerle uğraştığımdan bu projeyi adım adım anlatmayı düşünüyorum.\r\nHem kendime bir uyarı hem de sizlere bir bilgi olsun istedim.\r\nYazılımla kalın.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
