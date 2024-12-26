<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    event(new \App\Events\SendMessage());

    dd('Event Run Successfully.');
});
