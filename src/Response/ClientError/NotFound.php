<?php

namespace SevenPercent\HTTP\Response\ClientError;

use SevenPercent\HTTP\Response;

final class NotFound extends Response {

	protected $statusCode = 404;
	protected $status = 'Not Found';

	public $body = '<html><head><title>404 Not Found</title></head><body><h1>404 Not Found</h1></body></html>';

	public $headers = [
		'Cache-Control' => 'no-cache, no-store, must-revalidate, pre-check=0, post-check=0',
	];
}
