<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

abstract class LocationStatusException extends HttpStatusException {

	private $location;

	public function __construct($location = '') {
		$this->location = $location;
	}

	public function getLocation() {
		return $this->location;
	}

}