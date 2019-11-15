<?php

namespace Fliglio\Http\Exceptions;

use Fliglio\Http\Http;

class BodyTest extends \PHPUnit_Framework_TestCase {

	private $exceptionMap = [
		Http::STATUS_FOUND => 'Fliglio\Http\Exceptions\FoundException',
		Http::STATUS_MOVED_PERMANENTLY => 'Fliglio\Http\Exceptions\MovedPermanentlyException',
		Http::STATUS_SEE_OTHER => 'Fliglio\Http\Exceptions\SeeOtherException',
		Http::STATUS_BAD_REQUEST => 'Fliglio\Http\Exceptions\BadRequestException',
		Http::STATUS_UNAUTHORIZED => 'Fliglio\Http\Exceptions\UnauthorizedException',
		Http::STATUS_FORBIDDEN => 'Fliglio\Http\Exceptions\ForbiddenException',
		Http::STATUS_NOT_FOUND => 'Fliglio\Http\Exceptions\NotFoundException',
		Http::STATUS_METHOD_NOT_ALLOWED => 'Fliglio\Http\Exceptions\MethodNotAllowedException',
		Http::STATUS_REQUEST_TIMEOUT => 'Fliglio\Http\Exceptions\RequestTimeoutException',
		Http::STATUS_CONFLICT => 'Fliglio\Http\Exceptions\ConflictException',
		Http::STATUS_LENGTH_REQUIRED => 'Fliglio\Http\Exceptions\LengthRequiredException',
		Http::STATUS_PRECONDITION_FAILED => 'Fliglio\Http\Exceptions\PreconditionFailedException',
		Http::STATUS_UNPROCESSABLE_ENTITY => 'Fliglio\Http\Exceptions\UnprocessableEntityException',
		Http::STATUS_INTERNAL_SERVER_ERROR => 'Fliglio\Http\Exceptions\InternalServerErrorException',
		Http::STATUS_NOT_IMPLEMENTED => 'Fliglio\Http\Exceptions\NotImplementedException',
		Http::STATUS_BAD_GATEWAY => 'Fliglio\Http\Exceptions\BadGatewayException',
		Http::STATUS_SERVICE_UNAVAILABLE => 'Fliglio\Http\Exceptions\ServiceUnavailableException',
		Http::STATUS_GATEWAY_TIMEOUT => 'Fliglio\Http\Exceptions\GatewayTimeoutException',
		Http::STATUS_TOO_MANY_REQUESTS => 'Fliglio\Http\Exceptions\TooManyRequestsException',
	];

	public function testStatusCodes() {
		foreach ($this->exceptionMap as $status => $className) {
			$obj = new $className();

			$this->assertEquals($status, $obj->getStatusCode());
		}
	}

	public function testDataPayload() {
		// given
		try {

			// when
			throw (new ConflictException)
				->setData($data = ['foo' => 'bar']);

		} catch (ConflictException $e) {

			//then
			$this->assertEquals($data, $e->getData());
		}
	}

	public function testErrorPayload() {
		// given
		try {

			// when
			throw (new ConflictException)
				->setErrorInfo($error = 'You got an error!');
		} catch (ConflictException $e) {

			//then
			$this->assertEquals($error, $e->getErrorInfo());
		}

	}

}
