<?php

namespace Fliglio\Http;

interface HttpClient {

	/**
	 * @return ResponseReader 
	 */
	public function makeRequest(RequestWriter $request);

}
