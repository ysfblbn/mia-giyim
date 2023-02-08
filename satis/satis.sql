-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Şub 2023, 13:44:03
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `satis`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
--

CREATE TABLE `banner` (
  `bannerID` int(11) NOT NULL,
  `bannerFoto` varchar(255) NOT NULL,
  `bannerUstBaslik` varchar(255) NOT NULL,
  `bannerBaslik` varchar(255) NOT NULL,
  `bannerYazi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `banner`
--

INSERT INTO `banner` (`bannerID`, `bannerFoto`, `bannerUstBaslik`, `bannerBaslik`, `bannerYazi`) VALUES
(1, 'banner.png', '<p>B&Uuml;Y&Uuml;K İNDİRİM 80%</p>', '<p>YAZ ZAMANI</p>', 'Sizde harika tasarımları ile modayı yakalamak istiyorsanız Mia Giyim\'e gelin.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogdetay`
--

CREATE TABLE `blogdetay` (
  `blogDetayID` int(11) NOT NULL,
  `blogDetayFoto` varchar(255) NOT NULL,
  `blogDetayBaslik` varchar(255) NOT NULL,
  `blogDetayYazi` text NOT NULL,
  `blogDetaySeo` varchar(255) NOT NULL,
  `blogDetayDurum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `blogdetay`
--

INSERT INTO `blogdetay` (`blogDetayID`, `blogDetayFoto`, `blogDetayBaslik`, `blogDetayYazi`, `blogDetaySeo`, `blogDetayDurum`) VALUES
(6, '2023-yili-modasi160120231801.png', '2023 Moda Trendleri Hakkında Merak Edilenler', 'Kapsül Gardırop Nedir? Birbiriyle kolay bir şekilde uyum sağlayan parçaların bir araya getirilmesiyle oluşturulan kapsül gardırop minimalizm felsefesinin bir ürünüdür. Bu gardıropta, her sezon değişen modaya ve dolayısıyla değişen kıyafet modellerine bağlı kalmanız gerekmez. Oluşturduğunuz kapsül gardırop sayesinde her sezon yeni bir alışveriş yapmadan şık ve modern görünmeniz mümkün olur.  Temel olarak, kapsül gardırop, modası geçmeyen ürünlerin bir araya getirilmesiyle oluşturulur. Burada, tarzınızı yansıtan klasik parçalara yer verebilirsiniz. Belli başlı ürün gruplarının bulunduğu kapsül gardırop ile ani gelişen davetlerde, iş yerinde, okulda ya da gittiğiniz herhangi bir yerde kıyafet konusunda endişelenmenize gerek kalmaz. Burada bulunan parçalar, evdeki diğer pek çok kıyafetinizle kolayca uyum sağlayan parçalar olur. Defacto ürünleriyle kapsül gardırobunuzu kolay bir şekilde oluşturabilirsiniz.  Kapsül Gardırop Nasıl Hazırlanır? Yıllar boyunca mağazalarda beğendiğiniz, birbiriyle uyumlu olmayan pek çok parçayı satın almış olabilirsiniz. Severek aldığınız onlarca kıyafet olabilir. Ama hala ne giyeceğinizi saatlerce düşünüyorsunuz değil mi? İşte, tam da bu sebeple kapsül gardırop oluşturma zamanın geldi. Kapsül gardırop, sizin temel gardırobunuz değil. Burada, sizin uzun yıllar boyunca kullanacağınız temel ve zamansız parçalar bulunuyor. Günlük kıyafetleriniz bu gardırop içinde yer almıyor.  Kapsül gardırobun herhangi bir kuralı ya da kaidesi bulunmuyor. Tamamen giyim tarzınıza uygun basic ürünleri bir araya getirerek kolayca oluşturabilirsiniz. Sonuç olarak burada amaç kalabalığa son vermek ve sadeleşmek. Bir kapsül gardırop listesi yaparak ilerlerseniz işler sizin için daha kolay hale gelir. Liste konusunda ise şu şekilde ilerleyebilirsiniz:  3 dış giyim ürünü 9 üst giyim ürünü 5 alt giyim ürünü 5 ayakkabı 5 çanta Aksesuar Kapsül Gardırop Oluşturmanın Avantajları Moda sektöründe yaşanan hızlı değişim ve gelişmelere bağlı olarak her sene yeni ürünler almanız gerektiğini mi düşünüyorsunuz? Bir yaz aldığınız kıyafetin modası diğer yaz tamamen geçmiş olabiliyor. Onu giydiğinizde kendinizi demode hissettiğiniz de oluyordur. Bu sebeple, bu hızlı değişime önlem almak, paranızı boşa harcamamak, sürekli alışveriş yapmak zorunda kalmamak ve ne giyeceğim diye saatlerce düşünmemek için kapsül gardırop oluşturabilirsiniz.  Zamandan Tasarruf Sağlar Zamansız parçalarla oluşturacağınız kapsül dolabın size sağlayacağı pek çok avantaj bulunuyor. Eğer çalışan biriyseniz ve her gün ne giyeceğinizi dolabın önünde saatlerce düşünüyorsanız, bu gardırop tam da sizlik. Kurumsal bir şirkette çalışıyorsanız, daha çok klasik parçalara yer vererek ve birbiriyle uyumlu tercihler yaparak bu dertlerin tamamını ortadan kaldırabilirsiniz. Bu sayede zamandan tasarruf edebilir, vaktini daha efektif kullanabilirsiniz.  Bütçenize Katkı Sağlar Her sezon değişen modaya bağlı olarak kendinizi alışveriş yapmak zorunda hissetmenize gerek kalmaz. Çünkü kapsül gardırobunuz zamansız ürünlerle dolu. Zamansız ürünler, her sezon rahatça giyebileceğiniz modern bir görünüme sahiptir. Bu ürünleri kullanarak sürekli olarak değişen kıyafet modasına ayak uydurmak zorunda kalmazsınız.  Tarzınızı Yansıtmaya Yardımcı Olur Kapsül gardırobunuzda yer alan ürünlerin tamamı sizin tarzınızı yansıtıyor. Bu ürünlerin kullanımı, değişen modayla birlikte sizin de tarzını değiştirmiyor. Sevdiğiniz renkler, sevdiğiniz kalıplar, sevdiğiniz modeller, işte her şeyiyle bu ürünlerin tamamı sizsiniz!', '2023-moda-trendleri-hakkinda-merak-edilenler', '1'),
(8, 'kapsul-gardirop-modelleri255620221356.webp', 'Sadeleşme Yolunda İlk Adım Kapsül Gardırop', 'Kapsül Gardırop Nedir? Birbiriyle kolay bir şekilde uyum sağlayan parçaların bir araya getirilmesiyle oluşturulan kapsül gardırop minimalizm felsefesinin bir ürünüdür. Bu gardıropta, her sezon değişen modaya ve dolayısıyla değişen kıyafet modellerine bağl', 'sadelesme-yolunda-ilk-adim-kapsul-gardirop', '1'),
(9, 'yilbasinda-kalin-kazak-modasi295920220959.webp', 'Yılbaşı İçin Eğlenceli Etkinlik Fikirleri', 'Her sene başında kutlanan ve eğlenceli anlar geçirmenizi sağlayan yılbaşı gecesi, birçok güzel anıya ve etkinliğe ev sahipliği yapıyor. Evde kutlama yapabilir ya da dışarıda katılabileceğiniz farklı programları değerlendirebilirsiniz. Yeni yıla girerken güzel ve eğlenceli aktiviteleri seçmenin bir diğer amacı ise “Yılbaşına nasıl girerseniz geri kalan tüm seneyi bu şekilde geçirirsiniz.” düşüncesi olabilir.  Yılbaşı için katılabileceğiniz birçok farklı etkinlik bulunuyor. Bu etkinlikler tüm gece boyunca insanların eğlenmesini ve yeni yıla girmelerini sağlıyor. Evde yapılan yılbaşı programlarında aileniz ile birlikte güzel televizyon seyredilebilir, en sevilen oyunlardan olan tombala oynayabilirsiniz. Dışarıda düzenlenen yılbaşı etkinlikleri ise daha kapsamlı oluyor ve eğlence odaklı bir hale geliyor. Arkadaşlarınızla veya ailenizle geçirebileceğiniz yılbaşı etkinliklerinde hediyeler alabilirsiniz. Ağaçları süsleyebilir ya da konserlere gidebilirsiniz. Yapacağınız ve tercih edeceğiniz aktivitelerin hangisinde en çok eğlenebileceğinizi bulmanız ise çok kolay!  Bu etkinliklerde giyeceğiniz kıyafetler de önemli. Özellikle şık bir restorana gidiyorsanız; etek, elbise, kumaş pantolon ve blazer ceketlerle şık bir kombin yapabilirsiniz. Mevsime ve kombine uygun bir topuklu bot ya da çizme de şıklığınıza şıklık katar. Erkeklerse ceket, pantolon ve klasik bot ya da ayakkabılarla bu özel geceyi kıyafetleriyle çok daha eğlenceli bir hale getirebilir. DeFacto’nun bu özel güne uygun şık ürünleri sayesinde hem tarzınızı yansıtan hem de gittiğiniz mekanlarda dikkat çekmenizi sağlayan kombinler yapabilirsiniz.', 'yilbasi-icin-eglenceli-etkinlik-fikirleri', ''),
(10, 'oduncu-gomlegi-erkek-modelleri254820221448.webp', 'Kışın Hayat Kurtaran Gömlek Kombin Önerileri', 'ömlekler zamansız giyim parçalarının başında gelen giyim ürünlerinden biri. Cinsiyet fark etmeksizin, giyimin bu önemli parçaları ile elde edilen gömlek şıklığı hem iş yaşamı hem de günlük yaşamda çeşitli davetlerde sıklıkla ihtiyacınızı karşılıyor. Kışın tercih edebileceğiniz onlarca gömlekli kombin sayesinde soğuklardan korunurken tarzınızı yansıtarak göz kamaştırabilirsiniz.  Kullanım alanının oldukça geniş olması, aslında farklı kumaş türleri ve model çeşitliliği sayesinde. Her mevsimde giyilebilir olması da bu çeşitliliğin getirdiği bir ayrıcalık. Alternatifi oldukça bol gömlek kombinleri kararsız kalınan her anın kurtarıcısı oluyor. Kışın gömlek dendiğinde hem içinizi hem sizi sıcacık ısıtan oduncu gömlekler akla ilk gelen modellerden biri. Özellikle jean pantolonlarla kombinlediğinizde oldukça şık olan oduncu gömlek, açık renkli kıyafetlerle vurgulanarak da tercih edilebilir. Gömlek rengi tercihiniz yeşil, mavi, mor gibi soğuk renklerden olacaksa, koyu renkli bir alt giyim ürünü ile iyi bir seçim yapmış olursunuz. Soğuk renklerdeki gömlekleri tam ilikleyerek kullanabilirsiniz. Ayrıca koyu renklerde seçilen ve gömleğin içine giyilen bir tişört de size hoş bir görünüm verecektir.  Bu noktaları göz önünde bulundurarak tarz bir kombin için “Gömlek içine ne giyilir?” diye düşünebilirsiniz. Gömleğin renginin sıcak, tişörtün renginin ise soğuk olmasına dikkat ederseniz tarzı ön plana çıkarmakta başarılı olursunuz. Bu küçük detaylara dikkat etmek size hem karizmatik hem de şık bir görünüm verecektir. Aksesuarlı beyaz gömlek fular kombini gibi seçeneklerle uyumlu, rahat ve hoş bir görünüme kavuşabilirsiniz. Takacağınız bir metal saat ile kombininizi tamamlayabilirsiniz. Kışın oduncu gömlekler ve diğer gömlekler ile yapabileceğiniz kombin alternatiflerini inceleyebilirsiniz. Elbise üstüne gömlek giyebilir, şık bir parçayı spor hale getirebilirsiniz.  Sıcacık Dokulu Kadife Gömlek ŞıklığıKadife; hafif ışıltılı, tüylü yapıda bir kumaş olduğu için bu giyim ürünleri doğru şekilde kullanıldığında oldukça zarif ve bohem bir görünüm kazanmanızı sağlar. Özellikle kış sezonunda yumuşacık yapısıyla sizi son derece sıcak tutar. Kadife kumaşlar fitilli ya da düz olmak üzere kendi içinde de desen olarak çeşitlenir. Bu kumaştan üretilmiş giysiler dökümlü modellerle hoş bir hava yaratır.  Kadife gömlekleri, özellikle jeanlerle ya da taytlarla kullanarak oldukça spor ve şık görünüm yaratmanız mümkün. Gömlek jean kombinleri sayesinde görünüşünüz daha günlük ama şık bir hale gelecektir. Kadife gömlekleri deri ve parlak ürünler yerine süetlerle kombinleyebilirsiniz. Bu sayede bohem bir stil de yaratabilirsiniz. Desenli kadife kumaşlardan üretilmiş gömlekler de zarafetinize zarafet katmak için iyi bir yol.  Kadife gömlek ile kombin yapmak biraz zor gibi gelse de doğru kullanıldığında oldukça şık sonuçlar alabilirsiniz. Bu ürünlerle dolabınızda bulunan birkaç parçayı birleştirerek giydiğinizde kusursuz kombinler elde etmeniz oldukça mümkün. İster kadife seçenekleri birlikte kullanarak ya da tek parça kadife gömlekle hem günlük hem de şık kombinler oluşturabilirsiniz.  Doğru renklerle seçilen kadife gömleklerin önceki yıllarda gece kıyafetlerinde kullanımı yaygındı. Bu sebeple bu parçaları günlük yaşam için uyarlamak biraz zor oluyordu. Fakat sonrasında bu ürünler ceket, bluz, etek gibi opsiyonlarla karşınıza gündelik yaşamda da çıkmaya başladı. Ancak kadife parçalardan gömlek, en şık kombinlerin ana unsuru olarak tahtını koruyor. Günlük kombinlerinize ufacık bir dokunuşla gece şıklığına dönüştürme olanağını yine bu kadife parçalar veriyor. Erkek gömlek kombinlerinde kadifeler pek tercih edilmese de kadın modası için vazgeçilmez denebilir.', 'kisin-hayat-kurtaran-gomlek-kombin-onerileri', '1'),
(11, 'kadinlarda-hakim-yaka-gomlek150220221202.webp', 'Gömlek Yaka Çeşitleri Nelerdir?', 'kesmeden devam ettiriyor. Geçmişin ve bugünün modasına uygun tasarlanan modeller, her yaştan ve zevkten kişiye hitap ediyor. Farklı renkleriyle tarzınızın ortaya çıkmasını sağlarken her döneme damga vuran gömlekler ile şık bir kombin oluşturmanız mümkün hale geliyor.  Erkek gömlek çeşitlerinde yer verilen yakalar, klasik ve casual olmak üzere her türlü kıyafetle uyum sağlıyor. Resmi törenlerde ve davetlerde daha çok takım elbiseye uyan gömlekler tercih ediliyor. Papyon ve kravat kullanımına uygun olanlar, davetler için de uygun. Daha salaş ve bol kesimler günlük kesimde kullanılıyor. Rahat yapısı ile gömlek yakalar, gün boyu konfor sağlıyor.  Bu modeller hem kadın hem de erkeklere yönelik tasarlanması nedeniyle hemen herkesi memnun etmeyi başarıyor. Jean ya da kumaş pantolon, etek ve taytlarla kombinlenip günlük hayatta ve davetlerde şıklık yaratıyor. Kalıp, renk ve kumaş seçenekleri tarzınızın yansımasına imkan tanıyor. Dört mevsim kullanılabilen gömlek yaka çeşitleri her türlü hava koşuluna uyum sağlıyor. Siz de uygun papyon yaka gömlek modelini DeFacto aracılığıyla temin edebilirsiniz. Sizin için uygun “Gömlek çeşitleri nelerdir?” diye merak ediyorsanız, işte detaylar.  Her Zevke Uygun Kadın Gömlek Yaka Çeşitleri Erkek ve bayan gömlek yaka çeşitleri, özgün tasarımları ile kombinlerin vazgeçilmezleri arasında yer alıyor. Her ortama uyum sağlayan modeller ile şıklık yarışında öne çıkmanız mümkün. İhtiyacınıza uygun olan kadın gömlek yaka çeşitleri arasından uygun olanı seçerek işe başlayabilirsiniz. Birçok model arasından tarzınıza uygun olanı tercih edip davetlerde boy gösterebilirsiniz.Peki en çok kullanılan kadın gömlek yakaları nelerdir?', 'gomlek-yaka-cesitleri-nelerdir', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footer`
--

CREATE TABLE `footer` (
  `footerID` int(11) NOT NULL,
  `footerYazi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `footer`
--

INSERT INTO `footer` (`footerID`, `footerYazi`) VALUES
(1, 'DeFacto olarak, 2005 yılında heyecanlı bir yolculuğa başladık. Türk modasına taze bir bakış açısı getirmek ve yepyeni, kaliteli ve özgün tasarımlarımızı dünyanın dört bir yanındaki tüketiciyle buluşturmak amacıyla çıktığımız bu yolculukta, çok önemli işle');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizdaID` int(11) NOT NULL,
  `hakkimizdaFoto` varchar(255) NOT NULL,
  `hakkimizdaBaslik` varchar(255) NOT NULL,
  `hakkimizdaYazi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizdaID`, `hakkimizdaFoto`, `hakkimizdaBaslik`, `hakkimizdaYazi`) VALUES
(1, 'hakkimizda.png', 'Hakkımızda ', 'Mia Giyim olarak, 2005 yılında heyecanlı bir yolculuğa başladık. Türk modasına taze bir bakış açısı getirmek ve yepyeni, kaliteli ve özgün tasarımlarımızı dünyanın dört bir yanındaki tüketiciyle buluşturmak amacıyla çıktığımız bu yolculukta, çok önemli iş');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmet`
--

CREATE TABLE `hizmet` (
  `hizmetID` int(11) NOT NULL,
  `hizmetFoto` varchar(255) NOT NULL,
  `hizmetUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hizmet`
--

INSERT INTO `hizmet` (`hizmetID`, `hizmetFoto`, `hizmetUrl`) VALUES
(1, 'logo.png', 'https://elvanajans.com/'),
(2, 'brand-1.jpg', 'https://elvanajans.com/'),
(3, 'brand-2.jpg', 'https://elvanajans.com/'),
(4, 'brand-3.jpg', 'https://elvanajans.com/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisimID` int(11) NOT NULL,
  `iletisimMapsUrl` text NOT NULL,
  `iletisimAdres` varchar(255) NOT NULL,
  `iletisimMail` varchar(255) NOT NULL,
  `iletisimTel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisimID`, `iletisimMapsUrl`, `iletisimAdres`, `iletisimMail`, `iletisimTel`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3050.485584349085!2d29.48003617509287!3d40.13146607295356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cbca6bedb9cb63%3A0xe99450dd1e44a64c!2zU2V2aW0gWcSxbGTEsXogTWVzbGVraSBFxJ9pdGltIEthbXDDvHPDvA!5e0!3m2!1str!2str!4v1671550710644!5m2!1str!2str', 'Akhisar, Karalar Yolu Sk 12/5, 16400 Süleymaniye Osb/İnegöl/Bursa', 'miagiyim@exmaple.com', '+90 123 456 78 90aa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `logo_icon`
--

CREATE TABLE `logo_icon` (
  `logoID` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `logo_icon`
--

INSERT INTO `logo_icon` (`logoID`, `logo`, `icon`, `title`) VALUES
(1, 'logo.png', 'icon.png', 'Mia Giyim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `sliderID` int(11) NOT NULL,
  `sliderFoto` varchar(255) NOT NULL,
  `sliderBaslik` varchar(255) NOT NULL,
  `sliderYazi` varchar(255) NOT NULL,
  `sliderUstBaslik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`sliderID`, `sliderFoto`, `sliderBaslik`, `sliderYazi`, `sliderUstBaslik`) VALUES
(1, 'slider-erkek.png', 'erkek<span> giyim</span>', 'Birbirinden zevkli ve tarz giyim ile sizde hemen sokağa ayak uydurun.a', 'Tüm Ürünlerde <span>80%</span> İndİrİm '),
(2, 'slider-kadin.png', 'kadın <span>giyim</span>', 'Birbirinden zevkli ve tarz giyim ile sizde hemen sokağa ayak uydurun.', 'Tüm Ürünlerde <span>80%</span> İndİrİm ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teklif`
--

CREATE TABLE `teklif` (
  `teklifID` int(11) NOT NULL,
  `teklifFoto` varchar(255) NOT NULL,
  `teklifBaslik` varchar(255) NOT NULL,
  `teklifYazi` varchar(255) NOT NULL,
  `teklifYeniFiyat` varchar(255) NOT NULL,
  `teklifEskiFiyat` varchar(255) NOT NULL,
  `teklifSeo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `teklif`
--

INSERT INTO `teklif` (`teklifID`, `teklifFoto`, `teklifBaslik`, `teklifYazi`, `teklifYeniFiyat`, `teklifEskiFiyat`, `teklifSeo`) VALUES
(1, 'teklif.png', 'Kot Pantolon', 'Mia Giyim\'de bu hafta %40 İNDİRİM', '$378.00', '$478.00', 'kot-pantolon'),
(2, 'teklif2.png', 'Spor Ayakkabı', 'Mia Giyim\'de bu hafta %90 İNDİRİM', '$378.00', '$478.00', 'spor-ayakkabi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urunlerID` int(11) NOT NULL,
  `urunlerFoto` varchar(255) NOT NULL,
  `urunlerBaslik` varchar(255) NOT NULL,
  `urunlerFiyat` varchar(255) NOT NULL,
  `urunlerYazi` varchar(255) NOT NULL,
  `urunlerOzellik` varchar(255) NOT NULL,
  `urunlerOzellik2` varchar(255) NOT NULL,
  `urunlerOzellik3` varchar(255) NOT NULL,
  `urunSeo` varchar(255) NOT NULL,
  `urunDurum` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urunlerID`, `urunlerFoto`, `urunlerBaslik`, `urunlerFiyat`, `urunlerYazi`, `urunlerOzellik`, `urunlerOzellik2`, `urunlerOzellik3`, `urunSeo`, `urunDurum`) VALUES
(1, 'siyah.png', 'Siyah T-shirt', '₺475', '<p>Bu bir siyah T-shirt\'d&uuml;r</p>', 'Siyah', 'Hafif', 'siyah', 'siyah', 1),
(2, 'sarı.png', 'Sarı T-shirt', '₺475', '<p>Bu sarı bir T-shirt\' d&uuml;r</p>', 'İpekkkk', 'Dayanıklı Kumaş ', 'sari', 'sari', 1),
(3, 'yesil.png', 'Su yeşili T-shirt', '₺600', '<p>yusuf Bu bir su yeşili T-shirt\'d&uuml;r</p>', 'İpek', 'Kumaş', 'yesil', 'yesil', 1),
(5, 'pantolon.png', 'Kot Pantolon', '₺700', '<p>Rahat kullanım ve bol beden &ccedil;eşidi ile kot pantolonlar sizlerle</p>', 'Kot ', 'Likralı', 'kot-pantolon', 'kot-pantolon', 1),
(6, 'ayakkabi.png', 'Spor Ayakkabı', '₺475', '<p>G&uuml;nl&uuml;k kullanım i&ccedil;in olduk&ccedil;a rahat bir spor ayakkabıdır</p>', 'Rahat', 'Su Geçirmez', 'spor-ayakkabi', 'spor-ayakkabi', 1),
(7, 'erkek-ceket.png', 'Deri Erkek Ceketi', '₺1000', 'Sonbahar ve ilkbaharın vazgeçilmez parçalarından biri olan deri ceketler sizlerle.', 'Deri', 'Sıcak Tutar', 'Su Geçirmez', 'erkek-ceket', 1),
(8, 'kadin-mont.png', 'Kadın Mont', '₺1500', 'Kışların vazgeçilmezi olan montlar Mia giyim ile muhteşem kış dönemine geçiyor.', 'Tüylü ', 'Sıcak Tutar', 'Oversize', 'kadin-mont', 1),
(9, 'erkek-mont.png', 'Erkek Mont', '₺1500', 'Kışların vazgeçilmez parçaları olan montları en sıcak tutanları Mia Giyimde.', 'Kalın', 'Tüylü', 'Sıcak Tutar', 'erkek-mont', 1),
(10, 'papatya-kadin-elbise.png', 'Kadın  Elbise ', '₺345', 'Kadınların vazgeiçilmez parçalarından biridir.', 'Rahat', 'Şık renkleri ', 'Tarz desenleri', 'papatya-kadin-elbise', 1),
(13, 'sisme-yelek.png', 'Şişme Yelek', '₺234', '<p>sdgsgsd</p>', 'Rahat', 'Yumuşak', 'sisme-yelek', 'sisme-yelek', 1),
(14, 'yesil-kadin-elbise.png', 'Yeşil Kadın Elbise', '₺789', 'Modern Tarzı ile sizleri ön plana çıkaran tarz elbiseler sizlerle', 'Açık Renk', 'Rahat', 'Dayanıklı', 'yesil-kadin-elbise', 1),
(15, 'erkek-takim-elbise.png', 'Erkek Takım Elbise ', '₺2500', 'Şık tasarımı ve modern görünüm ile özel günlerin gözdesi siz olun.', 'Şık Duruşu', 'Siyah Asilliği', 'Görünüşü', 'erkek-takim-elbise', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `usersMail` varchar(255) NOT NULL,
  `usersSifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`usersID`, `usersMail`, `usersSifre`) VALUES
(1, 'admin', 'admin');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bannerID`);

--
-- Tablo için indeksler `blogdetay`
--
ALTER TABLE `blogdetay`
  ADD PRIMARY KEY (`blogDetayID`);

--
-- Tablo için indeksler `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footerID`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizdaID`);

--
-- Tablo için indeksler `hizmet`
--
ALTER TABLE `hizmet`
  ADD PRIMARY KEY (`hizmetID`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisimID`);

--
-- Tablo için indeksler `logo_icon`
--
ALTER TABLE `logo_icon`
  ADD PRIMARY KEY (`logoID`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sliderID`);

--
-- Tablo için indeksler `teklif`
--
ALTER TABLE `teklif`
  ADD PRIMARY KEY (`teklifID`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urunlerID`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `banner`
--
ALTER TABLE `banner`
  MODIFY `bannerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `blogdetay`
--
ALTER TABLE `blogdetay`
  MODIFY `blogDetayID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `footer`
--
ALTER TABLE `footer`
  MODIFY `footerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `hakkimizdaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hizmet`
--
ALTER TABLE `hizmet`
  MODIFY `hizmetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisimID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `logo_icon`
--
ALTER TABLE `logo_icon`
  MODIFY `logoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `sliderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `teklif`
--
ALTER TABLE `teklif`
  MODIFY `teklifID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urunlerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
