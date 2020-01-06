<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class GatewayTimeoutException extends HttpStatusException {

	protected static $status = Http::STATUS_GATEWAY_TIMEOUT;
	
}