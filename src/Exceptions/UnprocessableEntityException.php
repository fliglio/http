<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class UnprocessableEntityException extends HttpStatusException {

	protected static $status = Http::STATUS_UNPROCESSABLE_ENTITY;

}