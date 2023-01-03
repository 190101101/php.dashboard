<?php 

use \Pattern\Creational\Singleton\Singleton;
use \library\cookie;

class limit extends Singleton
{
	public static function set($limit)
	{
        return cookie::create('limit', (int) $limit);
	}	

	public static function page()
	{
		return cookie::read('limit') ?? 5;
	}	
}
