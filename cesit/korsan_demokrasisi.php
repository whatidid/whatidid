<html>
 <head>
  <title>Korsan demokrasisi</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body bgcolor="#33CCFF" text="#000000">
  Bu soru, Matematik Dünyası Dergisi'nden alınmış ve düzenlenerek interaktif bir bilmece haline getirilmiştir.
  Cevabı ve cevabın değerlendirilme şekli ise alıntı değildir; hata varsa bana aittir.
  </br></br>KORSAN DEMOKRASİSİ</br>
  <abbr title="Mantık hatası yapmayacak kadar muhakeme yeteneği olan, fakat bir sonraki adımda alabileceğinden 1 altın fazla önermedi diye arkadaşını denize attıracak kadar acımasız, ve birbirlerinin bu özelliklerini bilen.">
<font color="#008000"><u>Zeki ve vijdansız</u></font></abbr> 5 korsan, gaspettikleri 100 altını kendilerince demokratik(!) bir yolla paylaşmaya karar verirler. Buna göre 1. korsandan itibaren sırası gelen, bir paylaşım teklif edecek ve bu teklif oylanacaktır.
Çoğunluk bu teklifi kabul ederse uygulanacak, aksi halde teklifte bulunan korsan denize atılacak ve teklif sırası bir sonraki korsana geçecektir.</br>
1. Korsan en fazla pay almak için nasıl bir teklifte bulunmalıdır?</br>
(<i>Matematik Dünyası Dergisi'ndeki soruda belirtilmemiş ise de cevap, "oyların eşitliği halinde teklifin kabul edildiği" varsayımına göre verilmiştir. Burada ise "eşitlik halinde teklifin reddedildiği" varsayılmaktadır.</i>)
_____________________________________________</br>
<p><form action="" method="post">
<input type="submit" name="Goster" value="Cevabı GÖSTER"/></p>
</form>
<?php
if (isset($_POST['Goster'])) {
   echo "Sondan başa doğru düşünerek çözüm bulabiliriz:</br>";
   echo "5.Korsan tek başına kalmışsa (ilk 4'ü denize atılmışsa) doğal olarak 100 altını da kendisi alır.</br></br>";
   echo "4.Korsana teklifte bulunma sırası gelmişse (ilk 3'ü denize atılmışsa) bu yüzden 5.korsanı ikna etmek (oy çokluğu) için mecburen bütün altınları ona teklif edecektir. 1 tane bile kendisine ayırırsa 5.korsan kabul etmeyecek ve kendisi denize atılacaktır.</br></br>";
   echo "3.Korsana teklifte bulunma sırası gelmişse (ilk 2'si denize atılmışsa) bu yüzden 5.korsanı ikna etmek -bütün altınları vermedikçe- mümkün olmadığı için 4.korsanı ikna etmeye çalışacaktır ve bunun için ona 1 altın teklif etmesi yeterlidir. 4.korsan bunu kabul etmek zorundadır; aksi halde sıra kendisine geldiğinde avcunu yalamak zorunda kalır. Böylece 3.korsan kendisine 99 altın ayırdığı teklifini kabul ettirebilir.</br></br>";
   echo "2.Korsana teklifte bulunma sırası gelmişse (1.korsan denize atılmışsa) bu yüzden 3.korsanı ikna etmek -en az 99 altın vermedikçe- mümkün olmadığı için 4. ve 5.korsanları ikna etmeye çalışacaktır(oy çokluğu için kendisininkinden başka 2 oya daha ihtiyacı var). 5.korsanı 1 altınla ikna edebilir; çünkü kabul etmezse 3.korsan ona zırnık koklatmayacaktır. 4.korsanı ikna etmeyi garantilemek için ise 2 altın yeterlidir; çünkü kabul etmezse 3.korsan ona sadece 1 altın teklif edecektir. Böylece 2. korsan kendisine 97 altın ayırdığı teklifini kabul ettirebilir.</br></br>";
   echo "1.Korsan da buna göre teklifte bulunurken oy çokluğu için 2 kişiyi daha ikna etmek zorundadır. 2.korsanı ikna etmek -en az 97 altın vermedikçe- mümkün olmadığı için diğerlerinden 2'sini ikna etmelidir. 3.korsanı ikna etmek için 1 altın yeterlidir; çünkü kabul etmezse 2.korsan ona avcunu yalatacaktır. 4.korsanı ikna etmeyi garantilemek için en az 3 altın gerekir; çünkü teklif kabul edilmezse 2. korsan ona 2 altın teklif edecektir. 5.korsanı ikna etmeyi garantilemek için en az 2 altın gerekir; çünkü teklif kabul edilmezse 2. korsan ona 1 altın teklif edecektir. Buna göre 3.,4. ve 5.korsanlardan ikisinin oyunu en ucuza garantilemenin yolu 3.korsana 1 altın, 5.korsana 2 altın teklif edip kendisine 97 altın ayırmaktır.</br></br>";
   echo '<font color="#008000">DOĞRU CEVAP:</font> 1.Korsana(kendisine) 97 altın, 3.korsana 1 altın, 5.korsana 2 altın teklif eder.';
   echo "<p>Bu bilmece çözümünden <font color='#FF0000'>çıkarılması gereken DERS</font> şudur:</br>";
   echo "<b>Seçim kurallarından bahsetmeden 'demokrasi taraftarı' olduğunu söylemek hiçbir anlam ifade etmez. Ancak 'hangi seçim yasasına göre demokrasi taraftarı' olduğunuzu söylerseniz anlamlı birşey söylemiş olursunuz.</b> Çünkü görüldüğü gibi bazı seçim kurallarına göre, normalde büyük çoğunluğun istemeyeceği kararlar oy çokluğuyla kabul edilebilmektedir. Meselâ her biri mantıklı görünen</br>";
   echo "&nbsp;&nbsp;&nbsp;* &nbsp;en çok istenme oyu alan seçeneğin uygulanmasını öngören bir seçim yasası,</br>";
   echo "&nbsp;&nbsp;&nbsp;* &nbsp;en az istenmeme oyu alan seçeneğin uygulanmasını öngören bir seçim yasası,</br>";
   echo "&nbsp;&nbsp;&nbsp;* &nbsp;sıralı çok tercihli oylama (burada da kazanacak tercih için çok farklı kurallar ortaya atılabilir) öngören seçim yasaları</br>";
   echo "vb, aynı milli iradenin birbirinden çok farklı kararlara varmasına neden olacağı gibi hiç istenilmeyen yönde mecburen oy kullanılmasına da yol açabilir. Bir seçim yasasına göre 1. olan seçenek, başka bir seçim yasasına göre baraj altında bile kalır, hatta bir seçim yasasına göre sonuncu olan seçenek, diğer bir seçim yasasına göre birinci bile olabilir!</br>";
}
?>
_____________________________________________</br>
</br>Düşündüğünüz teklifi aşağıya giriniz. Oylama sonucu hemen görüntülenecektir.</br>
Oylama sonucunun neden öyle çıktığını anlamak için bazı korsanlar denize atıldıktan sonraki adımlar için de teklifte bulunabilirsiniz.
  <p>Kaçıncı korsan adına teklifte bulunuyorsanız paylaştırmaya ondan başlayınız, öncekiler için hiç bir karakter girmeyiniz:</p>
  <form action="" method="post">
   1. Korsanın payı: <input type="text" name="Korsan1" size="3"/></br>
   2. Korsanın payı: <input type="text" name="Korsan2" size="3"/></br>
   3. Korsanın payı: <input type="text" name="Korsan3" size="3"/></br>
   4. Korsanın payı: <input type="text" name="Korsan4" size="3"/></br>
   5. Korsanın payı: <input type="text" name="Korsan5" size="3"/></br>
  <p><input type="submit" value="Oylansın"/></p>
  </form>
  <?php
  
    $dosyaAdi = "bilmecevap_2009_10.txt";
    list ($sunucuda) = explode ($_SERVER['SCRIPT_NAME'], $_SERVER['PATH_TRANSLATED']);
    list (, $anaDizineGore) = explode ($sunucuda, dirname(__FILE__));
    $buDizin = dirname(__FILE__);
    $dosyaAdi = $buDizin.'/'.$dosyaAdi;
	    if (!file_exists($dosyaAdi))
	    {
		    $DosyaOlustur = fopen ($dosyaAdi, 'a+') or die ("<p><code>$dosyaAdi</code> Oluşturulamıyor</p>");
		    fwrite ($DosyaOlustur, 'Bilinme zamanları');
		    fwrite ($DosyaOlustur, "\n");
    		fclose ($DosyaOlustur); 
	    }
	    elseif (!is_writable($dosyaAdi))
	    {
		    # Tamam, dosya var; peki yazılabiliyor mu? Buraya gelmişse yazılamıyordur
		    # İzinlerini değiştirmeye çalış:
		    @chmod(0755, $dosyaAdi) or
    		die ('<p class="KayitAlHata">Benim bu dosyaya yazma şansım yok. İzinler mi yetersiz ne<br /><code>'.$dosyaAdi.'</code> isimli dosyayı bi kontrol ediver</p>');
	    } 

  
    $korsan1 = round(abs($_POST['Korsan1']));
    $korsan2 = round(abs($_POST['Korsan2']));
    $korsan3 = round(abs($_POST['Korsan3']));
    $korsan4 = round(abs($_POST['Korsan4']));
    $korsan5 = round(abs($_POST['Korsan5']));
    if ($korsan1 > 0 | $_POST['Korsan1']!="") $teklifci = 1;
    elseif ($korsan2 > 0 | $_POST['Korsan2']!="") $teklifci = 2;
    elseif ($korsan3 > 0 | $_POST['Korsan3']!="") $teklifci = 3;
    elseif ($korsan4 > 0 | $_POST['Korsan4']!="") $teklifci = 4;
    elseif ($korsan5 > 0 | $_POST['Korsan5']!="") $teklifci = 5;
    else $teklifci = 0;
    if ($teklifci!=0 & $korsan1+$korsan2+$korsan3+$korsan4+$korsan5 !=100) echo "Toplam 100 olmalıdır. Düzelterek tekrar giriniz.</br>";
    else {
      switch ($teklifci) {
        case 1:
          $sonuc1='<font color="#008000"><b>KABUL</b></font>'; $k=1; $r=0;
          if ($korsan2 < 97) {$sonuc2='<font color="#FF0000"><b>RED</b></font>'; $r++;} else {$sonuc2='<font color="#008000"><b>KABUL</b></font>'; $k++;}
          if ($korsan3 < 1) {$sonuc3='<font color="#FF0000"><b>RED</b></font>'; $r++;} else {$sonuc3='<font color="#008000"><b>KABUL</b></font>'; $k++;}
          if ($korsan4 < 3) {$sonuc4='<font color="#FF0000"><b>RED</b></font>'; $r++;} else {$sonuc4='<font color="#008000"><b>KABUL</b></font>'; $k++;}
          if ($korsan5 < 2) {$sonuc5='<font color="#FF0000"><b>RED</b></font>'; $r++;} else {$sonuc5='<font color="#008000"><b>KABUL</b></font>'; $k++;}
          if ($k <= $r) $sonuc='1.Korsanın teklifi <font color="#FF0000">REDDEDİLDİ!</font> 1.Korsan denize atılır!</br>Nedenini görmek isterseniz teklif sırası gelen 2. korsan adına teklif vererek devam edebilirsiniz.</br></br>';
          else {
            $sonuc='Teklif <font color="#008000"><b>KABUL</b></font> edildi. ';
            if ($korsan1 < 97) $sonuc=$sonuc.'Fakat 1. korsan kendisi için <font color="#FF0000">daha fazlasını önerebilirdi</font>. Bilmecenin <font color="#FF0000">ÇÖZÜMÜ BU DEĞİL!</font></br></br>';
            else {
              $sonuc=$sonuc.'1. korsan kendisi için kabul edilebilir <font color="#008000"><b>en fazlasını önerdi</b></font>.</br></br>'.'<font color="#008000"><b>TEBRİKLER! BİLMECEYİ BAŞARIYLA TAMAMLADINIZ.</b></font>';
              $tim = time()+8*3600; # Sunucu ile aradaki 8 saatlik fark
              $zaman=date("d.m.Y", $tim).' Saat: '.date("G.i", $tim);
            	$DosyaNo = fopen($dosyaAdi,'a') or die ('Daha dosyayı açamıyorum arkadaş<br>');
             	fwrite($DosyaNo,$zaman."\n");
            	fclose($DosyaNo);
            }  
          }
          break;
        case 2:
          $sonuc1='Denize atılmış';
          $sonuc2='<font color="#008000"><b>KABUL</b></font>'; $k=1; $r=0;
          if ($korsan3 < 99) {$sonuc3='<font color="#FF0000"><b>RED</b></font>'; $r++;} else {$sonuc3='<font color="#008000"><b>KABUL</b></font>'; $k++;}
          if ($korsan4 < 2) {$sonuc4='<font color="#FF0000"><b>RED</b></font>'; $r++;} else {$sonuc4='<font color="#008000"><b>KABUL</b></font>'; $k++;}
          if ($korsan5 < 1) {$sonuc5='<font color="#FF0000"><b>RED</b></font>'; $r++;} else {$sonuc5='<font color="#008000"><b>KABUL</b></font>'; $k++;}
          if ($k <= $r) $sonuc='2.Korsanın teklifi <font color="#FF0000">REDDEDİLDİ!</font> 2.Korsan da denize atılır!</br>Nedenini görmek isterseniz teklif sırası gelen 3. korsan adına teklif vererek devam edebilirsiniz.</br></br>';
          else {
            $sonuc='Teklif <font color="#008000"><b>KABUL</b></font> edildi. ';
            if ($korsan2 < 97) $sonuc=$sonuc.'Fakat 2. korsan kendisi için <font color="#FF0000">daha fazlasını önerebilirdi</font>. <font color="#FF0000">ARAÇÖZÜM BU DEĞİL!</font></br></br>';
            else $sonuc=$sonuc.'2. korsan kendisi için kabul edilebilir <font color="#008000"><b>en fazlasını önerdi</b></font>. ARAÇÖZÜM TAMAM. Fakat bilmece henüz tamamlanmadı.</br></br>';
          }
          break;
        case 3:
          $sonuc1='Denize atılmış';
          $sonuc2='Denize atılmış';
          $sonuc3='<font color="#008000"><b>KABUL</b></font>'; $k=1; $r=0;
          if ($korsan4 < 1) {$sonuc4='<font color="#FF0000"><b>RED</b></font>'; $r++;} else {$sonuc4='<font color="#008000"><b>KABUL</b></font>'; $k++;}
          if ($korsan5 < 100) {$sonuc5='<font color="#FF0000"><b>RED</b></font>'; $r++;} else {$sonuc5='<font color="#008000"><b>KABUL</b></font>'; $k++;}
          if ($k <= $r) $sonuc='3.Korsanın teklifi <font color="#FF0000">REDDEDİLDİ!</font> 3.Korsan da denize atılır!</br>Nedenini görmek isterseniz teklif sırası gelen 4. korsan adına teklif vererek devam edebilirsiniz.</br></br>';
          else {
            $sonuc='Teklif <font color="#008000"><b>KABUL</b></font> edildi. ';
            if ($korsan3 < 99) $sonuc=$sonuc.'Fakat 3. korsan kendisi için <font color="#FF0000">daha fazlasını önerebilirdi</font>. <font color="#FF0000">ARAÇÖZÜM BU DEĞİL!</font></br></br>';
            else $sonuc=$sonuc.'3. korsan kendisi için kabul edilebilir <font color="#008000"><b>en fazlasını önerdi</b></font>. ARAÇÖZÜM TAMAM. Fakat bilmece henüz tamamlanmadı.</br></br>';
          }
          break;
        case 4:
          $sonuc1='Denize atılmış';
          $sonuc2='Denize atılmış';
          $sonuc3='Denize atılmış';
          $sonuc4='<font color="#008000"><b>KABUL</b></font>'; $k=1; $r=0;
          if ($korsan5 < 100) {$sonuc5='<font color="#FF0000"><b>RED</b></font>'; $r++;} else {$sonuc5='<font color="#008000"><b>KABUL</b></font>'; $k++;}
          if ($k <= $r) $sonuc='4.Korsanın teklifi <font color="#FF0000">REDDEDİLDİ!</font> 4.Korsan da denize atılır!</br>Nedenini görmek isterseniz teklif sırası gelen 5. korsan adına teklif vererek devam edebilirsiniz.</br></br>';
          else $sonuc='Teklif <font color="#008000"><b>KABUL</b></font> edildi. 4.Korsanın başka seçeneği kalmamıştı. ARAÇÖZÜM TAMAM. Fakat bilmece henüz tamamlanmadı.</br></br>';
          break;
        case 5:
          $sonuc1='Denize atılmış';
          $sonuc2='Denize atılmış';
          $sonuc3='Denize atılmış';
          $sonuc4='Denize atılmış';
          $sonuc5='<font color="#008000"><b>KABUL</b></font>'; $k=1; $r=0;
          $sonuc='Teklif doğal olarak <font color="#008000"><b>KABUL</b></font> edildi. ARAÇÖZÜM TAMAM. Fakat bilmece henüz tamamlanmadı.</font></br></br>';
          break;
      }
      if ($teklifci != 0){
        echo '<p>'.$teklifci.'. korsanın teklifi ve oylar şöyledir:</p>';
        echo '<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="200" id="AutoNumber1">'."\n";
        echo '<tr align="center">'."\n";
        echo "<td>1. Korsan</td> <td>".$korsan1."</td>"; echo "<td>".$sonuc1."</td>\n";
        echo "</tr>\n";
        echo '<tr align="center">'."\n";
        echo "<td>2. Korsan</td> <td>".$korsan2."</td>"; echo "<td>".$sonuc2."</td>\n";
        echo "</tr>\n";
        echo '<tr align="center">'."\n";
        echo "<td>3. Korsan</td> <td>".$korsan3."</td>"; echo "<td>".$sonuc3."</td>\n";
        echo "</tr>\n";
        echo '<tr align="center">'."\n";
        echo "<td>4. Korsan</td> <td>".$korsan4."</td>"; echo "<td>".$sonuc4."</td>\n";
        echo "</tr>\n";
        echo '<tr align="center">'."\n";
        echo "<td>5. Korsan</td> <td>".$korsan5."</td>"; echo "<td>".$sonuc5."</td>\n";
        echo "</tr>\n</table></br>";
        echo $sonuc;
        echo "<p>Cevapta veya programda değerlendirme hatası olduğunu söyleyebilmeniz için,
        bir önceki (yalnızca bir önceki, iki önceki değil) sıradakinin teklifinde kendisine daha fazlası verildiği halde onu reddedip yeni teklifi kabul etme durumu,
         ya da kabul ettiği bir teklifte kendisi için verilenden fazlasını veya aynısını bir sonraki adımda kabul ettirtebilme durumu olmalıdır.
         Yalnız mantıken kendisi için en fazlası olmasa bile teklif verenin kendi teklifini doğal olarak kabul ettiği varsayılır.</p>";
      }
      else echo 'Henüz teklif girmediniz.</br></br>';
    }
  ?>
 </body>
</html>