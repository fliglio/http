<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class PreconditionFailedException extends HttpStatusException {

	protected static $status = Http::STATUS_PRECONDITION_FAILED;
	
}