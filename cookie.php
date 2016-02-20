<?php //cookie olusturma
 
setcookie("kullanici_id",5000,time()+5); 
 
 // parametreler sirayla ==>  cookie adi,saklanmasi istenen veri,kalma süresi
 // setcookie fonksiyonu parametre sayýsý arttirilabilir.
 
 /* $_COOKIE nedir?

	$_COOKIE browser'a kaydedilen cookie dizisini getirir. 
	Ulasmak istenilen cookie'ye $_COOKIE["cookie_adi"] seklinde ulasilir.
	Yani $_COOKIE iliskili dizidir(asssociative array)

*/
var_dump ( $_COOKIE); // $_COOKIE icerigini gosterir.

//$_COOKIE'nin icine veri atanmis mi diye kontrol ediyoruz, atanmissa icerigini ekrana basiyoruz.
if(isset($_COOKIE["kullanici_id"])){ 

	echo "<br>" . $_COOKIE["kullanici_id"]; 
	
}


?>