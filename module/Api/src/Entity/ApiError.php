<?php

declare(strict_types=1);

namespace Api\Entity;

use Laminas\ApiTools\ApiProblem\ApiProblem;

class ApiError
{
    /**
     * @param int    $code
     * @param string $message
     * @param array  $errors
     * @return ApiProblem
     */
    public static function getError($code, $message, $errors = [])
    {
        return new ApiProblem($code, $message, null, null, ['message' => $message, 'errors' => $errors]);
    }
}
