<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('intern.dashboard');
});

Route::get('/report-status', function () {
    return view('intern.report-status');  // Refers to resources/views/interns/report-status.blade.php
});