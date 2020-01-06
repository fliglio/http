<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class BadGatewayException extends HttpStatusException {

	protected static $status = Http::STATUS_BAD_GATEWAY;

}