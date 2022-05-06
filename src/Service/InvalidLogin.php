<?php

namespace App\Service;

use Exception;
use JetBrains\PhpStorm\Pure;

class InvalidLogin extends Exception
{
    #[Pure] public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}