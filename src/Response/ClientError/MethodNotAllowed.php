<?php

namespace SevenPercent\HTTP\Response\ClientError;

use SevenPercent\HTTP\Response;

final class MethodNotAllowed extends Response {

	protected $statusCode = 405;
	protected $status = 'Method Not Allowed';

	public $body = '<html><head><title>405 Method Not Allowed</title></head><body><h1>405 Method Not Allowed</h1></body></html>';
}
