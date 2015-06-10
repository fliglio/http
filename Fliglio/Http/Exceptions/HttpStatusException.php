<?php

namespace Fliglio\Http\Exceptions;

class HttpStatusException extends \Exception {

	protected static $status;

	public function getStatusCode() {
		return static::$status;
	}

}