<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'redirectRolePage'=>\App\Http\Middleware\UserRoleRedirect::class,
            'alumniHead'=>\App\Http\Middleware\AlumniHead::class,
            'alumniOfficer' => \App\Http\Middleware\AlumniOfficer::class,
            'alumni' => \App\Http\Middleware\Alumni::class,
            'registrar' => \App\Http\Middleware\Registrar::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
