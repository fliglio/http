<?php
namespace Fliglio\Http;

class Http {
	const HTTPS = 'https';
	const HTTP  = 'http';

	const METHOD_POST = 'post';
	const METHOD_GET = 'get';
	const METHOD_PUT = 'put';
	const METHOD_PATCH = 'patch';
	const METHOD_DELETE = 'delete';
	const METHOD_OPTIONS = 'options';

	const STATUS_CONTINUE = 100;
	const STATUS_SWITCHING_PROTOCOLS = 101;
	const STATUS_PROCESSING = 102;
	const STATUS_OK = 200;
	const STATUS_CREATED = 201;
	const STATUS_ACCEPTED = 202;
	const STATUS_NON_AUTHORITATIVE_INFORMATION = 203;
	const STATUS_NO_CONTENT = 204;
	const STATUS_RESET_CONTENT = 205;
	const STATUS_PARTIAL_CONTENT = 206;
	const STATUS_MULTI_STATUS = 207;
	const STATUS_MULTIPLE_CHOICES = 300;
	const STATUS_MOVED_PERMANENTLY = 301;
	const STATUS_FOUND = 302;
	const STATUS_SEE_OTHER = 303;
	const STATUS_NOT_MODIFIED = 304;
	const STATUS_USE_PROXY = 305;
	const STATUS_SWITCH_PROXY = 306;
	const STATUS_TEMPORARY_REDIRECT = 307;
	const STATUS_BAD_REQUEST = 400;
	const STATUS_UNAUTHORIZED = 401;
	const STATUS_PAYMENT_REQUIRED = 402;
	const STATUS_FORBIDDEN = 403;
	const STATUS_NOT_FOUND = 404;
	const STATUS_METHOD_NOT_ALLOWED = 405;
	const STATUS_NOT_ACCEPTABLE = 406;
	const STATUS_PROXY_AUTHENTICATION_REQUIRED = 407;
	const STATUS_REQUEST_TIMEOUT = 408;
	const STATUS_CONFLICT = 409;
	const STATUS_GONE = 410;
	const STATUS_LENGTH_REQUIRED = 411;
	const STATUS_PRECONDITION_FAILED = 412;
	const STATUS_REQUEST_ENTITY_TOO_LARGE = 413;
	const STATUS_REQUEST_URI_TOO_LONG = 414;
	const STATUS_UNSUPPORTED_MEDIA_TYPE = 415;
	const STATUS_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
	const STATUS_EXPECTATION_FAILED = 417;
	const STATUS_IM_A_TEAPOT = 418;
	const STATUS_UNPROCESSABLE_ENTITY = 422;
	const STATUS_LOCKED = 423;
	const STATUS_FAILED_DEPENDENCY = 424;
	const STATUS_UNORDERED_COLLECTION = 425;
	const STATUS_UPGRADE_REQUIRED = 426;
	const STATUS_RETRY_WITH = 449;
	const STATUS_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;
	const STATUS_INTERNAL_SERVER_ERROR = 500;
	const STATUS_NOT_IMPLEMENTED = 501;
	const STATUS_BAD_GATEWAY = 502;
	const STATUS_SERVICE_UNAVAILABLE = 503;
	const STATUS_GATEWAY_TIMEOUT = 504;
	const STATUS_HTTP_VERSION_NOT_SUPPORTED = 505;
	const STATUS_VARIANT_ALSO_NEGOTIATES = 506;
	const STATUS_INSUFFICIENT_STORAGE = 507;
	const STATUS_BANDWIDTH_LIMIT_EXCEEDED = 509;
	const STATUS_NOT_EXTENDED = 510;

	private static $messages = array(
		self::STATUS_CONTINUE => 'Continue',
		self::STATUS_SWITCHING_PROTOCOLS => 'Switching Protocols',
		self::STATUS_PROCESSING => 'Processing',
		self::STATUS_OK => 'OK',
		self::STATUS_CREATED => 'Created',
		self::STATUS_ACCEPTED => 'Accepted',
		self::STATUS_NON_AUTHORITATIVE_INFORMATION => 'Non-Authoritative Information',
		self::STATUS_NO_CONTENT => 'No Content',
		self::STATUS_RESET_CONTENT => 'Reset Content',
		self::STATUS_PARTIAL_CONTENT => 'Partial Content',
		self::STATUS_MULTI_STATUS => 'Multi-Status',
		self::STATUS_MULTIPLE_CHOICES => 'Multiple Choices',
		self::STATUS_MOVED_PERMANENTLY => 'Moved Permanently',
		self::STATUS_FOUND => 'Found',
		self::STATUS_SEE_OTHER => 'See Other',
		self::STATUS_NOT_MODIFIED => 'Not Modified',
		self::STATUS_USE_PROXY => 'Use Proxy',
		self::STATUS_SWITCH_PROXY => 'Switch Proxy',
		self::STATUS_TEMPORARY_REDIRECT => 'Temporary Redirect',
		self::STATUS_BAD_REQUEST => 'Bad Request',
		self::STATUS_UNAUTHORIZED => 'Unauthorized',
		self::STATUS_PAYMENT_REQUIRED => 'Payment Required',
		self::STATUS_FORBIDDEN => 'Forbidden',
		self::STATUS_NOT_FOUND => 'Not Found',
		self::STATUS_METHOD_NOT_ALLOWED => 'Method Not Allowed',
		self::STATUS_NOT_ACCEPTABLE => 'Not Acceptable',
		self::STATUS_PROXY_AUTHENTICATION_REQUIRED => 'Proxy Authentication Required',
		self::STATUS_REQUEST_TIMEOUT => 'Request Timeout',
		self::STATUS_CONFLICT => 'Conflict',
		self::STATUS_GONE => 'Gone',
		self::STATUS_LENGTH_REQUIRED => 'Length Required',
		self::STATUS_PRECONDITION_FAILED => 'Precondition Failed',
		self::STATUS_REQUEST_ENTITY_TOO_LARGE => 'Request Entity Too Large',
		self::STATUS_REQUEST_URI_TOO_LONG => 'Request-URI Too Long',
		self::STATUS_UNSUPPORTED_MEDIA_TYPE => 'Unsupported Media Type',
		self::STATUS_REQUESTED_RANGE_NOT_SATISFIABLE => 'Requested Range Not Satisfiable',
		self::STATUS_EXPECTATION_FAILED => 'Expectation Failed',
		self::STATUS_IM_A_TEAPOT => 'I\'m a teapot',
		self::STATUS_UNPROCESSABLE_ENTITY => 'Unprocessable Entity',
		self::STATUS_LOCKED => 'Locked',
		self::STATUS_FAILED_DEPENDENCY => 'Failed Dependency',
		self::STATUS_UNORDERED_COLLECTION => 'Unordered Collection',
		self::STATUS_UPGRADE_REQUIRED => 'Upgrade Required',
		self::STATUS_RETRY_WITH => 'Retry With',
		self::STATUS_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS => 'Blocked by Windows Parental Controls',
		self::STATUS_INTERNAL_SERVER_ERROR => 'Internal Server Error',
		self::STATUS_NOT_IMPLEMENTED => 'Not Implemented',
		self::STATUS_BAD_GATEWAY => 'Bad Gateway',
		self::STATUS_SERVICE_UNAVAILABLE => 'Service Unavailable',
		self::STATUS_GATEWAY_TIMEOUT => 'Gateway Timeout',
		self::STATUS_HTTP_VERSION_NOT_SUPPORTED => 'HTTP Version Not Supported',
		self::STATUS_VARIANT_ALSO_NEGOTIATES => 'Variant Also Negotiates',
		self::STATUS_INSUFFICIENT_STORAGE => 'Insufficient Storage',
		self::STATUS_BANDWIDTH_LIMIT_EXCEEDED => 'Bandwidth Limit Exceeded',
		self::STATUS_NOT_EXTENDED => 'Not Extended',
	);
	
	public static function getStatusMessage($code) {
		if (!in_array($code, array_keys(self::$messages))) {
			throw new \UnexpectedValueException(sprintf('"$s" not a valid http code', $code));
		}
		return self::$messages[$code];
	}
}
