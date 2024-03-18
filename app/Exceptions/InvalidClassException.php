<?php

namespace App\Exceptions;

use Exception;

class InvalidClassException extends Exception
{
    public function report()
    {

    }

    public function render($request): \Illuminate\Http\Response
    {
        return response()->view('exception.invalid_class');
    }
}
