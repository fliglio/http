<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class TooManyRequestsException extends HttpStatusException {

	protected static $status = Http::STATUS_TOO_MANY_REQUESTS;

}

