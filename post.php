<form action = "" method="post">  

	<input type="text" name="name" /> <br/>
	<input type="password" name="password"  />  <br/>
	<input type="submit" /> <br/>
	
</form>
	
<?php

function merhaba($user){

	$sonuc = "merhaba $user[name]";
	return $sonuc;
}
echo merhaba($_POST);

?>	

	
 
	