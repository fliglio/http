<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class ForbiddenException extends HttpStatusException {

	protected static $status = Http::STATUS_FORBIDDEN;
	
}