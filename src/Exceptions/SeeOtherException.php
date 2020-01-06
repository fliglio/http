<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class SeeOtherException extends LocationStatusException {

	protected static $status = Http::STATUS_SEE_OTHER;

}