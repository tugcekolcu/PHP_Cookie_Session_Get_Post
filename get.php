
<!-- ad ve soyad bilgilerini sunucuya GET ile gönderiyoruz. -->
<form action = "" method="get">  
<!--action => bilgilerin hangi adrese gönderileceğini belirler. 
//method => bilgilerin hangi yolla gönderileceğini belirler. "" bırakılırsa default olarak GET algılar.-->

	<input type="text" name="name" /> <br/> <!-- textbox -->
	<input type="password" name="password" />  <br/> <!-- textbox -->
	<input type="submit" /> <br/> <!-- submit default olarak gönder butonu yaratır. -->
	
</form>


<?php

function merhaba($user){

	$sonuc = "merhaba $user[name]";
	return $sonuc;
}
echo merhaba($_GET);

?>	

	

	
 
	