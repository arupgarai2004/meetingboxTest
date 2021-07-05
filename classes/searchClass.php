<?php
/*
About: Search class, to search address 
Author:Arup Garai
Last Modified on: 03/07/2021
*/
namespace classes;

class searchClass{
	
	private $configData;
	
	/*
	Class contrucutor will  call automatically during creating object.
	its parsing config file
	*/
    function __construct() {
        $this->configData = parse_ini_file('config/config.ini', true);
    }
	
	/*
	 Method to get Lat long from Address
	 @input String Address
	 @Output String Lat long Json
	*/	
	function getLatLongfrmAdd($searchAddress):string{
		if(!empty($searchAddress)){			
			$opts = array(
				'http' => array(
				"header" => "User-Agent: Nominatim-Test",
				'method' => 'GET'
				),
			); 
			// Create a stream
			$context = stream_context_create($opts);
			foreach($this->configData as $mapData) {
				//Factory Design Patern 
				$factory= new factoryMap();
				$mapType = $factory->create($mapData['name']);// to Create Diffrent Object
				$searchAddress = str_replace(" ", "+", $searchAddress);				
				$json = file_get_contents($mapData['url'].$searchAddress, false, $context);
				$result[$mapData['title']]=$mapType->parseResults($json);              
			}			
		}		
		return  json_encode(array($result));
	}	
	
	
	function __destruct() {
		
	}
	
}


?>