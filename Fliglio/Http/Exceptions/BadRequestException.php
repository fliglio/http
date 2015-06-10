<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class BadRequestException extends HttpStatusException {

	protected static $status = Http::STATUS_BAD_REQUEST;

}