<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class SeeOtherException extends HttpStatusException {

	protected static $status = Http::STATUS_SEE_OTHER;

}