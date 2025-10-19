<?php

use Illuminate\Support\Facades\Route;

use App\Models\machines;
use App\Models\technicians;
use App\Models\maintenance_records;
use App\Models\notifications;
use App\Http\Controllers\Machine02Controller;


Route::get('/1', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/show_machine', function () {
    $model = machines::all();
    return view('show_machine', compact('model'));
})->name('show_machine');

Route::get('/show_technician', function () {
    $model = technicians::all();
    return view('show_technician', compact('model'));
})->name('show_technician');

Route::get('/show_record', function () {
    $model = maintenance_records::all();
    return view('show_record', compact('model'));
})->name('show_record');

