<?php

use Illuminate\Support\Facades\Route;

use App\Models\machines;
use App\Models\technicians;
use App\Models\maintenance_records;
use App\Models\notifications;
use App\Http\Controllers\Machine02Controller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', function () {
    $model = machines::all();
    return view('show_machine', compact('model'));
});

Route::get('/tech', function () {
    $model = technicians::all();
    return view('show_technician', compact('model'));
});


Route::get('/record', function () {
    $model = maintenance_records::all();
    return view('show_record', compact('model'));
});

// Route::get('/show_machine', function () {
//     $model = machines::all();
//     return view('show_machine', compact('model'));
// });

// Route::get('/show', [MachineController::class,
// 'index'])->name('show_machine');







