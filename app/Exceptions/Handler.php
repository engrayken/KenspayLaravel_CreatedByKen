<?php

namespace App\Exceptions;

use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;



class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

                $this->reportable(function(Exception $ex){
            return failedApiResponse($ex->getMessage(), [], $ex->getTraceAsString(), 500);
        });

        $this->renderable(function(HttpException $ex){
            return failedApiResponse($ex->getMessage(), $ex->getHeaders()['data'] ?? [], [], $ex->getStatusCode());
        });

        $this->renderable(function(ValidationException $ex){
            return failedApiResponse($ex->getMessage(),[], $ex->errors(), 400);
        });

        $this->renderable(function(Exception $ex){
            return failedApiResponse($ex->getMessage(), [], $ex->getTraceAsString(), 500);
        });
    }
}
