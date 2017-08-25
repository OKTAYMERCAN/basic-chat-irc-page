<?php
//setcookie(name, value, expire, path, domain, secure, httponly);

$cookie_name = "username";
$cookie_value = $_GET['username'];

setcookie($cookie_name , $cookie_value , time(86400) , "/"); // 86400 = 1 day

touch("MDB.html"); //Dosya oluşturma silmek için unlink kullanılıyor

if(file_exists("MDB.html")){
	
	echo "Dosya var<br>";
	
}else{
	
	echo "Dosya yok yada oluşturulmamış.<br>";
}

$mesaj = $_GET['mesaj'];

$dosya = fopen("MDB.html" , "a+");

fwrite($dosya , "$cookie_value: $mesaj<br>");

header("Location: sohbetsayfasi.html");
?>