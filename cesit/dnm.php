<html>
 <head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
  <script type"text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  </head>
 <body>
  <h3>İKİ BİLİNMEYENLİ DENKLEM ÇİFTİ</h3>
  <p>Yukarıdaki 2 bilinmeyenli denklem çiftinin düzenlenmiş katsayılarını sırasıyla kutulara yazınız. Sayılar birbiriyle tutarlı olmak şartıyla doğru cevap farklı sayılarla da yazılabilir, hatta +-*/ işlemleriyle bile yazılabilir.</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="k_11" style="width:30px; height:30px; text-align:right" onKeyUp="dogrumu1()"><font color="red"><i><b> x</b></i></font><span id="dn1dogruluk">&nbsp;&nbsp;Buraya 1. denklemi düzenleyiniz.</span></p>

 </body>
  <script type="text/javascript">
   function dogrumu1() {
	k11=eval(document.getElementById("k_11").value);
	document.getElementById("dn1dogruluk").innerHTML = (typeof k11);
   }
  </script>  

</html>