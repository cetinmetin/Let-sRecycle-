-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Ara 2019, 10:22:20
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `recycle`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `atikturu`
--

CREATE TABLE `atikturu` (
  `atikTuruID` int(11) NOT NULL,
  `atikAd` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `atikturu`
--

INSERT INTO `atikturu` (`atikTuruID`, `atikAd`) VALUES
(1, 'Karışık'),
(2, 'Kağıt'),
(3, 'Naylon'),
(4, 'Plastik'),
(5, 'Pet'),
(6, 'Metal'),
(7, 'Cam');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilce`
--

CREATE TABLE `ilce` (
  `ilceID` int(11) NOT NULL,
  `ilceAd` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilce`
--

INSERT INTO `ilce` (`ilceID`, `ilceAd`) VALUES
(1, 'Aliağa'),
(2, 'Balçova'),
(3, 'Bayraklı'),
(4, 'Bayındır'),
(5, 'Bergama'),
(6, 'Beydağ'),
(7, 'Bornova'),
(8, 'Buca'),
(9, 'Dikili'),
(10, 'Foça'),
(11, 'Gaziemir'),
(12, 'Güzelbahçe'),
(13, 'Karabağlar'),
(14, 'Karaburun'),
(15, 'Karşıyaka'),
(16, 'Kemalpaşa'),
(17, 'Kiraz'),
(18, 'Konak'),
(19, 'Kınık'),
(20, 'Menderes'),
(21, 'Menemen'),
(22, 'Narlıdere'),
(23, 'Seferihisar'),
(24, 'Selçuk'),
(25, 'Tire'),
(26, 'Torbalı'),
(27, 'Urla'),
(28, 'Çeşme'),
(29, 'Çiğli'),
(30, 'Ödemiş');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullaniciID` int(11) NOT NULL,
  `kullaniciAd` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciSifre` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciIsim` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciSoyad` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciEmail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciTelefon` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciDurum` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullaniciID`, `kullaniciAd`, `kullaniciSifre`, `kullaniciIsim`, `kullaniciSoyad`, `kullaniciEmail`, `kullaniciTelefon`, `kullaniciDurum`) VALUES
(1, 'bthncm', '96f0f08c0188ba04898ce8cc465c19c4', 'Batuhan', 'ÇAM', 'bthncm@gmail.com', '05538440277', 0),
(2, 'mtnctn', '96f0f08c0188ba04898ce8cc465c19c4', 'Metin', 'Çetin', 'demonhard1938@gmail.com', '05549989204', 0),
(3, 'mhmtck', '96f0f08c0188ba04898ce8cc465c19c4', 'Mehmetçik', 'Karaduman', 'mehmetcik@gmail.com', '05565487988', 0),
(4, 'mhmtckasd', '96f0f08c0188ba04898ce8cc465c19c4', 'asdqwef', 'Karadumanasdqw', 'mehmetcik@gmail.com', '05565487988', 1),
(5, 'mhmtckasds', '96f0f08c0188ba04898ce8cc465c19c4', 'asdqwefs', 'Karadumanasdqw', 'mehmetcik@gmail.coms', '05565487988', 1),
(6, 'batuhancam', '96f0f08c0188ba04898ce8cc465c19c4', 'asdqwe', 'Çetin', 'asd@as.com', '1234567891', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `talep`
--

CREATE TABLE `talep` (
  `talepID` int(11) NOT NULL,
  `talepAd` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `talepSoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `talepEmail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `talepTelefon` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `talepMesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `ilceID` int(11) NOT NULL,
  `atikTuruID` int(11) NOT NULL,
  `talepMiktar` double NOT NULL,
  `talepDurum` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `talep`
--

INSERT INTO `talep` (`talepID`, `talepAd`, `talepSoyad`, `talepEmail`, `talepTelefon`, `talepMesaj`, `ilceID`, `atikTuruID`, `talepMiktar`, `talepDurum`) VALUES
(1, 'Batuhan', 'ÇAM', 'bthncm@gmail.com', '05538440277', 'elimde geri dönüştürülebilecek bir kaç malzeme var.', 13, 1, 2, 0),
(3, 'Metin', 'Çetin', 'demonhard@gmail.com', '5555555555', 'jadfhksdllgowjeohugowsdfwedvwjeoklfpweopfuwejokdflciwefb', 8, 4, 1, 0),
(9, 'yeni', 'aosjdlk', 'asdjlkadf@aslkd.com', '29876', 'akjıdoughj', 6, 4, 2, 0);

-- --------------------------------------------------------

--
-- Görünüm yapısı durumu `talepview`
-- (Asıl görünüm için aşağıya bakın)
--
CREATE TABLE `talepview` (
`talepID` int(11)
,`talepAd` varchar(50)
,`talepSoyad` varchar(50)
,`talepEmail` varchar(100)
,`talepTelefon` varchar(11)
,`talepMesaj` text
,`atikAd` varchar(15)
,`ilceAd` varchar(30)
,`talepMiktar` double
,`talepDurum` tinyint(1)
);

-- --------------------------------------------------------

--
-- Görünüm yapısı `talepview`
--
DROP TABLE IF EXISTS `talepview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `talepview`  AS  select `t`.`talepID` AS `talepID`,`t`.`talepAd` AS `talepAd`,`t`.`talepSoyad` AS `talepSoyad`,`t`.`talepEmail` AS `talepEmail`,`t`.`talepTelefon` AS `talepTelefon`,`t`.`talepMesaj` AS `talepMesaj`,`a`.`atikAd` AS `atikAd`,`i`.`ilceAd` AS `ilceAd`,`t`.`talepMiktar` AS `talepMiktar`,`t`.`talepDurum` AS `talepDurum` from ((`talep` `t` join `atikturu` `a` on((`a`.`atikTuruID` = `t`.`atikTuruID`))) join `ilce` `i` on((`i`.`ilceID` = `t`.`ilceID`))) ;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `atikturu`
--
ALTER TABLE `atikturu`
  ADD PRIMARY KEY (`atikTuruID`);

--
-- Tablo için indeksler `ilce`
--
ALTER TABLE `ilce`
  ADD PRIMARY KEY (`ilceID`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullaniciID`);

--
-- Tablo için indeksler `talep`
--
ALTER TABLE `talep`
  ADD PRIMARY KEY (`talepID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `atikturu`
--
ALTER TABLE `atikturu`
  MODIFY `atikTuruID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `ilce`
--
ALTER TABLE `ilce`
  MODIFY `ilceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullaniciID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `talep`
--
ALTER TABLE `talep`
  MODIFY `talepID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
