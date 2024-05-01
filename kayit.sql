-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 29 Nis 2024, 15:14:21
-- Sunucu sürümü: 10.10.2-MariaDB
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kayit`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bedentablosu`
--

DROP TABLE IF EXISTS `bedentablosu`;
CREATE TABLE IF NOT EXISTS `bedentablosu` (
  `bedenID` int(2) NOT NULL AUTO_INCREMENT,
  `Beden` varchar(10) NOT NULL,
  PRIMARY KEY (`bedenID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `bedentablosu`
--

INSERT INTO `bedentablosu` (`bedenID`, `Beden`) VALUES
(1, 'XXS'),
(2, 'XS'),
(3, 'S'),
(4, 'M'),
(5, 'L'),
(6, 'XL'),
(7, 'XXL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favoriler`
--

DROP TABLE IF EXISTS `favoriler`;
CREATE TABLE IF NOT EXISTS `favoriler` (
  `email` varchar(120) NOT NULL,
  `urunid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `kategoriID` int(11) NOT NULL AUTO_INCREMENT,
  `kategoriAdi` varchar(70) NOT NULL,
  PRIMARY KEY (`kategoriID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategoriID`, `kategoriAdi`) VALUES
(1, 'T-Shirt'),
(2, 'Pantolon'),
(3, 'Gömlek'),
(4, 'Elbise'),
(5, 'Etek'),
(6, 'SweatShirt');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit`
--

DROP TABLE IF EXISTS `kayit`;
CREATE TABLE IF NOT EXISTS `kayit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `kayit`
--

INSERT INTO `kayit` (`id`, `adsoyad`, `email`, `phone`, `password`) VALUES
(1, 'Mehmet Kavuk', 'mehmetkvk212@gmail.com', '12345678912', 'Deneme21.3'),

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `renktablosu`
--

DROP TABLE IF EXISTS `renktablosu`;
CREATE TABLE IF NOT EXISTS `renktablosu` (
  `renkid` int(3) NOT NULL AUTO_INCREMENT,
  `renkadi` varchar(35) NOT NULL,
  PRIMARY KEY (`renkid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `renktablosu`
--

INSERT INTO `renktablosu` (`renkid`, `renkadi`) VALUES
(1, 'Kırmızı'),
(2, 'Mavi'),
(3, 'Yeşil'),
(4, 'Siyah'),
(5, 'Gri'),
(6, 'Lacivert');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisdetay`
--

DROP TABLE IF EXISTS `siparisdetay`;
CREATE TABLE IF NOT EXISTS `siparisdetay` (
  `sdetayID` int(11) NOT NULL AUTO_INCREMENT,
  `siparisID` int(11) NOT NULL,
  `urunID` int(11) NOT NULL,
  `adet` int(2) NOT NULL,
  `birimfiyat` decimal(5,2) NOT NULL,
  `aratoplam` decimal(5,2) NOT NULL,
  PRIMARY KEY (`sdetayID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

DROP TABLE IF EXISTS `siparisler`;
CREATE TABLE IF NOT EXISTS `siparisler` (
  `siparisID` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `siparistarihi` date NOT NULL,
  `toplamtutar` decimal(5,2) NOT NULL,
  `Adres` text NOT NULL,
  PRIMARY KEY (`siparisID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

DROP TABLE IF EXISTS `urun`;
CREATE TABLE IF NOT EXISTS `urun` (
  `urunid` int(11) NOT NULL AUTO_INCREMENT,
  `urunadi` text NOT NULL,
  `fiyati` decimal(5,2) NOT NULL,
  `urunurl` varchar(150) NOT NULL,
  `kategoriID` int(11) NOT NULL,
  `urunaciklama` text NOT NULL,
  PRIMARY KEY (`urunid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urunid`, `urunadi`, `fiyati`, `urunurl`, `kategoriID`, `urunaciklama`) VALUES
(1, 'AC&Co / Altınyıldız Classics Erkek Lacivert %100 Pamuk Slim Fit Dar Kesim Bisiklet Yaka Kısa Kollu Tişört', '449.49', 'urunid1', 1, '<ul>\r\n<li>Bu ürün MAGAZA ADI tarafından gönderilecektir.</li>\r\n\r\n<li>Kampanya fiyatından satılmak üzere 100 adetten fazla stok sunulmuştur.</li>\r\n\r\n<li>İncelemiş olduğunuz ürünün satış fiyatını satıcı belirlemektedir.</li>\r\n\r\n<li>Bir ürün, birden fazla satıcı tarafından satılabilir. Birden fazla satıcı tarafından satışa sunulan ürünlerin satıcıları ürün için belirledikleri fiyata, satıcı puanlarına, teslimat statülerine, ürünlerdeki promosyonlara, kargonun bedava olup olmamasına ve ürünlerin hızlı teslimat ile teslim edilip edilememesine, ürünlerin stok ve kategorileri bilgilerine göre sıralanmaktadır.</li>\r\n\r\n<li>Bu üründen en fazla 10 adet sipariş verilebilir. 10 adedin üzerindeki siparişleri Trendyol iptal etme hakkını saklı tutar. Belirlenen bu limit kurumsal siparişlerde geçerli olmayıp, kurumsal siparişler için farklı limitler belirlenebilmektedir.</li>\r\n</ul>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
