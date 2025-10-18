
<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Machine02Controller;
use App\Http\Controllers\Api\Maintenance_recordsController;


Route::middleware('api')->group(function () {
    Route::apiResource('machines', Machine02Controller::class);
});



Route::middleware('api')->group(function () {
    Route::apiResource('records',Maintenance_recordsController::class);
});
