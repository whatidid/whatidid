<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body bgcolor="#33CCFF">
	<b><font color="#FF0000">13.02.2015</font></b>
	<div class="Aciklama">
		<p>
		Elektrik Makinaları Laboratuvarı haftada 5 grup halinde yapılacaktır. Gruplar aşağıdaki gibidir. Sıralı 5 tercih yapınız. Ders çakışması vb nedenle uymayan grupların hangi dersinizle çakıştığını özel notunuzda belirtiniz. Aksi halde hiç istemediğiniz bir gruba düşebilirsiniz. Tercih sıranız önemlidir.</p>
		<p> Dersi devamlı tekrar alanlar deneylere katılıp katılmamakta serbesttir; ama gerçekten katılmayı düşünüyorlarsa grup tercihi yapsınlar. </p> 
<p>		Buradaki işlem kesin kayıt değil, kayıt başvurusudur. Şu anda görüntülenen liste de kesin liste değildir. Kesin listeler 20 Şubat 2015 Cuma gününe kadar açıklanacaktır.		</p>
		<p>	
			A Grubu: Pazartesi  10:30-12:15<br \>
			B Grubu: Pazartesi  13:00-14:45<br \>
			C Grubu: Pazartesi  15:00-16:45<br \>
			D Grubu: Çarşamba  13:00-14:45<br \>
			E Grubu: Çarşamba  15:00-16:45<br \>
		</p>
		<p>Toplam 19 deney <b>11 hafta</b>da (bazı haftalar iki deney, a ve b deneyleri) yapılacaktır. Laboratuvarda devamlara çok dikkat edilecektir. 3 hafta devamsızlık yapan devamsız kalır.</br>  İlk deney (TR-1) <font color="#FF0000">23 Şubat 2015 Pazartesi</font> günü başlayacaktır.</p>
<p>Deneyler 30 kadar kişilik grubun genellikle izlemesi ve bazen 1-2 öğrencinin yardım etmesi biçiminde olacağından iyi anlaştığınız arkadaşlarınızla aynı gruba düşmeye çalışmanız gereksizdir.</p>
<p>Bu açıklamaları dikkate alarak aşağıdaki formu <font color="#FF0000">17 Şubat 2015 Salı</font> gününe kadar doldurup 1 defa gönderiniz. Erken başvurulara imkânlar ölçüsünde öncelik verilecektir. Tercihlerini değiştirmek isteyen yeniden giriş yapabilir; bu durumda önceki başvuruları iptal edilir. Ayrıca e-posta atmanıza gerek yoktur. Kayıt başvurunuz aşağıda görülecektir.</p>
	</div>
	
<?php

	define(GMT_TURKIYE_FARKI, 7);

	// Burayı istediğiniz gibi değiştirebilirsiniz	
	$kayitAlanEtiketi = "Laboratuvar Grup Kayıt Başvuru Formu";
	$ozelNotKayit = "LAB_KAYIT_OZEL_NOT.txt";
	$dosyaAdi = "LabGrupKayit";
	
	$uyari = "<p>";
	$uyari .= " Listenin, tarafımdan en son incelenme zamanı :  13 Şubat 2015 <code>Saat : 20.00</code>";
	$uyari .= "</p>";
	
	// Buradan sonrasında değiştirmeniz gerekebilecek çok az şey var
	######## HESAPLAMALAR #####################################################
	/**
	 * Linux sunucuda $_SERVER['SCRIPT_FILENAME'] değişkeni var, 
	 * Linux altında bu değişken kullanılacak : 
	 */
	//list ($sunucuda) = explode ($_SERVER['SCRIPT_NAME'], $_SERVER['SCRIPT_FILENAME']);
	/**
	 * Windows'ta  $_SERVER['SCRIPT_FILENAME'] yerine $_SERVER['PATH_TRANSLATED'] kullanılıyor
	 */
	list ($sunucuda) = explode ($_SERVER['SCRIPT_NAME'], $_SERVER['PATH_TRANSLATED']);
	
	list (, $anaDizineGore) = explode ($sunucuda, dirname(__FILE__));

	
	$buDizin = dirname(__FILE__);
	$kayitDosyasi = "$dosyaAdi.xml"; 
	
	//print_r($_SERVER);
	//echo "<p>sunucuda : $sunucuda </p>";
	//echo "<p>anaDizineGore : $anaDizineGore </p>";
  	//echo "server script name : ".$_SERVER['SCRIPT_NAME']."\n";
	//echo "server script filename : ".$_SERVER['SCRIPT_FILENAME'].'\n';

	
	// Buradan sonra değiştirilebilecek şey kalmıyor
	
	$epostalist = "epostalist.xml";
	$epostalist = $buDizin.'/'.$epostalist;
	if (!file_exists($epostalist))
	{
		$epostaDosyasiOlustur = fopen ($epostalist, 'a+') or die ("<p><code>$epostalist</code> Oluşturulamıyor</p>");
		fwrite ($epostaDosyasiOlustur, "<KAYIT>\n");
		fclose ($epostaDosyasiOlustur); 
	}
	elseif (!is_writable($epostalist))
	{
		# Tamam, dosya var; peki yazılabiliyor mu? Buraya gelmişse yazılamıyordur
		# İzinlerini değiştirmeye çalış:
		@chmod(0755, $epostalist) or
		die ('<p class="KayitAlHata">Benim bu dosyaya yazma şansım yok. İzinler mi yetersiz ne<br /><code>'.$epostalist.'</code> isimli dosyayı bi kontrol ediver</p>');
	} 


	$kayitDosyasi = $buDizin.'/'.$kayitDosyasi;
	
	# Kaydedilecek dosyayı bulamazsan oluştur bi tane... Uğraştırma beni		
	if (!file_exists($kayitDosyasi))
	{
		$kayitDosyasiOlustur = fopen ($kayitDosyasi, 'a+') or die ("<p><code>$kayitDosyasi</code> Oluşturulamıyor</p>");
		fclose ($kayitDosyasiOlustur); 
	}
	elseif (!is_writable($kayitDosyasi))
	{
		# Tamam, dosya var; peki yazılabiliyor mu? Buraya gelmişse yazılamıyordur
		# İzinlerini değiştirmeye çalış:
		@chmod(0755, $kayitDosyasi) or
		die ('<p class="KayitAlHata">Benim bu dosyaya yazma şansım yok. İzinler mi yetersiz ne<br /><code>'.$kayitDosyasi.'</code> isimli dosyayı bi kontrol ediver</p>');
	} 

	
	// Kayıt alanı
	echo		'<fieldset class="KayitAl">';
	echo 			'<legend>'.$kayitAlanEtiketi.'</legend>';
	echo 			'<form id="KayitAlani" action="" method="post">';
	echo 				'<table>';
	echo 					'<tr>';
	echo 						'<td>Öğrenci no : </td>';
	echo 						'<td><input class="VeriGirisi" type="text" id="OgrenciNo" name="OgrenciNo" value=""  /></td>';
	echo 					'</tr>';
	echo 					'<tr>';	
	echo 						'<td>Ad Soyad : </td>';	
	echo 						'<td><input class="VeriGirisi" type="text" id="AdSoyad" name="AdSoyad" value=""  /></td>';
	echo 					'</tr>';
	echo					'<tr>';
	echo 						'<td>E-Posta adresi : </td>';
	echo 						'<td><input class="VeriGirisi" type="text" id="EPosta" name="EPosta" value=""  /> ( <code>Listede görüntülenmeyecektir</code> )</td>';
	echo					'</tr>';
	echo 					'<tr>';
	echo 						'<td>Grup tercih sırası :</td>';
	echo 						'<td><input class="VeriGirisi" type="text" id="GrupTercih" name="GrupTercih" value=""  /><code> Örneğin A,C,D,B,E</code></td>';
	echo 					'</tr>';
	echo 				'</table>';
	echo 				'<p>Varsa özel notunuz : ( <code>Listede görüntülenmeyecektir. Enter tuşuna basmadan yazınız.</code> )</p>';
	echo 						'<p><textarea class="MetinGirisi" name="Metin" cols="50" rows="5" ></textarea></p>';
	echo 						'<div><input type="hidden" name="BenLafimi" value="söyledim" /></div>';
	echo 						'<p><input class="Tamam" name="Budur" type="submit" value="Gönder" /></p>';
	echo 			'</form>';
	echo 		'</fieldset>';
	
	// Uyarı
	echo $uyari;
	
	
	// [Listele]
	echo '<div class="'.$dosyaAdi.'">';
	echo '<div class="KayitAlGoster">';
	$dosyaIcerigi = file_get_contents ($kayitDosyasi);
	if (filesize ($kayitDosyasi) == 0)
	{
		//echo '<p class="KayitYokUyarisi">Henüz hiç kimse bir şey dememiş. Söze ilk sen başla istersen?</p>';
		echo '<p class="KayitYokUyarisi">Henüz hiç kimse kayıt yapmamış...</p>';
	}
	else
	{
		echo stripslashes ($dosyaIcerigi);
	}
	echo '</div><!-- /KayitAlGoster -->';
	echo '</div><!-- /'.$dosyaAdi.' -->';
	// [/Listele]	
	
	# Kaydın alınıp alınmadığını gösterir
  	if (isset($_POST['BenLafimi']) and $_POST['BenLafimi']=="söyledim")
  	{
  		$KayitOgrenciNo = htmlspecialchars($_POST['OgrenciNo'], ENT_QUOTES);
  		$KayitAdSoyad = htmlspecialchars($_POST['AdSoyad'], ENT_QUOTES);
  		$KayitEPosta = htmlspecialchars($_POST['EPosta'], ENT_QUOTES);
	  	$KayitMetin = htmlspecialchars($_POST['Metin'], ENT_QUOTES);
	  	$KayitGrupTercih = htmlspecialchars($_POST['GrupTercih'], ENT_QUOTES);
	  	
		
		$hata = '';
		$OGRENCİ_NO = false;
		switch(strtolower($KayitOgrenciNo))
    	{
			case '': 
    		    $hata = 'Öğrenci numaranızı yazmayı unuttunuz.';
				break;		
			case 'Öğrenci No': 
    		    $hata = 'Öğrenci numaranızı yazmayı unuttunuz.';
				break;
			default: 
				$OGRENCI_NO = true;
		}			
		
		$AD_SOYAD = false;
		switch(strtolower($KayitAdSoyad))
    	{
			case 'Ad Soyad': 
    		    $hata = 'Adınızı yazmanız gerekmektedir. Ha, adınız "Ad", soyadınız "Soyad" ise o başka.';
				break;
			case 'deneme': 
    		    $hata = 'Sana lego verelim. Denersin bozarsın.';
				break;
			case 'yanılma': 
    		    $hata = 'Bence de, yanılma...';
				break;
			case '': 
       			$hata = 'Adınızı yazmanız gerekmektedir.';
				break;
			default: 
				$AD_SOYAD = true;
		}	
		
		$GRUP_TERCIH = false;
		switch(strtolower($KayitGrupTercih))
    	{
			case 'deneme': 
    		    $hata = 'Sana lego verelim. Denersin bozarsın.';
				break;
			case 'yanılma': 
    		    $hata = 'Bence de, yanılma...';
				break;
			case '': 
       			$hata = 'Grup belirtmelisiniz';
				break;
			default: 
				$GRUP_TERCIH = true;
		}	

		$epostalistKaynakNo = fopen($epostalist,'a') or die ('Daha dosyayı açamıyorum arkadaş<br>');
		$toplamliste = '';
		$toplamliste .= "  <Ogrenci>\n";
		$toplamliste .= "    <Numara>".$KayitOgrenciNo."</Numara>\n";
		$toplamliste .= "    <AdSoyad>".$KayitAdSoyad."</AdSoyad>\n";
		$toplamliste .= "    <Tercih>".$KayitGrupTercih."</Tercih>\n";
		$toplamliste .= "    <EPosta>".$KayitEPosta."</EPosta>\n";
		$toplamliste .= "    <Metin>".$KayitMetin."</Metin>\n";
		$toplamliste .= "  </Ogrenci>\n";
		fwrite($epostalistKaynakNo,$toplamliste);
		fclose($epostalistKaynakNo);
		
		
		if($AD_SOYAD && $OGRENCI_NO && $GRUP_TERCIH)
		{
			$kayitDosyasiKaynakNo = fopen($kayitDosyasi,'a') or die ('Daha dosyayı açamıyorum arkadaş<br>');
			$toplamdaYazilan = '';
			$toplamdaYazilan .= '

			<!-- '.$kayitDosyasi.' -->
			';
			$toplamdaYazilan .= '<p>';
	//		$toplamdaYazilan .= '<blockquote><!-- KayitAl -->';
			$toplamdaYazilan .= '	<span class="OgrenciNo"><b>'.$KayitOgrenciNo.'</b></span><!-- /OgrenciNo -->';
			$toplamdaYazilan .= '	<span class="AdSoyad"><b>'.$KayitAdSoyad.'</b></span><!-- /AdSoyad -->';
			$toplamdaYazilan .= '	&nbsp;&nbsp;&nbsp;<span class="GrupTercih">'.$KayitGrupTercih.'</span>';
	//		$toplamdaYazilan .= '	<p class="KaydedilenMetin">';
	//		$toplamdaYazilan .= 	$KayitMetin;
	//		$toplamdaYazilan .= '	</p><!-- /KaydedilenMetin -->';
			$toplamdaYazilan .= '	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (<code class="Tarih">'.date("d.m.Y", time() + (GMT_TURKIYE_FARKI * 3600)).' Saat: '.date("G.i", time()+ (GMT_TURKIYE_FARKI * 3600)).'</code><!-- /Tarih -->)';
	//		$toplamdaYazilan .= '</blockquote><!-- /KayitAl -->
			$toplamdaYazilan .= '</p>';
			$toplamdaYazilan .= '<!-- /'.$kayitDosyasi.' -->
			';
			
			/**
			*
			* Özel verileri ayrı bir dosyaya kaydet
			*
			*/
			$ozelNotKayit = $buDizin.'/'.$ozelNotKayit; // Özel bilgilerin kaydedildiği dosya adı
			
			// Kaydedilecek özel veri			
			$ozelNotMetni .= "$KayitOgrenciNo \t";
			$ozelNotMetni .= "\t $KayitAdSoyad \t ";
			$ozelNotMetni .= " $KayitGrupTercih \t";
			$ozelNotMetni .= "\t $KayitEPosta \t";
			$ozelNotMetni .= "\n\n";
			$ozelNotMetni .= "Özel Notu : \n";
			$ozelNotMetni .= $KayitMetin;
			$ozelNotMetni .= "\n";
			$ozelNotMetni .= "---------------------------------------------------------------------------------------------\n\n";
			
			
			# Kaydedilecek dosyayı bulamazsan oluştur bi tane... Uğraştırma beni		
			if (!file_exists($ozelNotKayit))
			{
				$kayitDosyasiOlustur = fopen ($ozelNotKayit, 'a+') or die ("<p><code>$ozelNotKayit</code> Oluşturulamıyor</p>");
				$baslangic =  "  Öğrenci No :   \t      Ad Soyad :       \t Grup Tercih Sırası : \t E-Posta adresi : \n";
				$baslangic .= "---------------- \t --------------------- \t -------------------- \t ----------------- \n\n";
				fwrite ($kayitDosyasiOlustur, $baslangic) or die ("<code>$ozelNotKayit dosyasına başlangıç yapılamadı</code>");
				fclose ($kayitDosyasiOlustur); 
			}
			elseif (!is_writable($ozelNotKayit))
			{
				# Tamam, dosya var; peki yazılabiliyor mu? Buraya gelmişse yazılamıyordur
				# İzinlerini değiştirmeye çalış:
				@chmod(0755, $ozelNotKayit) or
				die ('<p class="KayitAlHata">Benim bu dosyaya yazma şansım yok. İzinler mi yetersiz ne<br /><code>'.$ozelNotKayit.'</code> isimli dosyayı bi kontrol ediver</p>');
			} 

			
			$ozelNotDKN = fopen ($ozelNotKayit, 'a') or die ("<p><code>$ozelNotKayit</code> niyeyse açılamadı</p>");
			if (!fwrite($ozelNotDKN, $ozelNotMetni))
			{
				echo '<p class="KayitAlHata">Özel not alınamadı!!!</p>';
			}
			else
			{
				echo '<p class="KayitAlTamam">Özel not alındı.</p>';
			}
			

			if (fwrite($kayitDosyasiKaynakNo,$toplamdaYazilan))
			{
				## Dosya kaydı başarılı
				fclose($kayitDosyasiKaynakNo);

				echo '<p class="KayitAlTamam">Grup kaydınız alındı.</p>';
				echo '<meta http-equiv="refresh" content="0;url='.$_SERVER['REQUEST_URI'].'">';
  	
			}
			else
			{
				# Dosya kaydı bilinmeyen bir nedenden dolayı yapılamadı...
				echo '<span class="KayitAlHata">Dosya kaydı bilinemeyen bir nedenden dolayı yapılamadı.</span>';
			}	  	

		}
		else
		{
			# Kaydı alınan metin süzgeçten geçemedi 
			echo '<span class="KayitAlHata">'.$hata.'</span>';
		}

	}
	
	# Her halükarda değişkenlerin içini boşalt. 
	unset($_POST['BenLafimi']);	 
	unset($_POST['OgrenciNo']); 
	unset($_POST['AdSoyad']);  
	unset($_POST['Metin']);
?> 


</body>
</html>
