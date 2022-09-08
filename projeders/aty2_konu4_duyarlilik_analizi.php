<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <title>ATY-2 Konu-4</title>

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
<a name="bas"><h2>4. Duyarlılık Analizi</h2> (Son düzenleme: <font color="red">23.5.2018</font>)<font size=4>
<p>Başlıca araştırma konularından birisi, büyüklükler arasında ilişki bulmaktır. Ancak iki büyüklük arasındaki ilişkiyi bulmak çoğu durumda yetmez. Çünkü bu büyüklüklerin başka nelerden etkilendiği de önemlidir. Ayrıca birden fazla etkene bağlı bir büyüklüğün, bu etkenlerin tek tek her birindeki değişikliklerden ne kadar etkilendiği de çok önemlidir. Bunun için <i>duyarlılık analizi</i> yapılması tavsiye edilir. Duyarlılık analizi, tahminde bulunmak için alınacak ölçümlerin yeterince <i>ayırt edici</i>  olup olmadığını anlamaya da yarar.</p>
<p>Meselâ bir kanser testi düşünelim. Bu test, hedef kitlede gerçekten kanser olanların %95'inde pozitif, kanser olmayanların da %10'unda pozitif sonuç veriyor olsun. İstatistiksel olarak hedef kitlenin %1'i kanser olsun. Sizce bu teste ne kadar güvenilebilir? Sayısal konuşabilmek için soruyu şöyle soralım, bu test sonucu pozitif çıkan hedef kitleden bir insanın gerçekten kanser olma ihtimali nedir? Önce hislerinizle tahmin edip sonra hesaba bakın.</p>
<div class="tab">Hedef kitlenin ne kadarı hem kanserdir hem testte pozitif çıkar? 0,01*0,95 = 0,0095<br>
Hedef kitlenin ne kadarı hem kanser değildir hem testte pozitif çıkar? 0,99*0,10 = 0,099<br>
Hedef kitlenin ne kadarı testte pozitif çıkar? 0,099 + 0,0095 = 0,1085<br>
Hedef kitlenin testte pozitif çıkanlar içinde gerçekten kanser olanların oranı? 0,0095/0,1085 = 0,088 = %8,8 !!!</div>
<p>Görüldüğü gibi duyarlılık analizi yapılmadan böyle bir testi uygulamaya sunmak, testte pozitif çıkan insanların %90'ından fazlasına yanlış alarm verdirerek hayatlarını bir sürelik kâbusa çevirebilir.</p>
<p>Meselâ bir yarıiletken elektronik elemanın çalışma frekansı hem iç direnç hem de eklem kapasitansı tarafından sınırlandırılmaktadır. Bu frekans sınırını artırmak için iç direnci mi yoksa eklem kapasitansını mı azaltmaya daha fazla odaklanmak gerektiğini, frekans sınırını belli bir miktar artırma maliyetinin bu iki parametreye göre duyarlılık analizini yaparak anlayabiliriz.</p>
<p>Meselâ devredeki bilinmeyen ve yavaşça değişebilen bir direnci tahmin etmeye çalışıyor olalım. Bunun için de kısıtlı sayıda ölçüm sinyali ölçme imkânımız olsun. Diğer tüm uygulama şartları aynı iken, o dirençteki küçük bir değişikliğin bu ölçümlerden her birini ne kadar etkilediğine bakıp en çok etkilenen sinyal üzerinden tahmin yapmanın daha uygun olacağını düşünebilirsiniz; ama bu yeterince doğru değildir. Devrede değişebilen başka parametreler de varsa, ölçebildiğimiz sinyallerin diğer parametrelerden ne kadar etkilendiğine de bakmamız gerekir. Kullanmamız gereken en uygun sinyal, diğer parametrelerdeki değişimlerden az, tahmin edilecek dirençten çok etkilenen sinyaldir. Yani ayırt edici bilgi içeren sinyal olmalıdır.</p>

<p><i>p</i>  gibi bir parametreye de bağlı <i>y</i>  gibi bir büyüklüğün   <i>p</i>’deki değişime <i>duyarlılığı</i> oransal olarak şöyle tanımlanır:</p>
<img src="https://atasevinc.net/projeders/duyarlilik.png" class="tab2">
<p>Birimsiz bir değerdir ve diğer tüm parametreler sabit tutulurken yalnız ilgili parametredeki çok küçük oransal değişimler için geçerlidir. Meselâ duyarlılık 0,4 ise bunun anlamı, <i>p</i>’deki çok küçük değişim oransal olarak ne kadar ise, <i>y</i>’de bunun 0,4 katı kadar oransal değişime neden olduğudur. Meselâ <i>p</i> = 2,00 iken <i>y</i> = 8,00 ise; diğer tüm parametreler aynı kalıp <i>p</i> = 2,10 olursa (%5 artış), <i>y</i> &asymp; 8,16  olmaktadır (%5*0.4 = %2 artış).</p>
<p>Duyarlılık negatif de olabilir. Bu durumda ilgili parametre artarken, o büyüklüğün azaldığı anlamına gelir. Genellikle sabit olmayıp ilgili parametrenin veya diğer büyüklüklerin aldığı değerlere göre başka başka olabilir. Genellikle belli bir çalışma bölgesi civarı ile ilgileniriz. Ayrıca</p>
<img src="https://atasevinc.net/projeders/duyarlilik_tersi.png" class="tab2">
<p>olduğu, tanımdan açıkça görülmektedir. Yani <i>y</i>’nin, <i>p</i>’ye duyarlılığı ne kadar yüksekse, <i>p</i>’nin <i>y</i>’ye duyarlılığı da o denli azdır.</p>
<p><b>Örnek:</b> Koninin yüzey alanı(<i>A</i>), taban yarıçapı(<i>r</i>) ve yükseklikten(<i>h</i>) hangisine daha duyarlıdır? <i>r</i> = 0,15m ve <i>h</i> = 0,20m civarı için bulalım.</p>
<p><i>Çözüm: A = &pi;r&radic;</i><span style="text-decoration:overline;"><i>r</i><sup><font size=1>2</font></sup>+<i>h</i><sup><font size=1>2</font></sup></span> = 0,11781 m<sup>2</sup><br>
Meselâ <i>r</i>'yi %1 artırsak yani 1,01 ile çarpsak <i>r</i> = 0,1515m, <i>h</i> aynı kalsa <i>A</i> = 0,11942 m<sup>2</sup> olur. Yani<br>
<img src="https://atasevinc.net/projeders/D_A_r.png" class="tab2"><br>
<i>r</i> aynı kalsa <i>h</i> &nbsp;%1 artırılsa, <i>h</i> = 0,202m ve <i>A</i> = 0,11857 m<sup>3</sup> olur. Yani<br>
<img src="https://atasevinc.net/projeders/D_A_h.png" class="tab2"><br>
(Paydadaki 0,01, ilgili parametredeki oransal artış olup <i>r</i> ile <i>h</i> için aynı alınmak zorunda değildi.)<br>
Demek ki alanın yarıçapa duyarlılığı, yüksekliğe duyarlılığının yaklaşık 2 katı imiş (<i>r</i> = 0,15m ve <i>h</i> = 0,20m civarı için).</p>
<p><b>Örnek:</b> <i>x</i>, <i>y</i>, <i>z</i> değişkenlerinin hepsi,  <i>a</i>, <i>b</i>, <i>c</i> <i>d</i>, parametrelerinden etkilenmektedir. Parametrelerin her birinin tek başına çok küçük değişimine göre değişkenlerin ne kadar etkilendiğini gösteren duyarlılıklar hesaplanarak tabloda gösterilmiştir.</p>
<table style="width:100%">
  <tr>
    <th>...</th>
    <th><i>D</i>(<i>x</i>,...)</th>
    <th><i>D</i>(<i>y</i>,...)</th> 
    <th><i>D</i>(<i>z</i>,...)</th>
  </tr>
  <tr>
    <td><b><i>a</i></b></td>
    <td>2,20</td>
    <td>-1,35</td>
    <td>0,03</td>
  </tr>
  <tr>
    <td><b><i>b</i></b></td>
    <td>-1,45</td>
    <td>0,07</td>
    <td>-0,05</td>
  </tr>
  <tr>
    <td><b><i>c</i></b></td>
    <td>-0,10</td>
    <td>0,09</td>
    <td>-0,53</td>
  </tr>
  <tr>
    <td><b><i>d</i></b></td>
    <td>0,36</td>
    <td>1,18</td>
    <td>0,24</td>
  </tr>
</table>
<p><b>Soru:</b> <i>y</i> ve <i>z</i> en az etkilenecek şekilde <i>x</i> değişkenini ayarlamak için hangi parametre kullanılmalıdır?<br>
<b>Cevap:</b> <i>x</i>'in en duyarlı olduğu parametre <i>a</i> olsa da, <i>y</i> de <i>a</i>'ya oldukça(<i>x</i> 'in yarısından çok) duyarlı olduğu için <font color="red"><i>a</i></font> iyi bir tercih sayılmaz.<br><i>x</i> 'in ikinci duyarlı olduğu parametre <i>b</i> olup, <i>y</i> ve <i>z</i> 'yi çok az etkilemektedir. Bu yüzden <i>b</i> iyi bir tercihtir.<br>
<i>x</i> 'in <i>c</i> ve <i>d</i> 'ye duyarlılığı az olduğu gibi <i>y</i> ve <i>z</i> 'nin bu ikisine duyarlılığı da yakın veya daha çoktur. Bu yüzden <i>x</i> 'i ayarlamak için <i>c</i> ve <i>d</i> kötü tercihtir.</p>

<p><b>Soru:</b> <i>d</i> bilinmeyen ve çalışma sırasında biraz değişebilen bir parametre olsun. <i>d</i> 'yi değişirken tahmin etmek için <i>x</i>, <i>y</i> ve <i>z</i> sinyal ölçümlerinden hangisi kullanılmalıdır?<br>
<b>Cevap:</b> Diğer parametreler <i>a</i>, <i>b</i>, <i>c</i> sabitse kuşkusuz <i>d</i> 'ye en duyarlı olan <i>y</i> sinyali kullanılmalıdır. Ancak meselâ <i>a</i> da <i>d</i> gibi çalışma sırasında değişebilen bir parametre ise <i>y</i> sinyali <i>a</i> 'ya da çok duyarlı olduğu için <i>d</i> 'yi tahmin etmek için ayırt edici olmaz. <i>x</i> sinyalinin ayırt ediciliği de aynı sebeple daha da kötüdür. Bu yüzden hem <i>a</i> hem <i>d</i> çalışma sırasında değişirken <i>d</i> 'yi tahmin etmekte kullanılması en uygun sinyal <i>z</i> 'dir, tabii <i>c</i> sabitse. <i>d</i> 'ye en az duyarlı sinyal olmasına rağmen <i>z</i> 'nin ayırt ediciliği daha yüksek olduğu için.</p>
<p>Duyarlılık analizi, sözel iletişimde algı operasyonları da denilen, karşı tarafı yanıltma ve yanlış yönlendirme girişimlerine karşı mutlaka hesaba katılması gereken bir düşünce ve hesap biçimidir. Meselâ bir tartışmada bir taraf, "<i>X zümresi a suçunu çok işliyor</i>" diye iddia edebilir. Siz de istatistiksel olarak bakıp bu iddianın doğru olduğunu görebilirsiniz. Ama bu sizi haksız bir değerlendirmeye sevk etmemelidir. Çünkü <i>Y zümresi</i> de <i>a suçunu</i> çok işliyor olabilir, <i>Z zümresi</i> belki daha da çok işliyor olabilir. Dahası, <i>Y ve Z zümrelerinin çokça işlediği daha büyük b ve c suçları</i> da olabilir. Tüm bunları etraflıca değerlendirebilmek için istatistiksel verilerle zihninizde bir duyarlılık analizi yapmalısınız. Aksi halde sizi haksız yere bir zümreye düşman edebilirler.</p>
<p>Benzer şekilde tasarımda bir yöntem veya bir eleman kullanımı çok ekonomik ve kullanışlı görülebilir; ancak daha ekonomik ve kullanışlı başka çözümler de olabileceğini unutmamalısınız. Bunların avantaj ve dezavantajlarını karşılaştırmak da benzer bir analizdir.</p>
</font>	
</body>
</html>
