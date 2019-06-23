<?php

namespace yii2tool\offline\domain\exceptions;

use Exception;
use yii\web\HttpException;

class PreventionException extends HttpException {
	
	public function __construct($message = '', $code = 0, Exception $previous = null) {
		parent::__construct(500, $message, $code, $previous);
	}
	
}
