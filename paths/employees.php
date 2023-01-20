<?php

namespace YapiSample;

class Employees
{
	public function get($request, $response, $file, $hook)
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

	public function after($request, $response, $file, $hook)
	{
		if ($request->method === 'get') {
			$response->setContent(array_merge($response->getContent(), [0 => ['after' => 'Added by After Hook']]));
		}
	}
}
