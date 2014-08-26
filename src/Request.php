<?php

namespace SevenPercent\HTTP;

use SevenPercent\URL;

class Request {

	public $method = 'GET';

	public $url;

	public static function createFromUserAgentRequest() {
		$httpRequest = new self();
		$httpRequest->method = $_SERVER['REQUEST_METHOD'];
		$httpRequest->url = new URL($_SERVER['REQUEST_URI']);
		return $httpRequest;
	}
}
