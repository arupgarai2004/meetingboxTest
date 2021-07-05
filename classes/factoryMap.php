<?php
/*
About: factory  class to create diffrent type of maps object
Author:Arup
*/
namespace classes;

class factoryMap{
	
	/*
	 Factory class  To Create Object
	 @input Map API Name
	 @Output Object of Class 
	*/
	public static function create($maptype):object{
		$maptype = 'classes\\'.$maptype;
        return new $maptype();
    }
	
}

?>