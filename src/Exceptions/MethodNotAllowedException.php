<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class MethodNotAllowedException extends HttpStatusException {

	protected static $status = Http::STATUS_METHOD_NOT_ALLOWED;
	
}