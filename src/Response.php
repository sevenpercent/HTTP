<?php

namespace SevenPercent\HTTP;

abstract class Response {

	protected $statusCode = 0;
	protected $status = 0;

	public $headers = [];
	public $body = '';

	public function __construct(array $headers = [], $body = NULL) {
		if ($headers !== []) {
			$this->headers = array_merge($this->headers, $headers);
		}
		if ($body !== NULL) {
			$this->body = $body;
		}
	}

	final public function send() {
		header("HTTP/1.1 $this->statusCode $this->status");
		foreach ($this->headers as $header => $value) {
			header("$header: $value");
		}
		if (isset($this->headers['Content-Type']) && $this->headers['Content-Type'] === 'text/html; charset="UTF-8"') {
			header('Content-Encoding: gzip');
			ob_start('ob_gzhandler');
		}
		echo $this->body;
		return 0;
	}
}