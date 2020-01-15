<?php

namespace Fliglio\Http;

interface ResponseReader {

	public function getStatus();
	public function getBody();
	public function getHeaders();
}

