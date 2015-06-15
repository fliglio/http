<?php

namespace Fliglio\Http;

interface RequestWriter {
	
	public function getMethod();
	public function getUrl();
	public function getHeaders();
	public function getBody();
}
