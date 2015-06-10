<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class LengthRequiredException extends HttpStatusException {

	protected static $status = Http::STATUS_LENGTH_REQUIRED;
	
}