<?php

namespace YapiSample;

class Employees
{	
	public function get($file, $request, $response, $crudHook)
	{
		$response->setContent([
			[
				'id' => 1,
				'employee_name' => 'Steve Davis',
				'employee_title' => 'Staff'
			],
			[
				'id' => 2,
				'employee_name' => 'Ronnie Hart',
				'employee_title' => 'Admin'
			]
		]);
	}
}
