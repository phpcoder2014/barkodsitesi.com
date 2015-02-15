-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Ağu 2014, 16:20:09
-- Sunucu sürümü: 5.6.16
-- PHP Sürümü: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `barkod_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sizden_gelen`
--

CREATE TABLE IF NOT EXISTS `sizden_gelen` (
  `siz_id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `spot` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `yazan` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `zaman` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`siz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `sizden_gelen`
--

INSERT INTO `sizden_gelen` (`siz_id`, `baslik`, `spot`, `yazan`, `zaman`) VALUES
(1, 'ANNUAL ALUMNI GAME', 'Fusce condimentum pulvinar mattis. Nunc condimentum sapien sit amet odio vulputate, nec suscipit orci pharetra...', '', '25.06.2014 16:10'),
(2, 'SCHOOL TALENTS GATHERING', 'Pellentesque lobortis, arcu eget condimentum auctor, magna neque faucibus dui, ut varius diam neque sed diam... ', '', '24.08.2014 10:21'),
(3, 'CAMPUS "OPEN DOORS"', 'Donec fringilla lacinia laoreet. Vestibulum ultrices blandit tempor. Aenean magna elit, varius eget quam a, posuere...', '', '24.08.2014 12:21'),
(4, 'SCHOOL TALENTS GATHERING', 'Pellentesque lobortis, arcu eget condimentum auctor, magna neque faucibus dui, ut varius diam neque sed diam... ', '', '18.08.2014 13:05'),
(5, 'CAMPUS "OPEN DOORS"', 'Donec fringilla lacinia laoreet. Vestibulum ultrices blandit tempor. Aenean magna elit, varius eget quam a, posuere...', '', '13.02.2014 18:25'),
(6, 'BAŞLIK', 'YAZAN', 'KISA AÇIK', '23.08.2014 18:08'),
(7, 'başlık', 'yazan', 'kısa', '23.08.2014 18:11'),
(8, 'DENEME BAŞLIK', 'YAZAN', 'KISA', '23.08.2014 18:11'),
(9, 'yei başlık', 'yazan', 'kısa', '23.08.2014 18:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_hakkimiz`
--

CREATE TABLE IF NOT EXISTS `tbl_hakkimiz` (
  `hak_id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `detay` longtext COLLATE utf8_turkish_ci NOT NULL,
  `yazan` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `zaman` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`hak_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `tbl_hakkimiz`
--

INSERT INTO `tbl_hakkimiz` (`hak_id`, `baslik`, `detay`, `yazan`, `zaman`) VALUES
(1, 'Bizi yakından tanıyın', 'Merhaba\r\n\r\nPatent Tescil Ofisi, 2001 yılından günümüze sınai ve fikri mülkiyet alanında edindiği tecrübeler ve deneyimleri ,ticari hayata var olan ve toplumun gelişmesine ve var olmasına hizmet eden, ürettiği ürünler ve verdiği hizmetlerle tanınan ve bilinen şirketlere ihtiyaç duydugu yasal belgelerin alınması konusunda vekillik ve danışmanlık hizmeti veren 14 yıllık firmadır.\r\n\r\nPatent Tescil Ofisi ,Şirketlerin yurtiçinde ve yurtdışında yasal ve kolay satış ve pazarlama ağının kurulmasında ihtiyaç duydugu yasal belgelerin temininde en yakın destektekçisidir.Sınai mülkiyet haklarının başvuru ve tescil süreçlerinin yönetilmesi ve yönlendirilmesi, müvekkillerin yasal haklarının korunması ve süreçler dahilinde bilgilendirilmesi, rakiplerle olan uyuşmazlıkların çözümü, patent ofisleri nezdinde temsil edilmesi konularında geniş yelpazede hizmet sunma anlayışı benimsenmiştir.\r\n\r\nYurtiçindeki marka, patent, tasarım ve diğer hizmetleri Türk Patent Enstitüsü nezdinde işlem yapmaya yetkili marka ve patent vekilleri ile, yurtdışı işlemlerinde yurtdışındaki iş ortaklarıyla, hukuki işlemlerde birlikte çalıştığımız avukatlarımız ile ilkeli, yenilikçi ve kaliteli hizmet anlayışıyla yerine getirmekteyiz.\r\n\r\nYetkili Patent Ofisi yurtiçinden ve yurtdışına yapılan tescil ve takip işlemleri konusunda verdiği hizmetlerin yanında ayrıca yabancı firmalar tarafından tercih edilerek aranan ofisimizde yurtdışından gelen ulusal başvuru ve koruma taleplerini de uzman ve deneyimli kadrosu ile ifa etmektedir. Şirketlerin ürettiği sınai ve fikri değerlerinin ulusal ve uluslar arası arenada korunması, takip edilmesi ve buna bağlı olarak pazarlama güçlerinin geliştirilmesi temel prensiplerimiz içersindedir.\r\n\r\nPatent Tescil Ofisi ,14 yıldır Resmi kurumlardan aldıgı yetkiyle Türkiye genelinde bütün şahıs firmaları ve şirketlere patent tescili konularda kurumsal uzman danışmanlık hizmeti sunmaktadır.\r\n\r\nYetkili Patent Ofisi olarak, ürün ve hizmetlerinizin ihtiyaç duydugu yasal belgelerin alınması konusunda sizlere hizmet vermekten büyük mutluluk duyarız.', 'Nihat Şendil', '23.08.2014 19:16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_iletisim`
--

CREATE TABLE IF NOT EXISTS `tbl_iletisim` (
  `ilet_id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_turu` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_konu` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` longtext COLLATE utf8_turkish_ci NOT NULL,
  `zaman` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ilet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `tbl_iletisim`
--

INSERT INTO `tbl_iletisim` (`ilet_id`, `adi`, `email`, `telefon`, `mesaj_turu`, `mesaj_konu`, `mesaj`, `zaman`) VALUES
(2, 'NİHAT', 'nihatsendil@gmail.com', '054469636565', 'Intermediate School', 'konusu', 'mesajım benim', '22.08.2014 18:52'),
(3, 'SERHAT ŞENDİL', 'bluehack@mail.com', '065325412635', 'bir sorum var', 'patent hakkıında bilgi istiyorum', 'merhaha meajım açık ve net deneme mesajıdır', '22.08.2014 18:54'),
(4, 'MURAT', 'nihatsendil@gmail.com', '065325412635', 'öneri mesajı', 'mesaj konu', 'merajım net', '22.08.2014 18:56'),
(5, 'MURAT', 'nihatsendil@gmail.com', '065325412635', 'öneri mesajı', 'mesaj konu', 'merajım net', '22.08.2014 18:57');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_makale`
--

CREATE TABLE IF NOT EXISTS `tbl_makale` (
  `makale_id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `spot` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `detay` text COLLATE utf8_turkish_ci NOT NULL,
  `etiket` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kucuk_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `yazan` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `zaman` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`makale_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=38 ;

--
-- Tablo döküm verisi `tbl_makale`
--

INSERT INTO `tbl_makale` (`makale_id`, `baslik`, `spot`, `detay`, `etiket`, `kucuk_resim`, `yazan`, `zaman`) VALUES
(1, 'BARKOD NUMARASI ALMAK NASIL OLUR?', 'Barkod sistemine geçiş yapmak isteyen firmalar Türkiye Odalar ve Borsalar Birliği''ne bağlı Mal Numaralama Merkezine..', 'Barkod sistemine geçiş yapmak isteyen firmalar Türkiye Odalar ve Borsalar Birliği''ne bağlı Mal \r\n\r\nNumaralama Merkezi''ne barkod numara başvurusu gerçekleştirerek gerekli barkod numaralarına \r\n\r\nsahip olabilmektedir.\r\n\r\nBarkod numara başvurusu yapmak ', '', 'img/recent-news-thumb-1.jpg', 'Abdurrahman Taşçı', '2014-08-22'),
(2, 'TECILIM NE KADAR GEÇERLIDIR?', 'Barkod numara başvurusu yapılarak sahip olunan barkod numaralarının tescil süresinin geçerliliği bir yıldır...', 'Barkod değişik kalınlıkta dik çizgilerden oluşturulan ve verilerin hatasız bir şekilde diğer \r\n\r\nortamlara başarılı bir şekilde aktarılması sağlayan bir sistemdir. Peki, barkod numarası nedir?\r\n\r\nBarkod numarası ürünlerin bilgisayar ortamında bulunan', '', 'img/recent-news-thumb-1.jpg', 'Abdurrahman Taşçı', '2014-08-22'),
(3, 'BARKOD TECILI ÇOK MU PAHALI VE NERDEN ALICAM?', 'Barkod alma ücreti barkod satan firmanın ücret tablosuna göre değişebilir. Ayrıca barkod alma ücreti, barkod almak isteyen firmanın...', 'Barkod alma ücreti barkod satan firmanın ücret tablosuna göre değişebilir. Ayrıca barkod \r\n\r\nalma ücreti, barkod almak isteyen firmanın cirosuna göre de değişebilir. Bazı firmalar GS1 yerine \r\n\r\nbarkod numarasını alma işini başka firmalardan halletme', '', 'img/recent-news-thumb-1.jpg', 'Abdurrahman Taşçı', '24.08.2014'),
(4, 'BARKOD TECILI ÇOK MU PAHALI VE NERDEN ALICAM?', 'Barkod alma ücreti barkod satan firmanın ücret tablosuna göre değişebilir. Ayrıca barkod alma ücreti, barkod almak isteyen firmanın...', 'Barkod alma ücreti barkod satan firmanın ücret tablosuna göre değişebilir. Ayrıca barkod \r\n\r\nalma ücreti, barkod almak isteyen firmanın cirosuna göre de değişebilir. Bazı firmalar GS1 yerine \r\n\r\nbarkod numarasını alma işini başka firmalardan halletme', '', 'img/recent-news-thumb-1.jpg', 'Abdurrahman Taşçı', '22.08.2014'),
(5, 'BARKOD NUMARA BELGESİ', 'Barkod numara belgesini almak için firmaların öncelikle Türkiye Odalar ve Borsalar Birliğine\r\n\r\nkayıt yaptırması gerekmektedir.', 'Barkod numara belgesini almak için firmaların öncelikle Türkiye Odalar ve Borsalar Birliğine \r\n\r\nkayıt yaptırması gerekmektedir.\r\n\r\nBarkod numara belgesi firmaların ticari işlemlerinde büyük kolaylıkla elde etmesini \r\n\r\nsağlamaktadır. Barkod belgesi ', '', '', 'Abdurrahman Taşçı', '23.05.2014 16:15'),
(6, 'Barkod Numarası Nedir?', 'Barkod satın aldığımız ürünün kimliklendirilmesidir. Barkod numarası da tarayıcıya \r\n\r\nokuttuğumuzda almak istediğimiz ürün hakkındaki bilgilerini elde etmemizi sağlar. Barkod numarası \r\n\r\nişletmelerde günlük, haftalık veya aylık yapılan stok sayımla', 'Barkod satın aldığımız ürünün kimliklendirilmesidir. Barkod numarası da tarayıcıya \r\n\r\nokuttuğumuzda almak istediğimiz ürün hakkındaki bilgilerini elde etmemizi sağlar. Barkod numarası \r\n\r\nişletmelerde günlük, haftalık veya aylık yapılan stok sayımla', '', '', '', '12.05.2013 12:13'),
(7, 'Barkod numara sorgulama yapabilmek için', 'Barkod numara sorgulama yapabilmek için barkod altındaki rakamsal kodun tam olarak bilinmesi \r\n\r\ngerekir. Kodun eksik olması sorgulama hatasına neden olur çünkü barkod üzerindeki rakamsal kodun \r\n\r\nher rakamı bir anlam teşkil etmektedir Kodun başlama noktası soldan sağa doğrudur. . Barkod', 'Barkod numara sorgulama yapabilmek için barkod altındaki rakamsal kodun tam olarak bilinmesi \r\n\r\ngerekir. Kodun eksik olması sorgulama hatasına neden olur çünkü barkod üzerindeki rakamsal kodun \r\n\r\nher rakamı bir anlam teşkil etmektedir Kodun başlama noktası soldan sağa doğrudur. . Barkod \r\n\r\nnumarasındaki ilk üç hane ülke kodu sonraki üç hane firma kodu sonraki beş hane ürün kodu son \r\n\r\nhane ise kontrol kodu anlamına gelir. Bu nedenle herhangi bir eksiklik barkod kodu sorgulama \r\n\r\nişleminde hata oluşmasına sebep olacaktır.\r\n\r\nBarkod numaraları online sitelerden sorgulanabilir. Bu sorgular için ülkelerin oluşturduğu resmi \r\n\r\nsiteler mevcuttur aynı zamanda özel siteler vasıtasıyla da barkod numara sorgulama işlemi yapılabilir. \r\n\r\nBarkod numara sorgulama işlemi hizmet sektörü içerisinde verilen bir hizmettir.\r\n\r\nBarkod numarası ülkemizde Gs1 Türkiye GEPİR sisteminde yapılabilir. Bu sistem uluslararası bir sorgu \r\n\r\nekranıdır. Barkod numarası sisteme yazıldıktan sonra aratılır ve sistem kullanıcıya ürünün ülke, bölge, \r\n\r\nşehir sonuçlarını sunar. Bu konudaki en önemli husus barkod sorgulaması yapılan sitenin genelliği ve \r\n\r\ngüvenilir doğru sonucu verip vermediğidir.', '', '', '', '23.12.2014 14:15'),
(8, 'Firmaların ticaret alanında en büyük', 'Firmaların ticaret alanında en büyük yardımcılarından biri olan barkod numarası her geçen gün daha \r\n\r\nda büyük hizmet alanlarına yayılmaktadır. Peki, barkod numarası nedir?', 'Firmaların ticaret alanında en büyük yardımcılarından biri olan barkod numarası her geçen gün daha \r\n\r\nda büyük hizmet alanlarına yayılmaktadır. Peki, barkod numarası nedir?\r\n\r\nBarkod numarası sayesinde stoklar ve personellerin hizmetleri gibi pek çok alanda kolaylıkla bilgi \r\n\r\nsahibi olunabilmektedir. Ticari işlemler için gerekli olan hesapların klavye ile tek tek girilerek \r\n\r\nyüklenmesi oldukça uzun bir zaman almaktadır. Zaman almasının anında yorucu bir işlem olması \r\n\r\nda gerekli hesapların sağlıklı bir şekilde bilgisayar ortamına aktarılmasını önlemektedir. Bu kayıt \r\n\r\nsisteminde veriler sürekli olarak hatalı bir şekilde kayıt edilmektedir. Oluşan bu hata oranını ve \r\n\r\nharcanan zamanı ortadan kaldırmak için barkod sistemleri firmalar tarafından tercih edilmektedir. \r\n\r\nBilindiğinin aksine barkod numaraları içerisinde ürün hakkında detaylı bilgiler bulunmamaktadır. \r\n\r\nBarkod numarası sadece o ürünün içerisinde bulunan referans numarasını göstermektedir. Bu \r\n\r\nreferans numarası sayesinde bilgisayarda bulunan ürün kayıtları karşılaştırarak kayıt ürün özellikleri \r\n\r\nortaya çıkmaktadır. \r\n\r\nBarkod numaraları ürün satış işlemlerinde hem zamandan hem de hatadan oluşan boşlukların \r\n\r\nkapatılmasını sağlamaktadır.', '', '', '', '12.12.2014 15:18'),
(13, 'Firmaların ticaret alanında en büyük', 'Firmaların ticaret alanında en büyük yardımcılarından biri olan barkod numarası her geçen gün daha \r\n\r\nda büyük hizmet alanlarına yayılmaktadır. Peki, barkod numarası nedir?', 'Firmaların ticaret alanında en büyük yardımcılarından biri olan barkod numarası her geçen gün daha \r\n\r\nda büyük hizmet alanlarına yayılmaktadır. Peki, barkod numarası nedir?\r\n\r\nBarkod numarası sayesinde stoklar ve personellerin hizmetleri gibi pek çok alanda kolaylıkla bilgi \r\n\r\nsahibi olunabilmektedir. Ticari işlemler için gerekli olan hesapların klavye ile tek tek girilerek \r\n\r\nyüklenmesi oldukça uzun bir zaman almaktadır. Zaman almasının anında yorucu bir işlem olması \r\n\r\nda gerekli hesapların sağlıklı bir şekilde bilgisayar ortamına aktarılmasını önlemektedir. Bu kayıt \r\n\r\nsisteminde veriler sürekli olarak hatalı bir şekilde kayıt edilmektedir. Oluşan bu hata oranını ve \r\n\r\nharcanan zamanı ortadan kaldırmak için barkod sistemleri firmalar tarafından tercih edilmektedir. \r\n\r\nBilindiğinin aksine barkod numaraları içerisinde ürün hakkında detaylı bilgiler bulunmamaktadır. \r\n\r\nBarkod numarası sadece o ürünün içerisinde bulunan referans numarasını göstermektedir. Bu \r\n\r\nreferans numarası sayesinde bilgisayarda bulunan ürün kayıtları karşılaştırarak kayıt ürün özellikleri \r\n\r\nortaya çıkmaktadır. \r\n\r\nBarkod numaraları ürün satış işlemlerinde hem zamandan hem de hatadan oluşan boşlukların \r\n\r\nkapatılmasını sağlamaktadır.', '', '', '', '12.12.2014 15:18'),
(14, 'Firmaların ticaret alanında en büyük', 'Firmaların ticaret alanında en büyük yardımcılarından biri olan barkod numarası her geçen gün daha \r\n\r\nda büyük hizmet alanlarına yayılmaktadır. Peki, barkod numarası nedir?', 'Firmaların ticaret alanında en büyük yardımcılarından biri olan barkod numarası her geçen gün daha \r\n\r\nda büyük hizmet alanlarına yayılmaktadır. Peki, barkod numarası nedir?\r\n\r\nBarkod numarası sayesinde stoklar ve personellerin hizmetleri gibi pek çok alanda kolaylıkla bilgi \r\n\r\nsahibi olunabilmektedir. Ticari işlemler için gerekli olan hesapların klavye ile tek tek girilerek \r\n\r\nyüklenmesi oldukça uzun bir zaman almaktadır. Zaman almasının anında yorucu bir işlem olması \r\n\r\nda gerekli hesapların sağlıklı bir şekilde bilgisayar ortamına aktarılmasını önlemektedir. Bu kayıt \r\n\r\nsisteminde veriler sürekli olarak hatalı bir şekilde kayıt edilmektedir. Oluşan bu hata oranını ve \r\n\r\nharcanan zamanı ortadan kaldırmak için barkod sistemleri firmalar tarafından tercih edilmektedir. \r\n\r\nBilindiğinin aksine barkod numaraları içerisinde ürün hakkında detaylı bilgiler bulunmamaktadır. \r\n\r\nBarkod numarası sadece o ürünün içerisinde bulunan referans numarasını göstermektedir. Bu \r\n\r\nreferans numarası sayesinde bilgisayarda bulunan ürün kayıtları karşılaştırarak kayıt ürün özellikleri \r\n\r\nortaya çıkmaktadır. \r\n\r\nBarkod numaraları ürün satış işlemlerinde hem zamandan hem de hatadan oluşan boşlukların \r\n\r\nkapatılmasını sağlamaktadır.', '', '', '', '12.12.2014 15:18'),
(15, 'Firmaların ticaret alanında en büyük', 'Firmaların ticaret alanında en büyük yardımcılarından biri olan barkod numarası her geçen gün daha \r\n\r\nda büyük hizmet alanlarına yayılmaktadır. Peki, barkod numarası nedir?', 'Firmaların ticaret alanında en büyük yardımcılarından biri olan barkod numarası her geçen gün daha \r\n\r\nda büyük hizmet alanlarına yayılmaktadır. Peki, barkod numarası nedir?\r\n\r\nBarkod numarası sayesinde stoklar ve personellerin hizmetleri gibi pek çok alanda kolaylıkla bilgi \r\n\r\nsahibi olunabilmektedir. Ticari işlemler için gerekli olan hesapların klavye ile tek tek girilerek \r\n\r\nyüklenmesi oldukça uzun bir zaman almaktadır. Zaman almasının anında yorucu bir işlem olması \r\n\r\nda gerekli hesapların sağlıklı bir şekilde bilgisayar ortamına aktarılmasını önlemektedir. Bu kayıt \r\n\r\nsisteminde veriler sürekli olarak hatalı bir şekilde kayıt edilmektedir. Oluşan bu hata oranını ve \r\n\r\nharcanan zamanı ortadan kaldırmak için barkod sistemleri firmalar tarafından tercih edilmektedir. \r\n\r\nBilindiğinin aksine barkod numaraları içerisinde ürün hakkında detaylı bilgiler bulunmamaktadır. \r\n\r\nBarkod numarası sadece o ürünün içerisinde bulunan referans numarasını göstermektedir. Bu \r\n\r\nreferans numarası sayesinde bilgisayarda bulunan ürün kayıtları karşılaştırarak kayıt ürün özellikleri \r\n\r\nortaya çıkmaktadır. \r\n\r\nBarkod numaraları ürün satış işlemlerinde hem zamandan hem de hatadan oluşan boşlukların \r\n\r\nkapatılmasını sağlamaktadır.', '', '', '', '12.12.2014 15:18'),
(16, 'Firmaların ticaret alanında en büyük', 'Firmaların ticaret alanında en büyük yardımcılarından biri olan barkod numarası her geçen gün daha \r\n\r\nda büyük hizmet alanlarına yayılmaktadır. Peki, barkod numarası nedir?', 'Firmaların ticaret alanında en büyük yardımcılarından biri olan barkod numarası her geçen gün daha \r\n\r\nda büyük hizmet alanlarına yayılmaktadır. Peki, barkod numarası nedir?\r\n\r\nBarkod numarası sayesinde stoklar ve personellerin hizmetleri gibi pek çok alanda kolaylıkla bilgi \r\n\r\nsahibi olunabilmektedir. Ticari işlemler için gerekli olan hesapların klavye ile tek tek girilerek \r\n\r\nyüklenmesi oldukça uzun bir zaman almaktadır. Zaman almasının anında yorucu bir işlem olması \r\n\r\nda gerekli hesapların sağlıklı bir şekilde bilgisayar ortamına aktarılmasını önlemektedir. Bu kayıt \r\n\r\nsisteminde veriler sürekli olarak hatalı bir şekilde kayıt edilmektedir. Oluşan bu hata oranını ve \r\n\r\nharcanan zamanı ortadan kaldırmak için barkod sistemleri firmalar tarafından tercih edilmektedir. \r\n\r\nBilindiğinin aksine barkod numaraları içerisinde ürün hakkında detaylı bilgiler bulunmamaktadır. \r\n\r\nBarkod numarası sadece o ürünün içerisinde bulunan referans numarasını göstermektedir. Bu \r\n\r\nreferans numarası sayesinde bilgisayarda bulunan ürün kayıtları karşılaştırarak kayıt ürün özellikleri \r\n\r\nortaya çıkmaktadır. \r\n\r\nBarkod numaraları ürün satış işlemlerinde hem zamandan hem de hatadan oluşan boşlukların \r\n\r\nkapatılmasını sağlamaktadır.', '', '', '', '12.12.2014 15:18'),
(34, 'YENİ BİR BAŞLIK ATTIM', 'Teknolojinin gelişmesiyle beraberde alışveriş sektörü de ayrı bir renk aldı. Daha hızlı ve güvenilir bir alışveriş ortamı yaratan firmalar, bu sektörde daha yukarılara çıkmaya başladır. Daha hızlı ve güvenilir bir alışveriş sisteminin oluşturulması için en önemli etken ürünlerdeki barkodlardır. Bu barkod numarası nedir diye sormaya başlayabilirsiniz. Siyah çizgilerden oluşan bu etiketlerin üstünde numaralar bulunmaktadır. Bu numaralar sayesinde her ürünün bilgisayar ortamında yeri oluşmuştur.', 'Teknolojinin gelişmesiyle beraberde alışveriş sektörü de ayrı bir renk aldı. Daha hızlı ve güvenilir bir alışveriş ortamı yaratan firmalar, bu sektörde daha yukarılara çıkmaya başladır. Daha hızlı ve güvenilir bir alışveriş sisteminin oluşturulması için en önemli etken ürünlerdeki barkodlardır. Bu barkod numarası nedir diye sormaya başlayabilirsiniz. Siyah çizgilerden oluşan bu etiketlerin üstünde numaralar bulunmaktadır. Bu numaralar sayesinde her ürünün bilgisayar ortamında yeri oluşmuştur.Teknolojinin gelişmesiyle beraberde alışveriş sektörü de ayrı bir renk aldı. Daha hızlı ve güvenilir bir alışveriş ortamı yaratan firmalar, bu sektörde daha yukarılara çıkmaya başladır. Daha hızlı ve güvenilir bir alışveriş sisteminin oluşturulması için en önemli etken ürünlerdeki barkodlardır. Bu barkod numarası nedir diye sormaya başlayabilirsiniz. Siyah çizgilerden oluşan bu etiketlerin üstünde numaralar bulunmaktadır. Bu numaralar sayesinde her ürünün bilgisayar ortamında yeri oluşmuştur.\r\nTeknolojinin gelişmesiyle beraberde alışveriş sektörü de ayrı bir renk aldı. Daha hızlı ve güvenilir bir alışveriş ortamı yaratan firmalar, bu sektörde daha yukarılara çıkmaya başladır. Daha hızlı ve güvenilir bir alışveriş sisteminin oluşturulması için en önemli etken ürünlerdeki barkodlardır. Bu barkod numarası nedir diye sormaya başlayabilirsiniz. Siyah çizgilerden oluşan bu etiketlerin üstünde numaralar bulunmaktadır. Bu numaralar sayesinde her ürünün bilgisayar ortamında yeri oluşmuştur.', 'ETİKET', '', 'NİHAT', '23.08.2014 21:20'),
(35, 'YENİ BAŞLIK MERHABA DÜNYA', 'Teknolojinin gelişmesiyle beraberde alışveriş sektörü de ayrı bir renk aldı. Daha hızlı ve güvenilir bir alışveriş ortamı yaratan firmalar, bu sektörde daha yukarılara çıkmaya başladır. Daha hızlı ve güvenilir bir alışveriş sisteminin oluşturulması için en önemli etken ürünlerdeki barkodlardır. Bu barkod numarası nedir diye sormaya başlayabilirsiniz. Siyah çizgilerden oluşan bu etiketlerin üstünde numaralar bulunmaktadır. Bu numaralar sayesinde her ürünün bilgisayar ortamında yeri oluşmuştur.', 'Teknolojinin gelişmesiyle beraberde alışveriş sektörü de ayrı bir renk aldı. Daha hızlı ve güvenilir bir alışveriş ortamı yaratan firmalar, bu sektörde daha yukarılara çıkmaya başladır. Daha hızlı ve güvenilir bir alışveriş sisteminin oluşturulması için en önemli etken ürünlerdeki barkodlardır. Bu barkod numarası nedir diye sormaya başlayabilirsiniz. Siyah çizgilerden oluşan bu etiketlerin üstünde numaralar bulunmaktadır. Bu numaralar sayesinde her ürünün bilgisayar ortamında yeri oluşmuştur.\r\n\r\nTeknolojinin gelişmesiyle beraberde alışveriş sektörü de ayrı bir renk aldı. Daha hızlı ve güvenilir bir alışveriş ortamı yaratan firmalar, bu sektörde daha yukarılara çıkmaya başladır. Daha hızlı ve güvenilir bir alışveriş sisteminin oluşturulması için en önemli etken ürünlerdeki barkodlardır. Bu barkod numarası nedir diye sormaya başlayabilirsiniz. Siyah çizgilerden oluşan bu etiketlerin üstünde numaralar bulunmaktadır. Bu numaralar sayesinde her ürünün bilgisayar ortamında yeri oluşmuştur.\r\n\r\nTeknolojinin gelişmesiyle beraberde alışveriş sektörü de ayrı bir renk aldı. Daha hızlı ve güvenilir bir alışveriş ortamı yaratan firmalar, bu sektörde daha yukarılara çıkmaya başladır. Daha hızlı ve güvenilir bir alışveriş sisteminin oluşturulması için en önemli etken ürünlerdeki barkodlardır. Bu barkod numarası nedir diye sormaya başlayabilirsiniz. Siyah çizgilerden oluşan bu etiketlerin üstünde numaralar bulunmaktadır. Bu numaralar sayesinde her ürünün bilgisayar ortamında yeri oluşmuştur.', 'DENEME ETİKET BİLGİSAYAR', '', 'NİHAT', '23.08.2014 21:21'),
(36, 'YENİ', 'Teknolojinin gelişmesiyle beraberde alışveriş sektörü de ayrı bir renk aldı. Daha hızlı ve\r\n\r\ngüvenilir bir alışveriş ortamı yaratan firmalar, bu sektörde daha yukarılara çıkmaya başladır. Daha hızlı \r\n\r\nve güvenilir bir alışveriş sisteminin oluşturulması için en önemli etken ürünlerdeki barkodlardır. Bu \r\n\r\nbarkod numarası nedir diye sormaya başlayabilirsiniz. Siyah çizgilerden oluşan bu etiketlerin üstünde \r\n\r\nnumaralar bulunmaktadır. Bu numaralar sayesinde her ürünün bilgisayar ortamında yeri oluşmuştur.', '<div>Teknolojinin gelişmesiyle beraberde alışveriş sektörü de ayrı bir renk aldı. Daha hızlı ve&nbsp;</div><div><br></div><div>güvenilir bir alışveriş ortamı yaratan firmalar, bu sektörde daha yukarılara çıkmaya başladır. Daha hızlı&nbsp;</div><div><br></div><div>ve güvenilir bir alışveriş sisteminin oluşturulması için en önemli etken ürünlerdeki barkodlardır. Bu&nbsp;</div><div><br></div><div>barkod numarası nedir diye sormaya başlayabilirsiniz. Siyah çizgilerden oluşan bu etiketlerin üstünde&nbsp;</div><div><br></div><div>numaralar bulunmaktadır. Bu numaralar sayesinde her ürünün bilgisayar ortamında yeri oluşmuştur.</div><div><br></div><div>Barkod numarası nedir?</div><div><br></div><div>hangi ülkede üretimin gerçekleştirildiğini öğrenebilmekteyiz. Ülkemizin barkod kodu ise 869’dur. Bu&nbsp;</div><div><br></div><div>numaranın arkasından işletme numaraları ve kontrol sayısı ile barkod tamamlanır.</div><div><br></div><div>kimliğidir. Böylelikle her ürünün aynı bizler gibi bir kimliği oluşmuş olur. Bu sayede daha hızlı ve&nbsp;</div><div><br></div><div>güvenilir bir alışveriş ortamı sağlanır. Aynı zamanda satılan ürünün hangi ülkede yapıldığı gibi bilgilere&nbsp;</div><div><br></div><div>barkod numarası ile ulaşabiliriz. Hangi ürünün daha çok satılıp satılmadığı gibi oranları da bu&nbsp;</div><div><br></div><div>numaralar sayesinde ulaşılabilmektedir.</div><div><br></div><div>Barkod numarasındaki her sayının ayrı bir anlamı vardır. Öncelikle başındaki sayılar ile&nbsp;</div><div><br></div><div>Barkod numarası nedir diye sorulduğu zaman akla ilk gelen satılan ürünlerin</div>', '', '', '', '23.08.2014 21:24'),
(37, '', '', '', '', '', '', '24.08.2014 13:26');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kisa_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `zaman` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=27 ;

--
-- Tablo döküm verisi `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `baslik`, `kisa_aciklama`, `resim`, `zaman`) VALUES
(19, 'DENEME BAŞLIK 1', 'KISA AÇIKLAMA', '19_slider_mtb1-1140x400.png', '24.0814.14 15:34:08'),
(20, 'DENEME BAŞLIK 2', 'KISA AÇIKLAMA', '20_fireplace-slider-1140x400.jpg', '24.0814.14 15:49:11'),
(21, 'SLIDE -1 ', 'KISA BAŞLIK', '21_slide-1.jpg', '24.0814.14 16:02:35'),
(24, 'DENEME BAŞLIK 6', 'KISA AÇIKLAMA', '24_slide-4.jpg', '24.0814.14 16:15:45'),
(26, 'DENEME BAŞLIK 9', 'KISA AÇIKLAMA', '26_slide-2.jpg', '24.0814.14 16:16:37');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_uye`
--

CREATE TABLE IF NOT EXISTS `tbl_uye` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kadi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `tbl_uye`
--

INSERT INTO `tbl_uye` (`id`, `kadi`, `sifre`) VALUES
(1, 'nihat', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
