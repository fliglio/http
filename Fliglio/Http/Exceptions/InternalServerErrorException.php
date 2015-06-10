<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class InternalServerErrorException extends HttpStatusException {

	protected static $status = Http::STATUS_INTERNAL_SERVER_ERROR;

}