<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class FoundException extends HttpStatusException {

	protected static $status = Http::STATUS_FOUND;

	private $location;
	public function __construct($location = '') {
		$this->location = $location;
	}
	public function getLocation() {
		return $this->location;
	}
}

