
<!-- ad ve soyad bilgilerini sunucuya GET ile gönderiyoruz. -->
<form action = "" method="get">  
<!--action => bilgilerin hangi adrese gönderileceðini belirler. 
//method => bilgilerin hangi yolla gönderileceðini belirler. "" býrakýlýrsa default olarak GET algýlar.-->

	<input type="text" name="name" /> <br/> <!-- textbox -->
	<input type="password" name="password" />  <br/> <!-- textbox -->
	<input type="submit" /> <br/> <!-- submit default olarak gönder butonu yaratýr. -->
	
</form>


<?php

function merhaba($user){

	$sonuc = "merhaba $user[name]";
	return $sonuc;
}
echo merhaba($_GET);

?>	

	

	
 
	