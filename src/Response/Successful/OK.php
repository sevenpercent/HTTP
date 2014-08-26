<?php

namespace SevenPercent\HTTP\Response\Successful;

use SevenPercent\HTTP\Response;

final class OK extends Response {

	protected $statusCode = 200;
	protected $status = 'OK';

	public $headers = [
		'Connection' => 'keep-alive',
	];
}
