<?php
/*
About: os Map class to parse os Map response
Author:Arup Garai
Last Modified on: 03/07/2021
*/
namespace classes;

class osMap extends mapClass{
	
	/*
	 To parse Open Street map api response 
	 @input Json object
	 @Output lat long Array for Open Street
	*/
	function parseResults($results) : array {
			$results = json_decode($results);
			$parseData = array();
			foreach($results as $data) {
				$map['lat'] = $data->lat;
				$map['lon'] = $data->lon;
				$parseData[] = $map;
			}
			return $parseData;
	}
}
?>