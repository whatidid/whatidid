<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ATY-1 Konu-7</title>
	<style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
		text-align: center;
      }
    </style>
</head>
<body>
<h1>Araştırma ve Tasarım Yöntemleri-1</h1>
<h2>7. İşlemlerde Belirsizlik</h2> (Son düzenleme: <font color="red">23.1.2021</font>)<font size=4>
<p>Sayısal ölçümlerde kaçınılmaz olarak bir miktar belirsizlik bulunur. Bu sayılarla işlem yaptıkça bu belirsizlikler işlemler boyunca birikerek devam eder.</p>
<p>Sınavlarda hocalara sıkça sorulan bir soru: "<i>Sayıları virgülden (ondalık ayracından) sonra kaç rakam alalım?</i>"</p>
<p>Bu sorunun sınavdaki tüm işlemleri kapsayan bir cevabı genellikle yoktur. Ancak sayılara, belirsizliklere ve işlemlere göre değişen kuralları vardır. Öncelikle sayılardaki belirsizliklerin ifade ediliş biçimlerini görelim. Sonra işlemler sırasında bu belirsizliklerin nasıl ilerlediğini görelim.</p>

<h3>7.1 Belirsizliği İfade Etme Biçimleri</h3>
<h4>7.1.1 Önemli rakamlarla belirtme</h4>
<p>Ondalık ayracından (nokta ya da virgül) sonra sadece bilinen veya ilgilenilen kadar rakam yazılır. Son rakam yuvarlatılmıştır. Ondalık ayracından sonra en sağda olsa bile rakamın sıfır olduğu biliniyorsa bu sıfır yazılır. Böylece belirsizliğin derecesi ifade edilmiş olur.<br>
<i>x</i> = 3,48 örneğinde 3,475 &le; <i>x</i> &lt; 3,485 demektir.<br>
<i>x</i> = 12,0705 örneğinde 12,07045 &le; <i>x</i> &lt; 12,07055 demektir.<br>
<i>x</i> = 3,290 örneğinde 3,2895 &le; <i>x</i> &lt; 3,2905 demektir. Bu kurala göre 3,29 ile 3,290 anlamca farklıdır!</p>
<p>Ondalık ayracı kullanılmamışsa aksi belirtilmedikçe en sağdaki sıfırların belirsizlik ifade ettiği, bu sıfırlardan hemen önceki rakamın da yuvarlatıldığı varsayılır.<br>
<i>Maçı stadda 80000 seyirci izledi.</i> Burada seyirci sayısı 75000'den itibaren 85000'e kadar olabilir demektir.<br>
<i>67000 seyirci</i> denilseydi 66500'den itibaren 67500'e kadar olabilen seyirci anlaşılırdı.<br>
Sağdaki sıfırların bir kısmı belirli olduğu halde sıfır da olabilir. Bunu vurgulamak gerekirse belirli kısmının üzerine çizgi çizilir.<br>
<br>
<i>Işık hızı c = <span style="text-decoration:overline;">300</span>000 km/s ölçülmüştü.</i> Bu veriden anlaşılan, 299500 km/s &le; <i>c</i> &lt; 300500 km/s olduğudur.</p>
<p>Aksi belirtilmedikçe <i>önemli rakamlar</i>,<br>
&nbsp;&nbsp;&nbsp;● Ondalık ayracı kullanılmışsa yazılan tüm rakamlardır.<br>
&nbsp;&nbsp;&nbsp;● Ondalık ayracı kullanılmamışsa sağdaki sıfırlar hariç yazılan tüm rakamlardır.<br>
&nbsp;&nbsp;&nbsp;● Tam değerler için bütün rakamlar önemlidir. Önemli rakam sayısı sonsuz denilebilir. Mesela günümüzde ışık hızı tam olarak <i>c</i> = 299792458 m/s'dir, çünkü yeni <i>metre</i> tanımı buna göredir. &pi;, &radic;<span style="text-decoration:overline;">3</span>, sin(70&deg;) gibi hesaplayıcımızda ihtiyacımızdan çok daha fazla belirli rakamla kullanabildiğimiz sayıları da tam düşünebiliriz. Burada "tam" derken tamsayı kastedilmiyor ama kolayca sayılabilen tamsayı değerler ve para tutarları da genellikle tam değerlerdir.<p>
<p>Bilimsel (katsayı×10^kuvvet biçimi) gösterimlerde bu kurallar katsayı kısmı için geçerlidir.</p>

<h4>7.1.2 &nbsp; &plusmn; belirsizlik</h4>
<p>Belirsizliğin en belirgin ifade şeklidir.<br>
<i>x</i> = 0,575 &plusmn; 0,003<br>
örneğinde 0,572 &le; <i>x</i> &le; 0,578 demektir.</p>
<p>Belirsizlik nadiren hem artı hem yönde değil de sadece tek yönlü olabilir. Mesela<br>
<i>x</i> = 2,69<br>
gösteriminde ondalık ayracından sonra yazılan son rakam aşağı yuvarlanmış ise<br>
2,69 &le; <i>x</i> &lt; 2,70<br>
demektir. Fakat tek yönlü belirsizlik için yaygın bir notasyon olmadığı için bunu<br>
<i>x</i> = 2,695 &plusmn; 0,005<br>
biçiminde yaygın notasyonlardan biriyle gösterebiliriz.</p>
<p>Belirsizlik miktarı da genellikle belirsizlik içerdiği için belirsizliğin birden fazla önemli rakamla yazılması pek hoş karşılanmaz, hatta bazen aldatıcı sayılır. Ancak anlamlı rakam 1 ile başlıyorsa bir rakam daha yazılması uygundur. Asıl sayının belirsizliğe göre bilinemeyecek kadar fazla önemli rakamla yazılması da uygun değildir, aldatıcıdır.<br>
Aşağıdaki örneklerde kırmızıyla yazılan kısımlar uygunsuzdur:<br><br>
<i>x</i> = 13,24 &plusmn; 0,03<font color="red">3</font><br>
<i>x</i> = 22,180 &plusmn; 0,015 (Uygun)<br>
<i>x</i> = 5,75<font color="red">6</font> &plusmn; 0,02</p>
<p>Fakat onlu (<i>decimal</i>) yerine ikili (<i>binary</i>) ya da onaltılı (<i>hexadecimal</i>) gibi başka bir sayı sistemindeki bir rakamlık belirsizlik miktarının onluk sistemdeki karşılığının birden fazla önemli rakamla yazılması uygun sayılabilir.<br>
Mesela <br>
<i>x</i> = <i>y</i> &plusmn; 2<sup>-3</sup> = <i>y</i> &plusmn; 0,125</p>

<h4>7.1.3 &nbsp; &plusmn; oransal belirsizlik</h4>
<p>Belirsizlik miktarı asıl sayıya oranla belirtilir. Oran ise genellikle yüzde (%) ile gösterilir.<br>
<i>x</i> = 6,83 &plusmn; %1<br>
örneğinde 6,76 &le; <i>x</i> &le; 6,90 demektir.</p>
<p>Belirsizlik oranı sınırları da bir veya nadiren iki önemli rakamla belirtilmelidir, abartılması yersizdir. Mesela &plusmn; %1,5 olabilir ama &plusmn; %3,7 yerine yuvarlatıp %4 yazmak daha uygundur.</p>

<h3>7.2 İşlem Sonuçlarındaki Belirsizlik</h3>
<p>İşlemlerde farklı terimlerden gelen belirsizliklerin etkileri asla birbirini sadeleştirecek şekilde düşünülmez (gerçekte bazen sadeleşseler bile garantisi olmadığından), hep mutlak değerce belirsizliği artıracak şekilde etkileştikleri düşünülür. Fakat işlemlerden veya fonksiyondan dolayı belirsizlik azalıyor da olabilir.</p>

<h4>7.2.1 Toplama ve çıkarmada</h4>
<p>Belirsizliklerin oranları değil mutlak değerce miktarları toplanır. Yeni belirsizliğin de fazla detaylı yazılması yersizdir.<br>
<i>x</i> = 52,1 &plusmn; 0,7<br>
<i>y</i> = 1,25 &plusmn; 0,13<br>
<i>x - y</i> = <font color="red">50,85 &plusmn; 0,83</font><br> gibi görünse de bu uygun değildir.<br>
<i>x - y</i> = 50,9 &plusmn; 0,8 yazılmalıdır.</p>
<p>&plusmn; belirsizlik gösterilmeden sadece önemli rakamlarla belirsizlik taşınıyorsa, toplama ve çıkarma işleminin sonucu, büyük olan belirsizliğe göre yazılır. Fakat aynı belirsizlik seviyesindeki çok sayıda sayıyı toplayıp çıkartıyorsak sonuçtaki belirsizlik, sayıların adedi ile her birinin belirsizliğinin çarpımı kadar olur.</p>
<p>Aşağıdaki örnekte kuruş çözünürlüğünde verilen para miktarları tamdır. Bu yüzden toplamları da tamdır (sol sütun). Ancak diyelim ki bunları zihinden kabaca toplamak istiyorsak ve lira cinsinden tamsayıya yuvarlatarak işlem yapıyorsak, her biri &plusmn; 0,5 TL belirsizliğinde 8 adet sayı olduğundan, sonuç &plusmn; 4 TL belirsizliğindedir. Bu da, belirsizliği bir rakam daha artırılarak 10'un katlarına yuvarlatılmış (&plusmn; 5 TL) belirsizliğe daha yakın olduğundan, sonuç 10'un katlarına yuvarlatılmayı hak ediyordur.<p>
<table>
  <tr><th>Sıra</th><th>Tam (TL)</th><th>Yaklaşık (&plusmn;0,5)(TL)</th></tr>
  <tr><td>1</td><td>147,13</td><td>147</td></tr>
  <tr><td>2</td><td>62,25</td><td>62</td></tr>
  <tr><td>3</td><td>18,95</td><td>19</td></tr>
  <tr><td>4</td><td>3,37</td><td>3</td></tr>
  <tr><td>5</td><td>26,43</td><td>26</td></tr>
  <tr><td>6</td><td>51,86</td><td>52</td></tr>
  <tr><td>7</td><td>37,60</td><td>38</td></tr>
  <tr><td>8</td><td>75,50</td><td>76</td></tr>
  <tr><td>Toplam</td><td>423,09</td><td>423 &plusmn; 4 &approx; 420</td></tr>
</table>
<p>Bu örnekte artı ve eksi yöndeki yuvarlamalar birbirini kısmen yok ettiği için hesaplanan belirsizlikten daha hassas sonuç bulundu ama bunun garantisi yoktur. Bu belirsizliğin standart sapmasını değiştirir ama o konuya girmeyeceğiz.</p>

<h4>7.2.2 Çarpma ve bölmede</h4>
<p>Hem çarpmada hem bölmede belirsizlik <u>oranları</u> toplanır. Sonuçta belirsizliğe göre fazla detay varsa, sonuç belirsizliğine uygun yerden yuvarlatılır. Sonuç belirsizliğinde de yersiz detay varsa o da yuvarlatılır.</br>
<i>x</i> = 277 &plusmn; %1,8<br>
<i>y</i> = 18,47 &plusmn; %0,3<br>
<i>x * y</i> = <font color="red">5116,19 &plusmn; %2,1</font><br> gibi görünse de detaylar yersizdir.<br>
<i>x * y</i> = 5100 &plusmn; %2 yazılmalıdır.</p>
<p>Belirsizlik &plusmn; ile değil de sadece önemli rakamlarla ifade edilmişse, çarpma veya bölmenin sonucu, bu iki sayıdan daha az sayıda önemli rakamlı olanınki kadar önemli rakama yuvarlatılarak yazılmalıdır.<br>
<i>x</i> = 3200<br>
<i>y</i> = 2,51<br>
<i>x * y</i> = <font color="red">8032</font><br> gibi görünse de detaylar yersizdir.<br>
<i>x * y</i> = <span style="text-decoration:overline;">80</span>00 (iki önemli rakamla) yazılmalıdır.</p>
<p>Bölmede de kural aynıdır. Bilimsel gösterimli sayılarda da bu kural katsayı kısmında aynı şekilde uygulanır.</p>

<h4>7.2.3 Genel işlem veya fonksiyonlarda</h4>
<p>● Belirsizlik içeren sayıların her biri yerine birer sembol yazılarak işlem bir fonksiyon şeklinde yazılır. Fonksiyonun diferansiyeli (türevle aynı şey değil) alınır. Her sembolün diferansiyeli anlamına gelen "<i>d</i>" operatörü yerine belirsizliği anlamında "&Delta;" yazılır. Bu belirsizlik ifadesindeki toplam terimlerinin eksi olup olmamasına bakılmaksızın mutlak değerce toplama dönüştürülür. Şimdi sayılar ve belirsizlikler (&Delta;'lılar) yerine yazılarak sonucun belirsizliği genellikle yeterli yaklaşıklıkla bulunur.</p>
<p><u><i>Örnek:</i></u> <i>y</i> = <i>a</i>*<i>x</i> + 2*cos&theta;
formülündeki sembollerdeki belirsizlikler<br>
&Delta;<i>a</i> = 0,02 ; &nbsp;&Delta;<i>x</i> = 0,15 ; &nbsp;&Delta;&theta; = 0,007 rad
<br> olduğuna göre,<br>
<i>a</i> = 0,91 ; &nbsp; <i>x</i> = 2,36 ; &nbsp; &theta; = 1,442 rad<br>
komşuluğunda <i>y</i> 'deki belirsizlik &Delta;<i>y</i> ne kadardır?<br>
<br>
<i>Çözüm: dy = x*da + a*dx</i> - 2*sin&theta;*<i>d</i>&theta;<br><br>
&Delta;<i>y</i> = <i>x</i>*&Delta;<i>a</i> + <i>a</i>*&Delta;<i>x</i> + 2*sin&theta;*&Delta;&theta;<br><br>
&Delta;<i>y</i> = 2,36*0,02 + 0,91*0,15 + 2*sin(1,442)*0,007 = 0,2<br><br>
<i>y</i> değerini de bularak birlikte verelim:<br><br>
<i>y</i> = 0,91*2,36 + 2*cos(1,442) = 2,4<br><br>
Yani <i>y</i> = 2,4 &plusmn; 0,2<br><br>
İstenirse <i>y</i> = 2,4 &plusmn; %8 diye de yazılabilir (0,2/2,4 &approx; 0,08 olduğu için).</p>
<p>● Eğer formül <u>sadece</u> belirsizlik içeren sembollerin çeşitli kuvvetlerinin çarpımı (veya bölümü, kesri) ise <u>oransal</u> belirsizlik, tek tek sembollerdeki belirsizlikler cinsinden basit bir formül olarak da bulunabilir. Bunun için az önce belirtilen işlemler, fonksiyonun doğal logaritmasının (<i>ln</i>) diferansiyeline uygulanır.</p>
<p><u><i>Örnek:</i></u> Silindir şeklindeki bir cismin kütlesi <i>m</i>, taban yarıçapı <i>r</i>, yüksekliği <i>h</i> ölçülerek kütlesel yoğunluğu &rho; hesaplanacaktır. Hesaplanan yoğunluktaki oransal belirsizliği (&Delta;&rho;/&rho;), her bir ölçümdeki oransal belirsizlikler cinsinden formül halinde yazınız. Sonra &Delta;<i>m</i>/<i>m</i> = %0,1 ; &Delta;<i>r</i>/<i>r</i> = %0,07 ; &Delta;<i>h</i>/<i>h</i> = %0,09 belirsizlikleri için &Delta;&rho;/&rho; 'yu hesaplayınız. &pi; sayısının da 3,14 alınmasının getirdiği (&pi;-3,14)/&pi; = 0,0005 = %0,05 hatayı da belirsizlik (&Delta;&pi;/&pi;) olarak hesaba katınız.<br>
<br>
<i>Çözüm:</i> Silindirin hacmi = &pi;*<i>r</i><sup>2</sup>*<i>h</i> olduğundan<br><br>
Yoğunluk = &rho; = <i>m</i> / (&pi;*<i>r</i><sup>2</sup>*<i>h</i>)<br><br>
<i>ln</i>(&rho;) = <i>ln</i>(<i>m</i>) - <i>ln</i>(&pi;) - 2*<i>ln</i>(<i>r</i>) - <i>ln</i>(<i>h</i>)<br><br>
&pi; için de hata olacağından onu da değişken gibi düşüneceğiz:<br><br>
(<i>d</i>&rho;/&rho;) = (<i>dm/m</i>) - (<i>d</i>&pi;/&pi;) - 2*(<i>dr/r</i>) - (<i>dh/h</i>)<br><br>
(&Delta;&rho;/&rho;) = (&Delta;<i>m/m</i>) + (&Delta;&pi;/&pi;) + 2*(&Delta;<i>r/r</i>) + (&Delta;<i>h/h</i>)<br><br>
bulunur. Verilen oransal belirsizlikleri yerine yazarsak yoğunluk hesabındaki oransal hata:<br><br>

(&Delta;&rho;/&rho;) = %0,1 + %0,05 + 2*(%0,07) + %0,09 &approx; %0,4 bulunur.</p>

<p>Görüldüğü gibi oransal hata, bu durumda parametrelerin değerlerinden bağımsız, sadece onlardaki oransal belirsizliklere bağlı. 7.2.2 başlığı altında, belirsizlik oranlarının toplandığının söylenme nedeni de budur.</p>
</body>
</html>