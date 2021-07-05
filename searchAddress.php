<?php
/*
About: To find Lat and log from an address 
Author:Arup
Last Modified on: 03/07/21
*/

require "autoloader.php";

if(!empty($_POST['searchAddress'])){
	$obj= new classes\searchClass();
	echo $obj->getLatLongfrmAdd($_POST['searchAddress']);
}

?>