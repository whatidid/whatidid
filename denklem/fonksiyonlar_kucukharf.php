<?php
function SayiUretTek(){
		$sayi = rand(1, 9); 
		return $sayi;
	}
function DegerUretTek(){
	$degerler = array('','<i><b>x</b></i>');
	$degerRas = rand(0,1);
	$deger = $degerler[$degerRas];
	return $deger;
}
function IslemUretTek(){
	$islemler = array('+','-');
	$islemRas = rand(0,1);
	$islem = $islemler[$islemRas];
	return $islem;
}
function SayiUretIki(){
		$sayi = rand(1, 9); 
		return $sayi;
	}
function DegerUretIki(){
	$degerler = array('','<i><b>x</b></i>','<i><b>y</b></i>');
	$degerRas = rand(0,2);
	$deger = $degerler[$degerRas];
	return $deger;
}
function IslemUretIki(){
	$islemler = array('+','-');
	$islemRas = rand(0,1);
	$islem = $islemler[$islemRas];
	return $islem;
}
function SayiUretIki2(){
		$sayi = rand(1, 9); 
		return $sayi;
	}
function DegerUretIki2(){
	$degerler = array('','<i><b>x</b></i>','<i><b>y</b></i>');
	$degerRas = rand(0,2);
	$deger = $degerler[$degerRas];
	return $deger;
}
function IslemUretIki2(){
	$islemler = array('+','-');
	$islemRas = rand(0,1);
	$islem = $islemler[$islemRas];
	return $islem;
}
?>
