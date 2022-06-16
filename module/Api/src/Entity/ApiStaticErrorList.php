<?php

declare(strict_types=1);

namespace Api\Entity;

use Laminas\ApiTools\ApiProblem\ApiProblem;

class ApiStaticErrorList
{
    /** @var array $errorList */
    public static $errorList = [
        200 => 'OK',
        201 => 'CREATED',
        202 => 'ACCEPTED',
        304 => 'NOT_MODIFIED',
        400 => 'BAD_REQUEST',
        401 => 'UNAUTHORIZED',
        402 => 'PAYMENT_REQUIRED',
        403 => 'FORBIDDEN',
        404 => 'NOT_FOUND',
        405 => 'METHOD_NOT_ALLOWED',
        409 => 'CONFLICT',
        500 => 'INTERNAL_SERVER_ERROR',
    ];

  /**
   * @param int    $errorNumber
   * @param string $errorText
   * @return ApiProblem
   */
    public static function getError($errorNumber, $errorText = '')
    {
        if (empty($errorText)) {
            return new ApiProblem($errorNumber, self::$errorList[$errorNumber]);
        } else {
            return new ApiProblem($errorNumber, $errorText);
        }
    }
}
