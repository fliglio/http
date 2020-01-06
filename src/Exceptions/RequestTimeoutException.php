<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class RequestTimeoutException extends HttpStatusException {

	protected static $status = Http::STATUS_REQUEST_TIMEOUT;

}