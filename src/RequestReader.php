<?php

namespace Fliglio\Http;

interface RequestReader {

	public function getHttpMethod();
	public function getProtocol();
	public function getHost();
	public function getUrl();

	public function getGetParams();
	public function getBody();
	public function getFiles();

	public function getHeaders();
	public function isHeaderSet($key);
	public function getHeader($key);

}