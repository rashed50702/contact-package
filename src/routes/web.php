<?php

use Illuminate\Http\Request;
use Rashed\Contact\Http\Controllers\ContactController;

Route::controller(ContactController::class)->group(function () {
    Route::get('contact', 'index')->name('contact');
    Route::post('contact', 'send');
});