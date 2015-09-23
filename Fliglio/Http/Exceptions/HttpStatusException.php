<?php

namespace Fliglio\Http\Exceptions;

class HttpStatusException extends \Exception {

	protected static $status;

	private $errorInfo;

	public function getStatusCode() {
		return static::$status;
	}
	public function getErrorInfo() {
		return $this->errorInfo;
	}
	public function setErrorInfo($errorInfo) {
		$this->errorInfo = $errorInfo;
		return $this;
	}

}