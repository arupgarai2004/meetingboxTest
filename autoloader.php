<?php
/*
About: To load class files
Author:Arup
*/

 function my_autoload ($pClassName) {
	$filePath = str_replace('\\', '/',  $pClassName);	
    require_once($filePath . ".php");
 }
	
 spl_autoload_register("my_autoload");
?>