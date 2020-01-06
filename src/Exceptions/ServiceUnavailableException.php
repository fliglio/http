<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class ServiceUnavailableException extends HttpStatusException {

	protected static $status = Http::STATUS_SERVICE_UNAVAILABLE;

}