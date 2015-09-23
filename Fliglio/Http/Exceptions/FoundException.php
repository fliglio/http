<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class FoundException extends LocationStatusException {

	protected static $status = Http::STATUS_FOUND;

}
