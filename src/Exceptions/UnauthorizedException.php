<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class UnauthorizedException extends HttpStatusException {

	protected static $status = Http::STATUS_UNAUTHORIZED;

}