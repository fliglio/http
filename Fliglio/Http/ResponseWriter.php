<?php

namespace Fliglio\Http;

interface ResponseWriter {

	public function setBody(ResponseBody $content);
	public function getBody();
	
	public function addHeader($key, $val);
	public function getHeaders();
	public function hasHeader($key);

	public function setStatus($code);
	public function getStatus();

	public function setContentType($type);
	public function getContentType();
}

