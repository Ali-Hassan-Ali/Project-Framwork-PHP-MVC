<?php 

namespace  project\Http;

class Route 
{

	// protected Request $request;
	public Request $request;

	// protected Response $response;
	public Response $response;

	public function __construct (Request $request, Response $response)
	{
		$this->request 	= $request;

		$this->response = $response;

	}//end of function__construct

	public static array $routes = [];

	public function get($route, $action)
	{
		
		self::$routes['get'][$route] = $action;

	}//end of function get

	public function post($route, $action)
	{

		self::$routes['post'][$route] = $action;

	}//end of function post

}//end of class routs

