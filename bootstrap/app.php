<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
//        $middleware->append([
//            \App\Http\Middlewares\DisableCors::class,
//            Illuminate\Http\Middleware\HandleCors::class,
//            Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
//            Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
//        ]);
//        $middleware->group('web', []);
//        $middleware->group('api', [
//            Illuminate\Routing\Middleware\SubstituteBindings::class,
//        ]);
//        $middleware->alias([
//            // default
//            'cache.headers' => Illuminate\Http\Middleware\SetCacheHeaders::class,
//            'can' => Illuminate\Auth\Middleware\Authorize::class,
//            'precognitive' => Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests::class,
//            'throttle' => Illuminate\Routing\Middleware\ThrottleRequests::class,
//        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
