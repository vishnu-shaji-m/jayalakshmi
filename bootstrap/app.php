<?php

use App\Http\Middleware\AdminAuth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin.auth' => AdminAuth::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (Exception $exception, Request $request) {
            if ($exception instanceof NotFoundHttpException || $exception instanceof ErrorException) {
                if ($request->is(app('backend.prefix') . '/*')) {
                    return response()->view('admin::errors.404', [], Response::HTTP_NOT_FOUND);
                } else {
                    return response()->view('errors.404', [], Response::HTTP_NOT_FOUND);
                }
            }

            // Handle 500 error
            if ($exception instanceof HttpException && $exception->getStatusCode() === 500) {
                if ($request->is(app('backend.prefix') . '/*')) {
                    return response()->view('admin::errors.500', [], Response::HTTP_INTERNAL_SERVER_ERROR);
                } else {
                    return response()->view('errors.500', [], Response::HTTP_INTERNAL_SERVER_ERROR);
                }
            }

            // Handle MethodNotAllowedHttpException
            if ($exception instanceof MethodNotAllowedHttpException) {
                if ($request->is(app('backend.prefix') . '/*')) {
                    return response()->view('admin::errors.404', [], Response::HTTP_METHOD_NOT_ALLOWED);
                } else {
                    return response()->view('errors.404', [], Response::HTTP_METHOD_NOT_ALLOWED);
                }
            }

            // Handle ModelNotFoundException or BadMethodCallException
            if ($exception instanceof ModelNotFoundException || $exception instanceof BadMethodCallException) {
                if ($request->is(app('backend.prefix') . '/*')) {
                    return response()->view('admin::errors.404', [], Response::HTTP_NOT_FOUND);
                } else {
                    return response()->view('errors.404', [], Response::HTTP_NOT_FOUND);
                }
            }

            // Handle Symfony HttpException for status codes 419 and 403
            if ($exception instanceof HttpException) {
                $statusCode = $exception->getStatusCode();
                if ($statusCode === 419 || $statusCode === 403) {
                    if ($request->is(app('backend.prefix') . '/*')) {
                        return response()->view('admin::errors.404', [], Response::HTTP_NOT_FOUND);
                    } else {
                        return response()->view('errors.404', [], Response::HTTP_NOT_FOUND);
                    }
                }
            }
        });
    })->create();
