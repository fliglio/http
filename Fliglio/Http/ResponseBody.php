<?php

namespace Fliglio\Http;

/**
 * Generic Response interface so that custom response objects can be created
 *
 */
interface ResponseBody {
	public function value();
}
