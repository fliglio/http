<?php

namespace Fliglio\Http;

interface RequestWriter {
	
	public function getMethod();
	public function getUrl();
	public function getHeaders();
	public function getGetParams();
	public function getBody();
}