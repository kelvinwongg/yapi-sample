<?php

namespace YapiSample\Employees;

class Id
{
	public function get($file, $request, $response, $crudHook)
	{
		$response->setContent([
			'id' => $request->match['path_parameters']['id'],
			'employee_name' => 'Steve Davis',
			'employee_title' => 'Staff'
		]);
	}
}
