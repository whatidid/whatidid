<html>

 <head>
  <meta name="GENERATOR" content="Microsoft FrontPage 5.0">
  <meta name="ProgId" content="FrontPage.Editor.Document">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
  <title>Tamsayı çalışmaları</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
  <!-- tooltip basi -->
  <style>
  #tooltip
{
    text-align: center;
    color: #fff;
	font-size: 28;
    background: #111;
    position: absolute;
    z-index: 100;
    padding: 15px;
}
 
    #tooltip:after /* triangle decoration */
    {
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid #111;
        content: '';
        position: absolute;
        left: 50%;
        bottom: -10px;
        margin-left: -10px;
    }
 
        #tooltip.top:after
        {
            border-top-color: transparent;
            border-bottom: 10px solid #111;
            top: -20px;
            bottom: auto;
        }
 
        #tooltip.left:after
        {
            left: 10px;
            margin: 0;
        }
 
        #tooltip.right:after
        {
            right: 10px;
            left: auto;
            margin: 0;
        }
  </style>
 <!-- tooltip sonu -->
 </head>

 <body>
  <a href="javascript:hideshow(document.getElementById('aciklama'))">Sayfanın amacı için tıklayınız.</a> &nbsp;&nbsp;&nbsp;<font style='color:red;'>27.8.2017</font>
  <div id="aciklama" style="display: none">
  <p>Bu sayfa, çocuklardaki/gençlerdeki tamsayı işlem eksikliklerini teşhis ve giderme amacıyla hazırlanmıştır. Ortalama olarak Seviye 1 sorusunu 20 saniyede, Seviye 2 sorusunu 40 saniyede yapamayan bir çocuğu/genci, bu eksikliğini gidermeden Matematik dersleri için dershaneye göndermek sadece zaman ve kaynak israfı olup çocuğu/genci boşa yormaktır (Sürelerde kâğıt-kalem kullanılabildiğini ve fareyi üzerine getirince görülen ara sonuçları kendisi bulduktan sonra bakarak kullanabildiğini varsayıyorum). Çünkü matematiğin çoğu sorusunda bunlara benzer işlemlerle karşılaşacaktır. Bu konuları halletmeden ileri konulara geçilmesini asla tavsiye etmiyorum. Bu hem ilköğretim sonu, hem de lise sonu sınavlarına hazırlanan çocuklar ve gençler için geçerlidir.</p>
  <p>Bu işlemleri zihinden yapabilene kadar çalışmaya devam edilmelidir.</p>
  </div>
<br>Mobil cihazlarda "fareyi üzerine getirmek" yerine elinizle dokununuz. Aşırı zoomlarsanız ara sonuç ve sonuç, uzaklarda görüntülenebilir.
  <?php
   // Seviye 1
   $x1=rand(-10,10); $x2=rand(-10,10); $x3=rand(-10,10);
   $y1=rand(-10,10); $y2=rand(-10,10); $y3=rand(-10,10);
   if ($x1===0) $x1=rand(-10,10);
   if ($x2===0) $x2=rand(-10,10);
   if ($x3===0) $x3=rand(-10,10);
   if ($y1===0) $y1=rand(-10,10);
   if ($y2===0) $y2=rand(-10,10);
   if ($y3===0) $y3=rand(-10,10);
   $ss=rand(-10,10);
   $sx2="+"; if ($x2<0) $sx2="-";
   $sx3="+"; if ($x3<0) $sx3="-";
   $sy2="+"; if ($y2<0) $sy2="-";
   $sy3="+"; if ($y3<0) $sy3="-";
   $s=" + "; if ($ss<0) $s=" - ";
   $sorux="(".$x1.$sx2.abs($x2).$sx3.abs($x3).")";
   $soruy="(".$y1.$sy2.abs($y2).$sy3.abs($y3).")";
   $cevapx=($x1+$x2+$x3); $cevapy=($y1+$y2+$y3);
   if ($ss<0) $cevap=$cevapx-$cevapy;
   else $cevap=$cevapx+$cevapy;
   
   // Seviye 2
   $v1=rand(-9,9); $v2=rand(-9,9); $v3=rand(-9,9); $v4=rand(-9,9);
   $v5=rand(-9,9); $v6=rand(-9,9); $v7=rand(-9,9); $v8=rand(-9,9);
   if ($v1===0) $v1=rand(-9,9);
   if ($v2===0) $v2=rand(-9,9);
   if ($v3===0) $v3=rand(-9,9);
   if ($v4===0) $v4=rand(-9,9);
   if ($v5===0) $v5=rand(-9,9);
   if ($v6===0) $v6=rand(-9,9);
   if ($v7===0) $v7=rand(-9,9);
   if ($v8===0) $v8=rand(-9,9);
   if ($v1===1) $v1=rand(-9,9);
   if ($v2===1) $v2=rand(-9,9);
   if ($v3===1) $v3=rand(-9,9);
   if ($v6===1) $v6=rand(-9,9);

   /*$v1=-1; $v2=-2; $v3=-3; $v4=-4; $v5=-5; $v6=-6; $v7=-7; $v8=-8;*/
   if ($v2<0) { $t_2='*('; $t2_=')';}
   else { $t_2='*'; $t2_='';}
   if ($v3<0) $t3=' - '; else $t3=' + ';
   if ($v5<0) $t5=''; else $t5='+';
   if ($v6<0) $t6=' - '; else $t6=' + ';
   if ($v8<0) $t8=''; else $t8='+';
   $cevapa=$v1*$v2;
   $cevapb1=$v4+$v5; $cevapb=abs($v3)*$cevapb1;
   $cevapc1=$v7+$v8; $cevapc=abs($v6)*$cevapc1;
   if ($v3*$cevapb1<0) $tt3=' - '; else $tt3=' + ';
   if ($v6*$cevapc1<0) $tt6=' - '; else $tt6=' + ';
   $aracevap='('.$cevapa.$tt3.abs($v3*$cevapb1).$tt6.abs($v6*$cevapc1).')';
   $cevap2=$cevapa+$v3*$cevapb1+$v6*$cevapc1;
  ?>

<p><b>1. SEVİYE SORUSU:</b><br><br><font size="6">
  <?php
   echo '<abbr rel="tooltip" title="'.$cevapx.'">'.$sorux.'</abbr>'.$s.'<abbr rel="tooltip" title="'.$cevapy.'">'.$soruy.'</abbr> = ';
  ?>
  <input name="C" size="5" >
  <?php
   echo '<abbr rel="tooltip" title="'.$cevap.'"> cevap</abbr>';
  ?>
  </font></p>

  <p>Fareyi bir parantez üzerine getirirseniz o parantezin 
değerini, "cevap" yazısının üzerine getirirseniz de sonucu 
görürsünüz.</p>
  <p><form method="post" action=""><p><input type="submit" value="Değiştir" style="font-size:40; color:blue" name="G"></p></form>

  <b>2. SEVİYE SORUSU:</b><br><br><font size="6">
  <?php
   echo '<abbr rel="tooltip" title="'.$cevapa.'">'.$v1.$t_2.$v2.$t2_.'</abbr>'.$t3.'<abbr rel="tooltip" title="'.$cevapb.'">'.abs($v3).'*</abbr><abbr rel="tooltip" title="'.$cevapb1.'">('.$v4.$t5.$v5.')</abbr>'.$t6.'<abbr rel="tooltip" title="'.$cevapc.'">'.abs($v6).'*</abbr><abbr rel="tooltip" title="'.$cevapc1.'">('.$v7.$t8.$v8.')</abbr>'.' = <abbr rel="tooltip" title="'.$aracevap.'"> aracevap</abbr> = ';
  ?>
  <input name="C" size="5" >
  <?php
   echo '<abbr rel="tooltip" title="'.$cevap2.'"> cevap</abbr>';
  ?>

  </font></p>Fareyi bir parantez üzerine getirirseniz o 
parantezin değerini (varsa ilk terimdeki hariç), <br>parantezin solundaki * işareti veya daha solundaki sayı 
üzerine getirirseniz o parantezin o sayıyla çarpımını (parantezin solundaki 
sayının önündeki işareti hesaba katmadan) <br>çarpım halindeki ilk iki sayı 
üzerine getirirseniz onların çarpımını (işaretleri dikkate alınmış olarak) 
<br>"aracevap" yazısı üzerine getirirseniz, üç arasonucun işlem halini (aradaki 
işaretler dikkate alınmış olarak)<br>en sağdaki "cevap" yazısının üzerine 
getirirseniz de sonucu <br><br>görürsünüz.    Cevap gönderme yoktur.<br><br><br>
 </body>
 <!-- tooltip basi -->
<script>
$( function()
{
    var targets = $( '[rel~=tooltip]' ),
        target  = false,
        tooltip = false,
        title   = false;
 
    targets.bind( 'mouseenter', function()
    {
        target  = $( this );
        tip     = target.attr( 'title' );
        tooltip = $( '<div id="tooltip"></div>' );
 
        if( !tip || tip == '' )
            return false;
 
        target.removeAttr( 'title' );
        tooltip.css( 'opacity', 0 )
               .html( tip )
               .appendTo( 'body' );
 
        var init_tooltip = function()
        {
            if( $( window ).width() < tooltip.outerWidth() * 1.5 )
                tooltip.css( 'max-width', $( window ).width() / 2 );
            else
                tooltip.css( 'max-width', 340 );
 
            var pos_left = target.offset().left + ( target.outerWidth() / 2 ) - ( tooltip.outerWidth() / 2 ),
                pos_top  = target.offset().top - tooltip.outerHeight() - 20;
 
            if( pos_left < 0 )
            {
                pos_left = target.offset().left + target.outerWidth() / 2 - 20;
                tooltip.addClass( 'left' );
            }
            else
                tooltip.removeClass( 'left' );
 
            if( pos_left + tooltip.outerWidth() > $( window ).width() )
            {
                pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
                tooltip.addClass( 'right' );
            }
            else
                tooltip.removeClass( 'right' );
 
            if( pos_top < 0 )
            {
                var pos_top  = target.offset().top + target.outerHeight();
                tooltip.addClass( 'top' );
            }
            else
                tooltip.removeClass( 'top' );
 
            tooltip.css( { left: pos_left, top: pos_top } )
                   .animate( { top: '+=10', opacity: 1 }, 50 );
        };
 
        init_tooltip();
        $( window ).resize( init_tooltip );
 
        var remove_tooltip = function()
        {
            tooltip.animate( { top: '-=10', opacity: 0 }, 50, function()
            {
                $( this ).remove();
            });
 
            target.attr( 'title', tip );
        };
 
        target.bind( 'mouseleave', remove_tooltip );
        tooltip.bind( 'click', remove_tooltip );
    });
});
</script>
<!-- tooltip sonu -->
</html>