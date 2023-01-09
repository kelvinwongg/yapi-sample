<?php

namespace YapiSample;

class Employees
{
	public function __construct($file, $request, $response, $crudHook)
	{
		$response->setContent('added from Employees::__construct');
	}
	
	public function get($file, $request, $response, $crudHook)
	{
		$response->setContent('added from Employees::get');
	}
}
