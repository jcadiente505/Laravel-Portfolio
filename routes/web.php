<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('layout');
});

Route::get('/download', function() {
    $file = public_path().'/resume.pdf';

    $headers = array(
        'Content-Type: application/pdf',
    );

    return response()->download($file, 'Resume.pdf', $headers);
});
