<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class NotFoundException extends HttpStatusException {

	protected static $status = Http::STATUS_NOT_FOUND;
	
}