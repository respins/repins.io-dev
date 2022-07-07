<?php

use Illuminate\Support\Facades\Route;
use Respins\BaseFunctions;
use Illuminate\Http\Request;
use Respins\BaseFunctions\Controllers\RoutingController;
## Base.php
# If using system across different domains/hosts or productionalm, make sure to read general explaination regarding laravel routing/mw:
# Laravel Middleware @ https://laravel.com/docs/9.x/middleware

# API Middleware 
# Headerless data (without frontend) under most circumstances will be JSON data, but can also be form-data, XML data or whatever is needed.
Route::middleware('api', 'throttle:500,1')->group(function () {
    Route::get('/aggregation/createSession', [RoutingController::class, 'createSession']);
});

## Auth Middleware
# In this case authentication is on a operator<->player level and not authentication for aggregation<->operator or operator<->aggregation level.
Route::middleware('auth', 'throttle:2000,1')->group(function () {

});

## Web middleware
# Middleware to use when in need to 'catch' legitimate player request data to forward using our proxy helpers or to display frontend pre-auth on casino level.
Route::middleware('web', 'throttle:2000,1')->group(function () {
    Route::get('/hoppa', function () {
        return view('respins-base-views::error-default-template')->with('error', $message);
    });
});
