<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class MovedPermanentlyException extends HttpStatusException {

	protected static $status = Http::STATUS_MOVED_PERMANENTLY;

}