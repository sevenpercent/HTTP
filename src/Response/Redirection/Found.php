<?php

namespace SevenPercent\HTTP\Response\Redirection;

use SevenPercent\HTTP\Response;

final class Found extends Response {

	protected $statusCode = 302;
	protected $status = 'Found';

	public $headers = [
		'Cache-Control' => 'no-cache, no-store, must-revalidate, pre-check=0, post-check=0',
	];
}
