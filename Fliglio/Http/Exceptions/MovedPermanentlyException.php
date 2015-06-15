<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class MovedPermanentlyException extends HttpStatusException {

	protected static $status = Http::STATUS_MOVED_PERMANENTLY;

	private $location;
	public function __construct($location = '') {
		$this->location = $location;
	}
	public function getLocation() {
		return $this->location;
	}
}
