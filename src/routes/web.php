<?php

use Illuminate\Support\Facades\Route;

Route::get('/test-500-error', function () {
    throw new \Exception('This is a test 500 error.');
});