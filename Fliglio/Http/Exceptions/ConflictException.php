<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class ConflictException extends HttpStatusException {

	protected static $status = Http::STATUS_CONFLICT;

}