<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class NotImplementedException extends HttpStatusException {

	protected static $status = Http::STATUS_NOT_IMPLEMENTED;

}