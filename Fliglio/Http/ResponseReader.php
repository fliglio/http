<?php

namespace Fliglio\Http;

interface ResponseReader {

	public function setStatus();
	public function getStatus();
	public function setBody();
	public function getBody();
	public function setHeaders();
	public function getHeaders();
}

