<?php

namespace Fliglio\Http;

interface HttpClient {

	public function get($url, array $headers = array());
	public function put($url, $body = null, array $headers = array());
	public function post($url, $body = null, array $headers = array());
	public function delete($url, array $headers = array());

	/**
	 * @return ResponseReader 
	 */
	public function makeRequest(RequestWriter $request);

}
