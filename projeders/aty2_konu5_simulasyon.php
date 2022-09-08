<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <title>ATY-2 Konu-5</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Raleway" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script type="text/javascript">
	 function hideshow(which){
	 if (!document.getElementById)
	 return
	 if (which.style.display=="block")
	 which.style.display="none"
	 else
	 which.style.display="block"
	 }
	</script>
	
	<style type="text/css">
	<!--
	.tab { margin-left: 20px; }
	.tab2 { margin-left: 40px; }
	.tab3 { margin-left: 60px; }
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		text-align: center
	}
	-->
</style>
</head>

<body>
    <!-- Page Content -->
<h1>Araştırma ve Tasarım Yöntemleri-2</h1>
<a name="bas"><h2>5. Simülasyon Çalışmaları</h2> (Son düzenleme: <font color="red">27.5.2021</font>)<font size=4>
<p>Başlıca araştırma-geliştirme faaliyet türlerinden birisi, <i>simülasyon</i>dur. <i>Benzetim</i> de denebilir. Bir uygulamanın, olabildiğince aynı mantık veya model ilişkisiyle daha kolay başka bir ortamda gerçekleştirilmesidir. Bu ortam genellikle bilgisayar olsa da başka ortamlar da kullanılmaktadır (laserli atış simülatörü, değişken <i>g</i> (yerçekimi) simülatörü, dalga simülatörü gibi). Bu yazıda bilgisayar simülasyonları üzerinde durulacaktır.</p>
<p>Simülasyon, hızlı deneme, zayiatsız eğitim, geliştirme, bazı eksikleri fark etme, gözlenmesi zor mekanizmaları anlama vb amaçlarla yapılır.</p>
<h3>Simülasyon aşamaları</h3>
<div class="tab"><a href="javascript:hideshow(document.getElementById('modelleme'))">Modelleme</a></div>
	<div id="modelleme" style="display: none;" class="tab2" align="justify">Sistemin matematiksel-mantıksal modeli bulunur. Modellemenin mükemmel olması nerdeyse imkânsızdır. Yüzeysel bir modellemede sabit veya ideal varsayılan eleman veya özellikler, gerçekteki değişim dikkate alınarak daha ayrıntılı modellenebilir. Ancak ayrıntının sonu yoktur; bir yerde modellemeyi bitirmek gerekir.<br>
	<br>
	Matematiksel modeller diferansiyel denklemler içeriyorsa 
	diferansiyel denklem takımını <i>normal biçim</i>e getirmeye çalışırız. Normal biçim, bilinmeyenlerin tek bir bilinmeyen vektörü (<i>x</i> = [<i>x</i><sub>1</sub> <i>x</i><sub>2</sub> ... <i>x</i><sub><i>n</i></sub> ]<sup>T</sup>) olarak düşünüldüğü 1. mertebeden <i>n</i> boyutlu şöyle bir vektör diferansiyel denklemdir:<br>
	<i>x</i>'(<i>t</i>) = <i>f</i>(<i>x</i>(<i>t</i>))<br>
	Burada <i>f</i> fonksiyonu <i>n</i> boyutlu bir vektör olup başka değişken veya parametrelere de bağlı olabilir. Önemli olan, bütün türevli terimlerin eşitliğin solunda <i>x</i>' diye toparlanabilmesidir. Bu vektör diferansiyel denklem, <i>n</i> adet 1. mertebeli skaler denklem içermekte olup <i>n</i>. mertebeden bir sistemi ifade etmekte kullanılır. Yani aslında denklem takımı <i>n</i>. mertebedendir. Anlatım kolaylığı için bağımsız değişkeni zaman (<i>t</i>) aldık ama aslında uzaysal veya çoklu bağımsız değişkenler de olabilir.<br>
	<br>
	Diferansiyel denklemleri genellikle ayrık modellemeyi tercih ederiz. Yani diferansiyel denklemdeki sonsuz küçük değişim yerine çok küçük bir &Delta;<i>t</i> değeri atayarak modeli düzenleyip kullanırız. Bunun da en kolay yolu ileri Euler metodudur:<br>
	<i>x</i>(<i>t</i>+&Delta;<i>t</i>) = <i>x</i>(<i>t</i>) + <i>f</i>(<i>x</i>(<i>t</i>))&Delta;<i>t</i><br>
	Modelde anahtarlama, karşılaştırma gibi çeşitli ayrık olaylar da bulunabilir.
	</div>
	<br>
<div class="tab"><a href="javascript:hideshow(document.getElementById('programlama'))">Programlama</a></div>
	<div id="programlama" style="display: none;" class="tab2" align="justify">
		<u>Simülasyon parametreleri:</u> Başlama ve bitiş zamanları, &Delta;<i>t</i> gibi istendiği gibi seçilir.<br>
		<u>Sistem parametreleri:</u> Direnç, kapasitans, kütle gibi sabit değerler atanır.<br>
		<u>Kontrol parametreleri:</u> Kazanç katsayıları, eşik değerler vb atanır.<br>
		<u>Ön hesaplamalar:</u> Her döngü adımında gereksiz yere tekrarlanması istenmeyen işlemleri bir defa başta yapılır.<br>
		<u>Boyutlandırmalar:</u> Vektörlerin, dizilerin boyutları sınırlı olarak baştan belirlenir. Aksi halde döngü sırasında boyut yetmezsse ara ara boyut artırmak döngüyü çok yavaşlatır.<br>
		<u>Başlangıç değer atamaları:</u> Diferansiyel denklemler ve integraller genellikle belirli başlangıç değerlerine göre çözülür.<br>
		<u>Döngü:</u> Her bir zaman veya simülasyon adımı içinde yapılacaklar döngü içinde belirlenir. Simülasyonun en önemli kısmıdır. Fikirlerin çoğu burada denenir. Genellikle şöyle kısımlardan oluşur:<br>
		<div class="tab" align="justify"><u>Sistemin bir adım ilerleyişi:</u> Meselâ ileri Euler metoduna göre <i>x</i> durum değişkenlerinin yeni değerleri belirlenir.</div>
		<div class="tab" align="justify"><u>Kontrol:</u> Girişlerin atandığı kısımdır. Önceden belirlenmiş sabit veya değişken giriş (voltaj gibi) uygulanabilirse de genellikle sistemin <i>x</i> durum değişkenleri veya başka koşullara göre zamanı geldikçe karar verilen girişler kullanılır. Kontrol, döngüde sistemin bir adım ilerletilmesinden önce de yer alabilir. Önemlisi kontrolün nedensel olmasıdır. Yani gerçek uygulamada henüz elde olamayacak bilginin kullanılmamasıdır. Hatta gerçek uygulamada işlem zamanı gecikmesi olacaksa, ölçümler aynı andaki girişlerin hesabında değil sonraki anın girişleri için kullanılmalıdır.</div>
		<div class="tab" align="justify">İstenirse döngü içinde çeşitli görüntülemeler veya kayıtlar yapılabilir.</div>
		<u>Görüntüleme ve kayıt:</u> Sonuçlar çizdirilir, çizimler süslenir veya düzenlenir. Sonuçlar bir dosyaya kaydedilebilir. Grafikleri bir tez veya rapora yerleştirmek üzere düzenliyorsak çok muhtemeldir ki defalarca geri dönüp, bir şeyleri değiştirip grafikleri yenileme ihtiyacı duyarız. Bu yüzden bu düzenleme (legend tanımlama, üzerine veya eksenlere yazı yazma, çizgi veya arka plan renk ve biçimlerini belirleme vb) işlerini manuel değil programla yapmak, zaman kaybını oldukça azaltır.<br>
	</div><br>
<div class="tab"><a href="javascript:hideshow(document.getElementById('gelistirme'))">Geliştirme</a></div>
	<div id="gelistirme" style="display: none;" class="tab2" align="justify">Program çalıştırılır. Denenen fikirlerin sonuçlarından memnun olmazsak fikirleri düzenleyip veya değiştirip tekrar tekrar programlayıp çalıştırırız. En sonunda ya fikirlerimizin işe yarar olmadığını anlarız, ya da geliştirmelerimize son halini verip sıradaki ar-ge adımlarına geçeriz. Deneysel aşamaya geçmişsek orada karşılaşacağımız bazı sorunları aşmak için zaman zaman simülasyon çalışmasına dönmemiz gerekebilir.</div>
<h3>Örnek</h3>
<p>DC servo motorunun matematiksel modeli şöyledir:</p>
<i>v<sub>a</sub> = K<sub>b</sub>&omega; + R<sub>a</sub>i<sub>a</sub> + L<sub>a</sub> di<sub>a</sub>/dt</i><br>
<i>K<sub>b</sub>i<sub>a</sub> = T<sub>L</sub> + B<sub>f</sub> &omega; + J<sub>i</sub> d&omega;/dt</i><br>
<p>Burada <i>v<sub>a</sub> , i<sub>a</sub> , R<sub>a</sub> , L<sub>a</sub> </i>sırasıyla armatür gerilimi, akımı, direnci ve endüktansı, <i>K<sub>b</sub></i> zıt emk katsayısı (aynı zamanda tork katsayısı), <i>B<sub>f</sub></i> sürtünme katsayısı, <i>J<sub>i</sub></i> eylemsizlik momenti, <i>T<sub>L</sub></i> ise yük torkudur. Diferansiyel denklem takımını normal biçime getirirsek:</p>
<img src="https://atasevinc.net/emd/dcservomodel.png">
<p>Bu modelin sabit voltaj ve sabit yük torku altında MATLAB ortamında simülasyonu <a href="https://atasevinc.net/projeders/dcservomotor.m">şu dosyada</a> programlanmıştır. Motor parametreleri ve yük torku için, <a href="https://atasevinc.net/emd/dcservomotordesign.php">DC servo motor tasarımı</a> sayfasından</p>
<p class="tab"><i>v<sub>a</sub></i> = 250V<br>
<i>n</i> = 1200rpm<br>
<i>P<sub>o</sub></i> = 800W<br>
Verim = 0.90<br>
<i>k<sub>ml</sub></i> = 0.5<br>
&tau;<sub><i>elc</i></sub> = 0.5s<br>
&tau;<sub><i>mec</i></sub> = 0.5s</p>
<p>taleplerine göre tasarlanan değerler kullanılmıştır. Aslında servo motorlarda zaman sabitleri çok küçük olur ama Euler metoduyla simülasyonun hızlı değişimlerde hassas olması için &Delta;<i>t</i> 'yi çok küçültmek zorunda kalmamak için zaman sabitleri büyük alınmıştır.</p>
<p>Dikkat: Örnek dosyada simülasyon <i>i<sub>a</sub></i> ve &omega; durum değişkenlerine göre yapılmıştır. Ancak ödevle uyumlu olması için <i>i<sub>a</sub></i> ve <i>n<sub>r</sub></i> = 30&omega;/&pi; değişkenlerinin grafikleri çizdirilmiştir.</p>
<!-- <p class="tab"><i>R<sub>a</sub></i> = 3.515625 &Omega;<br>
<i>L<sub>a</sub></i> = 3.515625 H<br>
<i>K<sub>b</sub></i> = 1.88996494922 Nm/A (veya Vs/rad)<br>
<i>B<sub>f</sub></i> = 0.0028144773234 Nm.s/rad<br>
<i>J<sub>i</sub></i> =  0.0028144773234 kg.m<sup>2</sup><br>
<i>T<sub>L</sub></i> = 6.36619772368 Nm (sabit kullanılmıştır.)
</p>
-->
</font>	
</body>
</html>
