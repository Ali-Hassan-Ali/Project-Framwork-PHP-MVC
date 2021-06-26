<?php 

namespace  project\Http;

class Request
{

	public function method()
	{
		
		return strtolower($_SERVER['REQUEST_METHOD']);
		// return $_SERVER['REQUEST_METHOD'];

	}//end of function method

	public function path()
	{
		$path = $_SERVER['REQUEST_URL'] ?? '/';

		return str_contains($path, '?') ? explode('?', $path)[0]: $path;
		// return strtolower($path,'?') ? explode('?', $path)[0]: $path;
	}

}//end of class Response

