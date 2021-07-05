<?php
/*
About: Google Map class to parse Google Map response
Author:Arup Garai
Last Modified on: 03/07/2021
*/
namespace classes;

class googleMap extends mapClass{
	
	/*
	 To parse google map api response 
	 @input Json object
	 @Output lat long Array for Google map
	*/
	function parseResults($results) : array {
			$response = json_decode($results);			
			$parseData = array();			
			if ($response->status == 'OK') {
				foreach($response->results as $data) {
					$map['lat'] = $data->geometry->location->lat;
					$map['lon'] = $data->geometry->location->lng;
					$parseData[] = $map;
				}
			}
			return $parseData;
	}
}
?>