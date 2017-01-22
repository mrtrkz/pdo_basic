-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 10 Nis 2014, 19:52:25
-- Sunucu sürümü: 5.6.12-log
-- PHP Sürümü: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE IF NOT EXISTS `ogrenci` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numara` int(10) unsigned DEFAULT NULL,
  `adi_soyadi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sinif` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `alan` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`id`, `numara`, `adi_soyadi`, `sinif`, `alan`) VALUES
(1, 100, 'ali', '11/e', 'biliÅŸim'),
(3, 121, 'mahmut', '12-e', 'yok'),
(4, 111, 'ayÅŸe', '11-q', 'biliÅŸim'),
(5, 147, 'fatma', '11-d', 'biliÅŸim'),
(6, 123, 'murat', '12-e', 'biliÅŸim'),
(8, 158, 'mahmure', '11-a', 'giyim'),
(9, 145, 'azize', '11-a', 'giyim'),
(10, 18, 'mahide', '11-b', 'Ã§ocuk'),
(11, 14, 'afife', '11-b', 'Ã§ocuk'),
(12, 17, 'dÃ¼rdane', '11-g', 'Ã§ocuk'),
(13, 19, 'hayriye', '11-f', 'giyim'),
(14, 179, 'derya', '11-d', 'biliÅŸim'),
(15, 191, 'hasan', '11-c', 'biliÅŸim'),
(16, 83, 'tenzile', '12-w', 'gÄ±da'),
(17, 156, 'murat', '12-k', 'biliÅŸim');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
