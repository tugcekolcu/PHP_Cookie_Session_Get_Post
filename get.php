
<!-- ad ve soyad bilgilerini sunucuya GET ile g�nderiyoruz. -->
<form action = "" method="get">  
<!--action => bilgilerin hangi adrese g�nderilece�ini belirler. 
//method => bilgilerin hangi yolla g�nderilece�ini belirler. "" b�rak�l�rsa default olarak GET alg�lar.-->

	<input type="text" name="name" /> <br/> <!-- textbox -->
	<input type="password" name="password" />  <br/> <!-- textbox -->
	<input type="submit" /> <br/> <!-- submit default olarak g�nder butonu yarat�r. -->
	
</form>


<?php

function merhaba($user){

	$sonuc = "merhaba $user[name]";
	return $sonuc;
}
echo merhaba($_GET);

?>	

	

	
 
	