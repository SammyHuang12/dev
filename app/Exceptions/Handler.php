<?php
namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    public function render($request, Throwable $exception)
    {
        // if ($request->is('admin/*')) {

            if ($exception instanceof ModelNotFoundException) {
                return response()->view('admin.notfound', [], 404);
            }

            if ($exception instanceof NotFoundHttpException) {
            return view('admin.notfound');    
            return response()->view('admin.notfound', [], 404);
            }
        // }

        return parent::render($request, $exception);
    }
}